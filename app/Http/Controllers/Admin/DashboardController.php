<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Category;
use App\Models\Newsletter;
use App\Models\Promotion;
use App\Models\Product;
use App\Models\Preference;
use App\Models\About;

class DashboardController extends Controller
{
    /**
     * Display the Admin Dashboard with dynamic system analytics.
     */
    public function index()
    {
        // Fetch the analytics data
        $totalUsers = User::count();
        $totalCustomers = User::where('role', 'customer')->count();
        $totalClothingBusinesses = User::where('role', 'clothingbusiness')->count();
        $totalCategories = Category::count();
        $totalNewsletters = Newsletter::count();
        $totalPromotions = Promotion::count();
        $totalProducts = Product::count();
        $totalPreferences = Preference::count();
        $totalAbouts = About::count();

        return view('admin.dashboard', compact(
            'totalUsers',
            'totalCustomers',
            'totalClothingBusinesses',
            'totalCategories',
            'totalNewsletters',
            'totalPromotions',
            'totalProducts',
            'totalPreferences',
            'totalAbouts'
        ));
    }
}
