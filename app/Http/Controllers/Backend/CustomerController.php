<?php

namespace App\Http\Controllers\Backend;
use App\Models\Customer;
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
       $customers= Customer::all();
        return view('admin.layouts.customer-list',compact('customers'));
    }


    public function store(Request $request)
    {
        Customer::create([

                'cust_name'=>$request->cust_name,
                'cust_contact'=>$request->cust_contact,
                'cust_address'=>$request->cust_address,
                'rec_name'=>$request->rec_name,
                'rec_phone'=>$request->rec_phone,
                'rec_address'=>$request->rec_address,
                'branch_name'=>$request->branch_name,
                'type'=>$request->type,
                'price'=>$request->price,
                'date'=>$request->date,
                'time'=>$request->time,


        ]);
        return redirect()->back();
    }


    public function delete($id)
        {
           $customers=Customer::find($id);
          $customers->delete();
         return redirect()->back()->with('success-message','Customer Created Successfully.');
        }

        public function edit($id)
        {
            // dd($id);
           $customers=Customer::find($id);
        //    dd($branchs);
        //   $branchs->edit();
        //  return redirect()->back()->with('success-message','Customer Created Successfully.');
        return view('admin.layouts.edit-customer',compact('customers'));
        }

        public function update(Request $request,$id)
        {
            // dd($request->all());
            // dd($id);
          $customers=Customer::find($id);
         $customers->update([
            'cust_name'=>$request->cust_name,
                'cust_contact'=>$request->cust_contact,
                'cust_address'=>$request->cust_address,
                'rec_name'=>$request->rec_name,
                'rec_phone'=>$request->rec_phone,
                'rec_address'=>$request->rec_address,
                'branch_name'=>$request->branch_name,
                'type'=>$request->type,
                'price'=>$request->price,
                'date'=>$request->date,
                'time'=>$request->time,


        ]);
             return redirect()->back()->with('success-message', 'Update Created Successfully.');
    }

    public function view($id)
        {
            // dd($id);
            $customers=Customer::find($id);
            return view('admin.layouts.view-customer',compact('customers'));
        }


}
