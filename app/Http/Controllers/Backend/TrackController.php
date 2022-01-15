<?php

namespace App\Http\Controllers\Backend;
use App\Models\Track;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    public function create()
    {
        return view('admin.layouts.track');
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
