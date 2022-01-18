<?php

namespace App\Http\Controllers\Backend;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminForm()
    {
        return view('admin.layouts.admin');
    }

    public function store(Request $request)
    {
        User::create([

                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>bcrypt($request->password),
                'mobile'=>$request->mobile,
                'role'=>$request->role,



        ]);
        return redirect()->back();
    }


}
