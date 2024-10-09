<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class CustomerHomeController extends Controller
{
    /**
     * Show the customer dashboard with the latest orders.
     */
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())
                        ->orderBy('created_at', 'desc')
                        ->take(5)
                        ->get();

        return view('customer.home', compact('orders'));
    }
}
