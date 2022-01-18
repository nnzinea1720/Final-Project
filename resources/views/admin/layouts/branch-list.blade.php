
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

<!-- <------Search----->
<form  action="{{route('branch.show')}}">
    <div class="input-group rounded mt-3 mb-2">
      <div class="form-outline">
        <br><input name="search" type="search" id="form1" class="form-control" placeholder="Search" arial-level="search" arial-describedby="search-addon" />
      </div>

      <br>
          <button type="submit" class="btn btn-primary mb-3">search</button>
          <i class="fas fa-search"></i>

    </div>
    </form>
    <!-- <------End Search----->

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
        <th scope="col">Action</th>


    </tr>
    </thead>
    <tbody>
        @foreach ($branchs as $key=>$branch)
            <tr>
                <th>{{$key}}</th>
                <td>{{$branch->division}}</td>
                <td>{{$branch->district}}</td>
                <td>{{$branch->office}}</td>
                <td>{{$branch->address}}</td>
                <td>{{$branch->contact}}</td>
                <td>{{$branch->type}}</td>
                <td>
                    {{-- <a class="btn btn-primary" href="{{route('backend.category.views',$category->id)}}">View</a> --}}
                    <a class="btn btn-success" href="{{route('branch.view',$branch->id)}}"> View</a>
                    <a class="btn btn-danger" href="{{route('branch.delete',$branch->id)}}"> Delete</a>
                    <a class="btn btn-info" href="{{route('branch.edit',$branch->id)}}"> Edit</a>
                    {{-- <a class="btn btn-primary" href="{{route('branch.update',$branch->id)}}">Update</a> --}}


                </td>
            </tr>
        @endforeach

    </tbody>
</table>
@endsection
