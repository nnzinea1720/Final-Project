
@extends('admin.master')



@section('content')
         <h1>Customer List </h1>


         <P>cust_name: {{$customers-> cust_name}}</P>
         <P>cust_contact: {{$customers-> cust_contact}}</P>
         <P>email: {{$customers-> email}}</P>
         <P>cust_address: {{$customers-> cust_address}}</P>
         <P>branch_name: {{$customers-> branch_name}}</P>
         <P>division: {{$customers-> division}}</P>




@endsection
