<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\personal_detail;
use App\Models\Counter;
use App\Models\About;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Query;
use App\Models\Testimonial;

class WebController extends Controller
{
    public function allData(){
        $data= Skill::take(8)->get();
        $data5rows = Skill::skip(8)->take(10)->get();
        $personal = personal_detail::all();
        $counter = Counter::all();
        $about = About::find(1);
        $setting = Setting::find(1);
        $service = Service::all();
        $testimonial = Testimonial::all();
        
        return view('welcome', compact('data','data5rows','personal','counter','about','service','setting','testimonial'));
    }



public function Query(Request $request){

     $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

 // ✅ Store data
        Query::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'status'  => 0, // default unread
        ]);

        // ✅ Redirect with success
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }


    public function testimonial(Request $request){

     $request->validate([
            'name'    => 'required|string|max:255',
            'profile'   => 'required|max:255',
            'review' => 'required|string|max:255',
            
        ]);

 // ✅ Store data
        Testimonial::create([
            'name'    => $request->name,
            'profile'   => $request->profile,
            'review' => $request->review,
           
        ]);

        // ✅ Redirect with success
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }


}
