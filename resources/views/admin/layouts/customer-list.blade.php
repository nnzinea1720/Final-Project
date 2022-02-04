




@extends('admin.master')
@section('content')

{{--Message section in blade file--}}

    @if(session('success'))
        <div class="alert alert-success">
            {!! session('success') !!}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {!! session('error') !!}
        </div>
    @endif

    <h1></h1>
    <br>
    <a href="{{route('customer.create')}}" class="btn btn-danger">Create New Customer</a>
    <a href="{{route('admin')}}" class="btn btn-primary">Back</a>













<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">cust_name</th>
        <th scope="col">cust_contact</th>
        <th scope="col">email</th>
        <th scope="col">cust_address</th>
        <th scope="col">branch_name</th>
        <th scope="col">division</th>
        <th scope="col">Action</th>


    </tr>
    </thead>
    <tbody>
        @foreach ($customers as $key=>$customer)
            <tr>
                <th>{{$key+1}}</th>
                <td>{{$customer->cust_name}}</td>
                <td>{{$customer->contact}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->cust_address}}</td>
                <td>{{$customer->branch_name}}</td>
                <td>{{$customer->division}}</td>
                <td>
                    <a class="btn btn-danger" href="{{route('customer.delete',$customer->id)}}"> Delete</a>
                    <a class="btn btn-info" href="{{route('customer.edit',$customer->id)}}"> Edit</a>
                    <a class="btn btn-warning" href="{{route('customer.view',$customer->id)}}"> View</a>
                </td>

            </tr>
            @endforeach

        </tbody>
    </table>
    @endsection















