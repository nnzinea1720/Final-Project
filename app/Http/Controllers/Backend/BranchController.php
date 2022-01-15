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


       public function delete($id)
        {
           $branchs=Branch::find($id);
          $branchs->delete();
         return redirect()->back()->with('success-message','Branch Created Successfully.');
        }

        public function edit($id)
        {
            // dd($id);
           $branchs=Branch::find($id);
        //    dd($branchs);
        //   $branchs->edit();
        //  return redirect()->back()->with('success-message','Branch Created Successfully.');
        return view('admin.layouts.edit-branch',compact('branchs'));
        }

        public function update(Request $request,$id)
        {
            // dd($request->all());
            // dd($id);
          $branchs=Branch::find($id);
         $branchs->update([
            'division'=>$request->division,
                'district'=>$request->district,
                'office'=>$request->office,
                'address'=>$request->address,
                'contact'=>$request->contact,
                'type'=>$request->type,


        ]);
             return redirect()->back()->with('success-message', 'Update Created Successfully.');
    }




}
