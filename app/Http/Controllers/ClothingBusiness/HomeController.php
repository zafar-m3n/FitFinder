<?php

namespace App\Http\Controllers\ClothingBusiness;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display the Clothing Business Dashboard.
     */
    public function index()
    {
        $latestOrders = Order::whereHas('product', function ($query) {
            $query->where('created_by', Auth::id());
        })->latest()->take(5)->get();

        return view('clothingbusiness.home', compact('latestOrders'));
    }
}
