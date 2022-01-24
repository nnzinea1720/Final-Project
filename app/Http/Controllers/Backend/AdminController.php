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

    public function show(Request $request)
    {
       $search = $request->query('search');
    //    dd(request()->all());
       if($search)
      {

         $users = User::where('id', 'LIKE', '%' .$search. '%')
        //  ->orWhere('division', 'LIKE', '%' .$search. '%')
        //  ->orWhere('district', 'LIKE', '%' .$search. '%')
        //  ->orWhere('office', 'LIKE', '%' .$search. '%')
         ->orWhere('name', 'LIKE', '%' .$search. '%')->get();
        return view('admin.layouts.user-list',compact('users'));
      }
       $users=User::all();
       return view('admin.layouts.user-list',compact('users'));
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
        return redirect()->route('user.list');
    }

    public function list()
    {
       $users=User::all();
        return view('admin.layouts.user-list',compact('users'));
    }

    public function delete($id)
    {
       $users=User::find($id);
      $users->delete();
     return redirect()->back()->with('success-message','User Created Successfully.');
    }

    public function view($id)
    {
        // dd($id);
        $users=User::find($id);
        return view('admin.layouts.view-user',compact('users'));
    }



}
