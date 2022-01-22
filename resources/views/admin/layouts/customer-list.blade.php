




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














<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">cust_name</th>
        {{-- <th scope="col">cust_contact</th> --}}
        <th scope="col">cust_address</th>
        <th scope="col">rec_name</th>
        {{-- <th scope="col">rec_phone</th> --}}
        <th scope="col">rec_address</th>
        {{-- <th scope="col">branch_name</th> --}}
        <th scope="col">type</th>
        <th scope="col">price</th>
        {{-- <th scope="col">date</th>
        <th scope="col">time</th> --}}
        <th scope="col">Action</th>


    </tr>
    </thead>
    <tbody>
        @foreach ($customers as $key=>$customer)
            <tr>
                <th>{{$key}}</th>
                <td>{{$customer->cust_name}}</td>
                {{-- <td>{{$customer->cust_contact}}</td> --}}
                <td>{{$customer->cust_address}}</td>
                <td>{{$customer->rec_name}}</td>
                {{-- <td>{{$customer->rec_phone}}</td> --}}
                <td>{{$customer->rec_address}}</td>
                {{-- <td>{{$customer->branch_name}}</td> --}}
                <td>{{$customer->type}}</td>
                <td>{{$customer->price}}</td>
                {{-- <td>{{$customer->date}}</td> --}}
                {{-- <td>{{$customer->time}}</td> --}}
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















