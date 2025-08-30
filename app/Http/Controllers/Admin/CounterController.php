<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Counter;

class CounterController extends Controller
{
    public function detail(){
        return view('admin.counter.add-counter');
    }


   
    public function store(Request $request)
    {
        $request->validate([
            'project' => 'required|string|max:255',
            'client'   => 'required|string',
            'support'  => 'required|string',
           
        ]);
        $data = $request->all();
        Counter::create($data);
        return redirect()->back()->with('success', 'Counter detail added successfully!');
    }

}
