<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Information;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function information()
    {
        return view('frontend.partials.information');
    }
    public function store(Request $request)
    {


       //dd($request->all());
        Information::create([

            'name'=>$request->name,
            'address'=>$request->address,
            'receiver'=>$request->receiver,
            'rec_address'=>$request->rec_address,
            'contact'=>$request->contact,
            'delivery_area'=>$request->delivery_area,
            'weight'=>$request->weight,
            'total_cost'=>$request->total_cost,
            'type'=>$request->type,
            'date'=>$request->date,

        ]);
        return redirect()->back();
    }
}
