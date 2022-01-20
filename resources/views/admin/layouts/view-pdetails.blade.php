
@extends('admin.master')



@section('content')
         <h1>Parcel Details </h1>


         <P>name: {{$parcel->name}}</P>
         <P>address: {{$parcel->address}}</P>
         <P>receiver: {{$parcel->receiver}}</P>
         <P>rec_add: {{$parcel->rec_add}}</P>
         <P>contact: {{$parcel->contact}}</P>
         <P>delivery_area: {{$parcel->delivery_area}}</P>
         <P>weight: {{$parcel->weight}}</P>
         <P>total_cost: {{$parcel->total_cost}}</P>
         <P>type: {{$parcel->type}}</P>
         <P>date: {{$parcel->date}}</P>



@endsection

