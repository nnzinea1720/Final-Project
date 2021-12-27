<?php

namespace App\Http\Controllers\Backend;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view ('admin.layouts.login');
    }

    public function doLogin(Request $request)

    {

        $userInfo=$request->except('_token');
        //        $credentials['email']=$request->user_email;
//        $credentials['password']=$request->user_password;
//        dd($credentials);
//        $credentials=$request->only('user_email','user_password');


        if(Auth::attempt($userInfo)){
            return redirect()->route('admin')->with('message','Login successful.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login')->with('message','Logging out.');
    }

}
