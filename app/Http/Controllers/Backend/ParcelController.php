<?php

namespace App\Http\Controllers\Backend;
use App\Models\Parcel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParcelController extends Controller
{
   public function create()
        {
            return view('admin.layouts.parcel');
        }


        public function details()
        {
        //    $details= Parcel::all();
            return view('admin.layouts.parcel-detail');
            // ,compact('details'));
        }


        // public function store(Request $request)
        // {
        //     Parcel::create([

        //             'name'=>$request->name,
        //             'address'=>$request->address,
        //             'reciever'=>$request->reciever,
        //             'radd'=>$request->radd,
        //             'contact'=>$request->contact,



        //     ]);
        //     return redirect()->back();
        // }

}
