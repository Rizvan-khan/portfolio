<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
   public function detail(){
        return view('admin.service.add-service');
    }


   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'paragraph'   => 'required|string',
           
           
        ]);
        $data = $request->all();
        Service::create($data);
        return redirect()->back()->with('success', 'Service added successfully!');
    }
}
