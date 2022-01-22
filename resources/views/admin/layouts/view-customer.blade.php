
@extends('admin.master')



@section('content')
         <h1>Customer List </h1>


         <P>cust_name: {{$customers-> cust_name}}</P>
         <P>cust_contact: {{$customers-> cust_contact}}</P>
         <P>cust_address: {{$customers-> cust_address}}</P>
         <P>rec_name: {{$customers-> rec_name}}</P>
         <P>rec_phone: {{$customers-> rec_phone}}</P>
         <P>rec_address: {{$customers-> rec_address}}</P>
         <P>branch_name: {{$customers-> branch_name}}</P>
         <P>type: {{$customers-> type}}</P>
         <P>price: {{$customers-> price}}</P>
         <P>date: {{$customers-> date}}</P>
         <P>date: {{$customers-> date}}</P>
         <P>time: {{$customers-> time}}</P>



@endsection
