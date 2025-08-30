<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
   public function detail(){
$about = About::find(1);

        return view('admin.about.update-about',compact('about'));
    }



    public function updateAbout(Request $request)
    {
        $request->validate([
            'about' => 'required',
            'heading'   => 'required|string'
        
           
        ]);
        // $data = $request->all();
         $about = About::find(1);
         if ($about) {
        $about->update([
            'heading' => $request->heading,
            'about'   => $request->about,
        ]);
    }
        return redirect()->back()->with('success', 'About Updated successfully!');
    }

}
