<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use Illuminate\Http\Request;
use App\Models\personal_detail;

class PersonalController extends Controller
{
    public function detail(){
        return view('admin.product.add-product');
    }



    public function store(Request $request)
    {
        $request->validate([
            'designation' => 'required|string|max:255',
            'paragraph'   => 'required|string',
            'dob'         => 'required|date',
            'degree'      => 'required|string|max:255',
            'mobile'      => 'required|string|max:15',
            'email'       => 'nullable|email',
            'age'       => 'nullable',
            'city'        => 'nullable|string|max:255',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->all();

        // Image Upload
        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/personal_details'), $fileName);
            $data['image'] = 'uploads/personal_details/' . $fileName;
        }

        personal_detail::create($data);

        return redirect()->back()->with('success', 'Personal detail added successfully!');
    }






}
