<?php

namespace App\Http\Controllers\Backend;
use App\Models\Track;
use App\Models\Bookingparcel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    public function create()
    {
        return view('admin.layouts.track');
    }


    public function show(Request $request)
    {
        $key= request()->no;
       //  dd($key);
        $lists=Bookingparcel::where('track_number','LIKE',"%{$key}%")->get();
       //  dd($trackings);
        return view('admin.layouts.tracking-list',compact('lists'));
    }

    // public function tracks()
    // {
    //     $tracks= Track::all();
    //     return view('admin.layouts.track',compact('tracks'));
    // }


    public function store(Request $request)
    {
        Track::create([
            'no'=>$request->no,
        ]

        );
        return redirect()->back();
    }
}
