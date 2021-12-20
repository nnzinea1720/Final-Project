<?php

namespace App\Http\Controllers\Backend;
use App\Models\Branch;
use App\Models\Staff;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffController extends Controller
{


    public function create()
    {
        return view('admin.layouts.add-staff');
    }


    public function store(Request $request)
    {


       //dd($request->all());
        Staff::create([

                'name'=>$request->name,
                'num'=>$request->num,
                'branch'=>$request->branch,
                'address'=>$request->address,
                'contact'=>$request->contact,
                'email'=>$request->email,


        ]);
        return redirect()->back();
    }

    public function list()
    {
       $lists=Staff::all();
        return view('admin.layouts.staff-list',compact('lists'));
    }




}
