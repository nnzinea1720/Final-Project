<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view ('frontend.partials.contact');
    }

    public function list()
    {
       $lists= Contact::all();
        return view('admin.layouts.contact',compact('lists'));
    }


    public function contact(Request $request)
    {


    //    dd($request->all());
        Contact::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'message'=>$request->message,
        ]);
         return redirect()->back();
    }

    public function delete($id)
    {
       $lists=Contact::find($id);
      $lists->delete();
     return redirect()->back()->with('message','Branch Created Successfully.');
    }

}
