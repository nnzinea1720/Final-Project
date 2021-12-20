

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

<a href="" class="btn btn-success">Create new staff list</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">id</th>
        <th scope="col">branch</th>
        <th scope="col">address</th>
        <th scope="col">contact</th>
        <th scope="col">email</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($lists as $key=>$staff)
            <tr>
                <th>{{$key+1}}</th>
                <td>{{$staff->name}}</td>
                <td>{{$staff->id}}</td>
                <td>{{$staff->branch}}</td>
                <td>{{$staff->address}}</td>
                <td>{{$staff->contact}}</td>
                <td>{{$staff->email}}</td>
            </tr>
        @endforeach

    </tbody>
</table>
@endsection
