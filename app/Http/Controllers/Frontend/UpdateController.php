<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Update;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function update()
    {
        return view('frontend.partials.Update');
    }



    public function store(Request $request)
    {


    //    dd($request->all());
        update::create([
            'email'=>$request->email,
            'phone'=>$request->phone,
        ]);
         return redirect()->back();
    }
}

