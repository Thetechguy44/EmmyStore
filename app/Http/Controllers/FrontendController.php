<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $setting = Setting::first();
        $products = Product::latest()->take(10)->get();

        return view('home', compact('setting', 'products'));
    }

    public function shop()
    {
        $shopProducts = Product::latest()->paginate(20);
        return view('shop', compact('shopProducts'));
    }

    public function productPage($id)
    {
        $product = Product::findOrFail($id);

        return view('product-page', compact('product'));
    }
}
