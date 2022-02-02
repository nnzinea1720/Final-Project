<?php

namespace App\Http\Controllers\Backend;
use App\Models\Notice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function create()
    {
        return view('admin.layouts.Notice');
    }

    public function list()
    {
       $notices= Notice::all();
        return view('frontend.partials.Notice',compact('notices'));
    }

    public function store(Request $request)
    {
        Notice::create([

                'date'=>$request->date,
                'notice_name'=>$request->notice_name,


        ]);
        return redirect()->back();
    }
}
