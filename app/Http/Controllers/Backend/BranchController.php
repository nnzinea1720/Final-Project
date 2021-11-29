<?php

namespace App\Http\Controllers\Backend;
use App\Models\Branch;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BranchController extends Controller
{


    public function create()
    {
        return view('admin.layouts.add-branch');
    }


    public function list()
    {
       $lists= Branch::all();
        return view('admin.layouts.branch-list',compact('lists'));
    }


    public function store(Request $request)
    {
        Branch::create([

                'division'=>$request->division,
                'district'=>$request->district,
                'office'=>$request->office,
                'address'=>$request->address,
                'contact'=>$request->contact,
                'type'=>$request->type,


        ]);
        return redirect()->back();
    }


}
