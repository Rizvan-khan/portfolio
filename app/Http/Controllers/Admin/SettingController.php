<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
  
    public function update(Request $request)
    {
        $request->validate([
            'title'     => 'nullable|string|max:255',
            'logo'      => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'mobile'    => 'nullable|string|max:20',
            'email'     => 'nullable|email|max:255',
            'address'   => 'nullable|string',
            'facebook'  => 'nullable|url',
            'twitter'   => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin'  => 'nullable|url',
            'map'       => 'nullable|string',
        ]);

       
        $setting = Setting::firstOrCreate(['id' => 1]);

        // Logo upload check
        if ($request->hasFile('logo')) {
            $logoName = time() . '.' . $request->logo->extension();
            $request->logo->move(public_path('uploads/logo'), $logoName);
            $setting->logo = $logoName;
        }

 
        $setting->title     = $request->title;
        $setting->mobile    = $request->mobile;
        $setting->email     = $request->email;
        $setting->address   = $request->address;
        $setting->facebook  = $request->facebook;
        $setting->twitter   = $request->twitter;
        $setting->instagram = $request->instagram;
        $setting->linkedin  = $request->linkedin;
        $setting->map       = $request->map;

        $setting->save();

        return redirect()->back()->with('success', 'Website settings updated successfully!');
    }
}
