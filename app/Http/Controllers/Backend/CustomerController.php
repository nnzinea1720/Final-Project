<?php

namespace App\Http\Controllers\Backend;
use App\Models\Information;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function create()
    {
        return view('admin.layouts.customer-info');
    }


    public function list()
    {
       $customers=Information::all();
        return view('admin.layouts.customer-list',compact('customers'));
    }


    public function store(Request $request)
    {
        Information::create([

                'cust_name'=>$request->cust_name,
                'contact'=>$request->contact,
                'email'=>$request->email,
                'cust_address'=>$request->cust_address,
                'branch_name'=>$request->branch_name,
                'division'=>$request->division,



        ]);
        return redirect()->back()->with('success','Data entry successfully.');
    }


    public function delete($id)
        {
           $customers=Information::find($id);
          $customers->delete();
         return redirect()->back()->with('success-message','Customer Created Successfully.');
        }

        public function edit($id)
        {
            // dd($id);
           $customers=Information::find($id);
        //    dd($branchs);
        //   $branchs->edit();
        //  return redirect()->back()->with('success-message','Customer Created Successfully.');
        return view('admin.layouts.edit-customer',compact('customers'));
        }

        public function update(Request $request,$id)
        {
            // dd($request->all());
            // dd($id);
          $customers=Information::find($id);
         $customers->update([
            'cust_name'=>$request->cust_name,
                'contact'=>$request->contact,
                'email'=>$request->email,
                'cust_address'=>$request->cust_address,
                'branch_name'=>$request->branch_name,
                'division'=>$request->division,



        ]);
             return redirect()->back()->with('success', 'Update Created Successfully.');
    }

    public function view($id)
        {
            // dd($id);
            $customers=Information::find($id);
            return view('admin.layouts.view-customer',compact('customers'));
        }


}
