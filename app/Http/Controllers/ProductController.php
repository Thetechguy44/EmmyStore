<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'nullable|string|max:255',
            'brand' => 'nullable|string|max:255',
            'stock' => 'required|integer|min:0',
            'is_active' => 'boolean',
        ]);

        // Create the product first
        $product = Product::create($validatedData);

        // Handle multiple file uploads
        if($request->hasfile('images')) {
            foreach($request->file('images') as $file) {
                $extention = $file->getClientOriginalExtension();
                $filename = time() . '_' . uniqid() . '.' . $extention;
                $file->move('images/products', $filename);
                
                // Create product image record
                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $filename,
                    'is_default' => false // You can set logic for default image
                ]);
            }
            
            // Set the first image as default for the product
            if ($product->images->count() > 0) {
                $firstImage = $product->images->first();
                $firstImage->is_default = true;
                $firstImage->save();
                
                // Also store the default image in the product record for easy access
                $product->image = $firstImage->image_path;
                $product->save();
            }
        }

        return redirect()->route('products')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        $product = Product::with('images')->findOrFail($product->id);
        return view('dashboard.product.edit-product', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'discount_price' => 'nullable|numeric|min:0',
            'keep_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'nullable|string|max:255',
            'brand' => 'nullable|string|max:255',
            'stock' => 'required|integer|min:0',
            'is_active' => 'boolean',
            'removed_images' => 'nullable|array', // For tracking removed images
            'default_image' => 'nullable|integer' // For tracking the default image
        ]);

        // Update the product
        $product->update($validatedData);

        // Handle removed images
        if ($request->filled('removed_images')) {
            $removedImageIds = explode(',', $request->removed_images);
            $removedImageIds = array_filter($removedImageIds); // Remove empty values
            
            foreach ($removedImageIds as $imageId) {
                $image = ProductImage::where('product_id', $product->id)
                                    ->where('id', $imageId)
                                    ->first();
                
                if ($image) {
                    // Delete the physical file
                    $imagePath = 'images/products/' . $image->image_path;
                    if (Storage::disk('public')->exists($imagePath)) {
                        Storage::disk('public')->delete($imagePath);
                    } elseif (file_exists(public_path('storage/' . $imagePath))) {
                        unlink(public_path('storage/' . $imagePath));
                    } elseif (file_exists(public_path($imagePath))) {
                        unlink(public_path($imagePath));
                    }
                    
                    // Delete the database record
                    $image->delete();
                }
            }
        }
        
        // Handle new image uploads
        if ($request->hasfile('new_images')) {
            foreach ($request->file('new_images') as $file) {
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '_' . uniqid() . '.' . $extension;
                $file->move('images/products', $filename);
                
                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $filename,
                    'is_default' => false
                ]);
            }
        }
        
        // Handle default image change
        if ($request->has('default_image')) {
            // Remove current default
            ProductImage::where('product_id', $product->id)
                        ->update(['is_default' => false]);
            
            // Set new default
            $newDefault = ProductImage::find($request->default_image);
            if ($newDefault) {
                $newDefault->is_default = true;
                $newDefault->save();
                
                // Update product's main image reference
                $product->image = $newDefault->image_path;
                $product->save();
            }
        }
        
        return redirect()->route('products')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        try {
            $product = Product::with('images')->findOrFail($id);
            
            // Delete associated images from storage
            foreach ($product->images as $image) {
                if (Storage::exists('images/products/' . $image->image_path)) {
                    Storage::delete('images/products/' . $image->image_path);
                }
            }
            
            // Delete the product (which will cascade delete images due to foreign key constraint)
            $product->delete();

            return redirect()->route('products')->with('success', 'Product deleted successfully.');

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error deleting product: ' . $e->getMessage()
            ], 500);
        }
    }
}
