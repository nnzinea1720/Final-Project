<?php

namespace App\Http\Controllers\Backend;
use App\Models\Payment;
use App\Models\Bookingparcel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    // public function create()
    // {
    //     return view('admin.layouts.Payment');
    // }

    public function payment()
    {
        $lists=Bookingparcel::all();
        $list=Payment::all();
        return view('frontend.partials.Payment',compact('lists','list'));
    }

    public function edit()
    {
        // dd($id);

        return view('admin.layouts.Payment');
    }


    public function store(Request $request)
    {
        Payment::create([

                'payment_amount'=>$request->payment_amount,
                'method'=>$request->method,
                'transaction'=>$request->transaction,
                'status'=>$request->status,


        ]);
        // return redirect()->back();
    }




    // public function update(Request $request,$id)
    // {
    //     // dd($request->all());
    //     // dd($id);
    //   $lists=Bookingparcel::find($id);
    //  $lists->update([
    //     'payment_amount'=>$request->payment_amount,
    //     'method'=>$request->method,
    //     'transaction'=>$request->transaction,


    //     ]);
    //     //   return redirect()->route('booking.parcel.list')->with('success-message', 'Update Created Successfully.');
    // }


}
