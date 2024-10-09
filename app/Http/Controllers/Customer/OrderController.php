<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Place an order for a product.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::findOrFail($request->product_id);
        $totalPrice = $product->price * $request->quantity;
        Order::create([
            'user_id' => Auth::id(),
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'total_price' => $totalPrice,
            'status' => Order::STATUS_PENDING,
        ]);

        return redirect()->route('customer.orders.index')->with('success', 'Order placed successfully!');
    }

    /**
     * Display a list of orders placed by the customer.
     */
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())->with('product')->get();
        return view('customer.orders.index', compact('orders'));
    }

    /**
     * Cancel a pending order.
     */
    public function cancel(Order $order)
    {
        if ($order->user_id == Auth::id() && $order->status == Order::STATUS_PENDING) {
            $order->update(['status' => Order::STATUS_CANCELLED]);
            return redirect()->route('customer.orders.index')->with('success', 'Order cancelled successfully.');
        }

        return redirect()->route('customer.orders.index')->with('error', 'Order cannot be cancelled.');
    }
}
