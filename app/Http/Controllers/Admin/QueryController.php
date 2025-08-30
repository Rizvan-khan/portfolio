<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Query;

class QueryController extends Controller
{
    public function Query(){
        $all = Query::all();
        return view('admin.query.manage-query',compact('all'));
    }

    public function resolve($id)
{
    $pro = Query::findOrFail($id);
    $pro->status = 1; // Resolved
    $pro->save();

    return back()->with('success', 'Status changed to Resolved');
}

public function cancel($id)
{
    $pro = Query::findOrFail($id);
    $pro->status = 0; // Pending again
    $pro->save();

    return back()->with('success', 'Status changed to Pending');
}

}
