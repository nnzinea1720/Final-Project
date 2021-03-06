<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Bookingparcel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function show(Request $request)
    {
       $search = $request->query('search');
    //    dd(request()->all());
       if($search)
      {

         $details = bookingparcel::where('id', 'LIKE', '%' .$search. '%')
         ->orWhere('name', 'LIKE', '%' .$search. '%')
         ->orWhere('address', 'LIKE', '%' .$search. '%')
         ->orWhere('receiver', 'LIKE', '%' .$search. '%')
         ->orWhere('rec_address', 'LIKE', '%' .$search. '%')->get();
        return view('admin.layouts.parcel-detail',compact('details'));
      }
       $details=bookingparcel::all();
       return view('admin.layouts.booking-parcel',compact('lists'));
     }



    public function booking()
    {
        return view('frontend.partials.Booking-parcel');
    }
    public function store(Request $request)
    {



//    dd($request->all());

    $image=null;
            //              step 1: check image exist in this request.
                             if($request->hasFile('image/png'))
                             {
                                 // step 2: generate file name
                                 $image=date('Ymdhis') .'.'. $request->file('image/png')->getClientOriginalExtension();
            // dd($image_name);
                                 //step 3 : store into project directory

                                 $request->file('image/png')->storeAs('/uploads/Bookings',$image);

                             }


        bookingparcel::create([

            'name'=>$request->name,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'weight'=>$request->weight,
            'type'=>$request->type,
            'image'=>$image,
            'from'=>$request->from,
            'receiver'=>$request->receiver,
            'rec_address'=>$request->rec_address,
            'contact'=>$request->contact,
            'delivery_area'=>$request->delivery_area,
            'to'=>$request->to,
            'total_cost'=>$request->total_cost,
            'date'=>$request->date,
            'track_number'=>date('Ymdhmis'),
            'user_id'=>auth()->user()->id,

        ]);
         return redirect()->back();
    }

    public function view()
    {
        $lists=Bookingparcel::with('user')->get();
        //dd($lists);
        return view('admin.layouts.booking-parcel',compact('lists'));
    }

    public function edit($id)
    {
        // dd($id);
        $list=Bookingparcel::find($id);
        return view('admin.layouts.bookingapprove',compact('list'));
    }


    public function update(Request $request,$id)
    {
        // dd($request->all());
        // dd($id);
      $lists=Bookingparcel::find($id);
     $lists->update([
        'status'=>$request->status,


        ]);
          return redirect()->route('booking.parcel.list')->with('success-message', 'Update Created Successfully.');
    }

     public function viewbooking($id)
    {
        // dd($id);
        $list=bookingparcel::find($id);
        return view('admin.layouts.view-booking',compact('list'));
    }






}
