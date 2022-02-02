<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Bookingparcel;
use App\Models\Payment;

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


 public function info()
 {
     if(auth()->user()){
     $name = auth()->user()->name;
    $info=Bookingparcel::where('name',$name)->get();
     return view ('frontend.partials.Track-info',compact('info'));
     }
     else {
         return redirect()->back();
     }
 }

 public function history($id)
 {
    //   dd($id);
    $paymentHistory= Payment::where('id',$id)->first();
     return view ('frontend.partials.Payment',compact('paymentHistory'));
 }


}
