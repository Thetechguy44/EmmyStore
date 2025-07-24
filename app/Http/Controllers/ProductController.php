<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('dashboard.product.products', compact('products'));
    }

    public function create()
    {
        return view('dashboard.product.add-product');
    }

    public function store(Request $request)
    {
        // Validate and store the product data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'discount_price' => 'nullable|numeric|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'nullable|string|max:255',
            'brand' => 'nullable|string|max:255',
            'stock' => 'required|integer|min:0',
            // 'is_active' => 'boolean',
        ]);

        // Handle file upload if an image is provided

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/products', $filename);
            $validatedData['image'] = $filename;
        }

        // if ($request->hasFile('image')) {
        //     $path = $request->file('image')->store('products', 'public');
        //     $validatedData['image'] = $path;
        // }

        // Create the product
        Product::create($validatedData);

        return redirect()->back()->with('success', 'Product created successfully.');
    }
}
