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

        $list=Payment::with('booking')->get();
        return view('frontend.partials.Payment',compact('list'));
    }

    public function edit($id)
    {
        // dd($id);
        $bookingparcel = Bookingparcel::find($id);
        if ($bookingparcel) {
        return view('admin.layouts.Payment',compact('bookingparcel'));

        }

    }


    public function store(Request $request,$id)
    {
        // dd($id);
        Payment::create([
            'bookingsparcel_id'=>$id,
                'payment_amount'=>$request->payment_amount,
                'method'=>$request->method,
                'transaction'=>$request->transaction,
                'status'=>$request->status,


        ]);
        return redirect()->back();
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
    public function show(Request $request)
    {
        $key= request()->no;
       //  dd($key);
        $lists=Bookingparcel::where('track_number','LIKE',"%{$key}%")->get();
       //  dd($trackings);
        return view('admin.layouts.tracking-list',compact('lists'));
    }

}
