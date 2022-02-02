<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Information;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function information()
    {
        return view ('frontend.partials.information');
    }
    public function store(Request $request)
    {


       //dd($request->all());
        Information::create([

            'cust_name'=>$request->cust_name,
            'contact'=>$request->contact,
            'email'=>$request->email,
            'cust_address'=>$request->cust_address,
            'branch_name'=>$request->branch_name,
            'division'=>$request->division,


        ]);
        return redirect()->back();
    }
}
