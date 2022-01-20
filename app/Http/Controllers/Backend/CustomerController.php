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

}
