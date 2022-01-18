<?php

namespace App\Http\Controllers\Backend;
use App\Models\Branch;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function show(Request $request)
    {
       $search = $request->query('search');
    //    dd(request()->all());
       if($search)
      {

         $branchs = Branch::where('id', 'LIKE', '%' .$search. '%')
         ->orWhere('division', 'LIKE', '%' .$search. '%')
         ->orWhere('district', 'LIKE', '%' .$search. '%')
         ->orWhere('office', 'LIKE', '%' .$search. '%')
         ->orWhere('contact', 'LIKE', '%' .$search. '%')->get();
        return view('admin.layouts.branch-list',compact('branchs'));
      }
       $branchs=Branch::all();
       return view('admin.layouts.branch-list',compact('branchs'));
     }



    public function create()
    {
        return view('admin.layouts.add-branch');
    }


    public function list()
    {
       $branchs= Branch::all();
        return view('admin.layouts.branch-list',compact('branchs'));
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

        // public function view($id)
        // {
        //     // dd($list_id);
        //     $branchs=Branch::find($id);
        //     // dd($lists);
        //     // $branchs->view();
        //     // return redirect()->back()->with('success-message','View Created Successfully.');
        //     return view('admin.layouts.view-branch',Compact('lists'));

        // }

        public function branchview($id)
        {
            // dd($id);
            $branch=Branch::find($id);
            return view('admin.layouts.view-branch',compact('branch'));
        }


}
