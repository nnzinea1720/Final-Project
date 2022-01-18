<?php

namespace App\Http\Controllers\Backend;
use App\Models\Parcel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParcelController extends Controller
{
    public function show(Request $request)
    {
       $search = $request->query('search');
    //    dd(request()->all());
       if($search)
      {

         $details = Parcel::where('id', 'LIKE', '%' .$search. '%')
         ->orWhere('name', 'LIKE', '%' .$search. '%')
         ->orWhere('address', 'LIKE', '%' .$search. '%')
         ->orWhere('receiver', 'LIKE', '%' .$search. '%')
         ->orWhere('rec_address', 'LIKE', '%' .$search. '%')->get();
        return view('admin.layouts.parcel-detail',compact('details'));
      }
       $details=Parcel::all();
       return view('admin.layouts.parcel-detail',compact('details'));
     }
   public function create()
        {
            return view('admin.layouts.parcel');
        }


        public function details()
        {
           $details= Parcel::all();
            return view('admin.layouts.parcel-detail',compact('details'));
        }


        public function store(Request $request)
        {
            Parcel::create([

                    'name'=>$request->name,
                    'address'=>$request->address,
                    'receiver'=>$request->receiver,
                    'rec_address'=>$request->rec_address,
                    'contact'=>$request->contact,
                    'type'=>$request->type,





            ]);
            return redirect()->back();
        }

        public function view($id)
        {
            // dd($id);
            $parcel=Parcel::find($id);
            return view('admin.layouts.view-pdetails',compact('parcel'));
        }

        public function edit($id)
        {
            // dd($id);
           $parcels=Parcel::find($id);
        //    dd($branchs);
        //   $branchs->edit();
        //  return redirect()->back()->with('success-message','Branch Created Successfully.');
        return view('admin.layouts.edit-pdetail',compact('parcels'));
        }

        public function update(Request $request,$id)
        {
            // dd($request->all());
            // dd($id);
          $parcels=Parcel::find($id);
         $parcels->update([
            'name'=>$request->name,
                'address'=>$request->address,
                'receiver'=>$request->receiver,
                'rec_address'=>$request->rec_address,
                'contact'=>$request->contact,
                'type'=>$request->type,


            ]);
             return redirect()->back()->with('success-message', 'Update Created Successfully.');
        }

        public function delete($id)
        {
           $parcels=Parcel::find($id);
          $parcels->delete();
         return redirect()->back()->with('success-message','Branch Created Successfully.');
        }






}
