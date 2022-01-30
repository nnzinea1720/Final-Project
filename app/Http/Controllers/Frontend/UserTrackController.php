<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Bookingparcel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserTrackController extends Controller
{
    public function tracking()
    {
        return view ('frontend.partials.Tracking');
    }

 //    dd($request->all());
    public function show(Request $request)
 {
     $key= request()->no;
    //  dd($key);
     $lists=Bookingparcel::where('track_number','LIKE',"%{$key}%")->get();
    //  dd($trackings);
     return view('frontend.partials.tracking-list',compact('lists'));
 }



}
