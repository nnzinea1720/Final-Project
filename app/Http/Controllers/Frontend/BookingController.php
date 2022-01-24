<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Bookingparcel;
use App\Models\Parcel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function booking()
    {
        return view('frontend.partials.Booking-parcel');
    }
    public function store(Request $request)
    {


    //    dd($request->all());
        Bookingparcel::create([

            'name'=>$request->name,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'weight'=>$request->weight,
            'type'=>$request->type,
            'date'=>$request->date,
            'receiver'=>$request->receiver,
            'rec_address'=>$request->rec_address,
            'contact'=>$request->contact,
            'delivery_area'=>$request->delivery_area,
            'total_cost'=>$request->total_cost,

        ]);
         return redirect()->back();
    }
}
