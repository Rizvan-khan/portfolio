<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\personal_detail;
use App\Models\Counter;

class WebController extends Controller
{
    public function allData(){
        $data= Skill::take(4)->get();
        $data5rows = Skill::skip(4)->take(4)->get();
        $personal = personal_detail::all();
        $counter = Counter::all();
        return view('welcome', compact('data','data5rows','personal','counter'));
    }
}
