
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
<a href="#" class="btn btn-success">Contact Details</a>

<!-- <------Search----->
{{-- <form  action="{{route('branch.show')}}">
    <div class="input-group rounded mt-3 mb-2">
      <div class="form-outline">
        <br><input name="search" type="search" id="form1" class="form-control" placeholder="Search" arial-level="search" arial-describedby="search-addon" />
      </div>

      <br>
          <button type="submit" class="btn btn-primary mb-3">search</button>
          <i class="fas fa-search"></i>

    </div>
    </form> --}}
    <!-- <------End Search----->

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">phone</th>
        <th scope="col">message</th>

    </tr>
    </thead>
    <tbody>
        @foreach ($lists as $key=>$list)
            <tr>
                <th>{{$key}}</th>
                <td>{{$list->name}}</td>
                <td>{{$list->email}}</td>
                <td>{{$list->phone}}</td>
                <td>{{$list->message}}</td>
                <td>
                    <a class="btn btn-danger" href="{{route('contact.delete',$list->id)}}"> Delete</a>
                </td>

            </tr>
        @endforeach

    </tbody>
</table>
@endsection
