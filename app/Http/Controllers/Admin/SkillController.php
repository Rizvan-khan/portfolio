<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    public function detail(){
        return view('admin.skills.add-skills');
    }



    public function store(Request $request)
    {
        $request->validate([
            'language' => 'required|string|max:255',
            'percentage'   => 'required|string'
           
        ]);
        $data = $request->all();
        Skill::create($data);
        return redirect()->back()->with('success', 'Skills detail added successfully!');
    }

}
