<?php

namespace App\Http\Controllers\Frontend;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function update()
    {
        return view('frontend.partials.Update');
    }



    public function store(Request $request,$id)
    {


    //    dd($request->all());
    $user=User::find($id);
    $user->update([
        'name'=>$request->name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'password'=>bcrypt($request->password),
        ]);
         return redirect()->back();
    }
}

