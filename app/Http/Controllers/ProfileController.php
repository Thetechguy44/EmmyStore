<?php

namespace App\Http\Controllers;

use Hash;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = auth()->user();
        $setting = Setting::first();
        return view('dashboard.others.profile', compact('user', 'setting'));
    }

    public function update(Request $request)
    {
        $user = auth()->user();

        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'required|string|email|max:255',
            'company' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
        ]);

        // Update the user's profile
        $user->update($request->only('name', 'phone', 'email', 'company', 'city', 'address'));

        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully.');
    }

    public function changePassword(Request $request)
    {
        $user = auth()->user();

        // Create validator instance
        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        // Handle validation failure
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Check if the current password matches
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->route('profile.edit')
                ->with('error', 'Current password is incorrect.');
        }

        // Update the user's password
        $user->password = bcrypt($request->new_password);
        $user->save();

        return redirect()->route('profile.edit')
            ->with('success', 'Password changed successfully.');
    }

    public function updateSettings(Request $request)
    {
        $setting = Setting::first();

        // Create validator
        $validator = Validator::make($request->all(), [
            'company_name' => 'nullable|string|max:255',
            'company_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'company_favicon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'company_description' => 'nullable|string|max:500',
            'company_email' => 'nullable|email|max:255',
            'company_phone' => 'nullable|string|max:20',
            'company_address' => 'nullable|string|max:255',
            'company_city' => 'nullable|string|max:255',
            'company_state' => 'nullable|string|max:255',
            'company_zip' => 'nullable|string|max:20',
            'company_country' => 'nullable|string|max:255',
            'company_facebook' => 'nullable|url|max:255',
            'company_twitter' => 'nullable|url|max:255',
            'company_linkedin' => 'nullable|url|max:255',
            'company_instagram' => 'nullable|url|max:255',
            'company_footer' => 'nullable|string|max:500',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $validatedData = $validator->validated();

        // Handle company_logo upload
        if ($request->hasFile('company_logo')) {
            if ($setting && $setting->company_logo && file_exists(public_path('images/logos/' . $setting->company_logo))) {
                unlink(public_path('images/logos/' . $setting->company_logo));
            }

            $image = $request->file('company_logo');
            $imageName = time() . '_logo.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/logos'), $imageName);

            $validatedData['company_logo'] = $imageName;
        }

        // Handle company_favicon upload
        if ($request->hasFile('company_favicon')) {
            if ($setting && $setting->company_favicon && file_exists(public_path('images/logos/' . $setting->company_favicon))) {
                unlink(public_path('images/logos/' . $setting->company_favicon));
            }

            $favicon = $request->file('company_favicon');
            $faviconName = time() . '_favicon.' . $favicon->getClientOriginalExtension();
            $favicon->move(public_path('images/logos'), $faviconName);

            $validatedData['company_favicon'] = $faviconName;
        }

        // Update or create settings
        if ($setting) {
            $setting->update($validatedData);
        } else {
            Setting::create($validatedData);
        }

        return redirect()->route('profile.edit')
            ->with('success', 'Settings updated successfully.');
    }
}
