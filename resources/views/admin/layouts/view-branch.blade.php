
@extends('admin.master')



@section('content')
         <h1>Branch List </h1>


         <P>division: {{$branch->division}}</P>
         <p>district: {{$branch->district}}</p>
         <p>office: {{$branch->office}}</p>
         <p>address: {{$branch->address}}</p>
         <p>contact: {{$branch->contact}}</p>
         <p>type: {{$branch->type}}</p>



@endsection
