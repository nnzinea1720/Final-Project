
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
<a href="{{route('branch.create')}}" class="btn btn-success">Create new branch list</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">division</th>
        <th scope="col">district</th>
        <th scope="col">office</th>
        <th scope="col">address</th>
        <th scope="col">contact</th>
        <th scope="col">type</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($lists as $key=>$branch)
            <tr>
                <th>{{$key+1}}</th>
                <td>{{$branch->division}}</td>
                <td>{{$branch->district}}</td>
                <td>{{$branch->office}}</td>
                <td>{{$branch->address}}</td>
                <td>{{$branch->contact}}</td>
                <td>{{$branch->type}}</td>
            </tr>
        @endforeach

    </tbody>
</table>
@endsection
