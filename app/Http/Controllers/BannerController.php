<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::all();
        return view('dashboard.banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.banner.add-banner');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Create validator instance
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle validation failure
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Proceed if validation passes
        $banner = new Banner();
        $banner->title = $request->title;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/banners'), $imageName);
            $banner->image_path = $imageName;
        }

        $banner->save();

        return redirect()->route('banners')->with('success', 'Banner created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        return view('dashboard.banner.edit-banner', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $banner = Banner::findOrFail($id);

        // Validation
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Update banner details
        $banner->title = $request->title;

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($banner->image_path && file_exists(public_path('images/banners/' . $banner->image_path))) {
                unlink(public_path('images/banners/' . $banner->image_path));
            }

            // Upload new image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/banners'), $imageName);
            $banner->image_path = $imageName;
        }

        $banner->save();

        return redirect()->route('banners')->with('success', 'Banner updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        // Delete the banner image if exists
        if ($banner->image_path && file_exists(public_path('images/banners/' . $banner->image_path))) {
            unlink(public_path('images/banners/' . $banner->image_path));
        }

        $banner->delete();

        return redirect()->route('banners')->with('success', 'Banner deleted successfully.');
    }
}
