<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $banners = Banner::latest()->get();
        $products = Product::latest()->get();
        return view('dashboard.index', compact('banners', 'products'));
    }

    // Add more methods for handling dashboard-related logic here
}
