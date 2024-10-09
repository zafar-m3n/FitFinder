<?php

namespace App\Http\Controllers\ClothingBusiness;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the orders for products owned by the logged-in clothing business.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $businessUserId = Auth::id();
        $orders = Order::whereHas('product', function ($query) use ($businessUserId) {
            $query->where('created_by', $businessUserId);
        })->with(['product', 'user'])->get();

        return view('clothingbusiness.orders.index', compact('orders'));
    }

    /**
     * Update the status of an order.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function updateStatus(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required|in:Pending,Cancelled,Shipping,Delivered',
        ]);

        $order->update([
            'status' => $request->status,
        ]);

        return redirect()->route('clothingbusiness.orders.index')->with('success', 'Order status updated successfully.');
    }
}
