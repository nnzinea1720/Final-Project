


@extends('admin.master')

@section('content')

    <h1 style="font-weight: bold; padding-top: 10px;">Parcel Details</h1>

    <!-- <------Search----->
<form  action="{{route('parcel.show')}}">
    <div class="input-group rounded mt-3 mb-2">
      <div class="form-outline">
        <br><input name="search" type="search" id="form1" class="form-control" placeholder="Search" arial-level="search" arial-describedby="search-addon" />
      </div>

      <br>
          <button type="submit" class="btn btn-primary mb-3">search</button>
          <i class="fas fa-search"></i>
        <br>

    </div>
    </form>
    <!-- <------End Search----->


    <table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">Address</th>
        {{-- <th scope="col">Phone</th> --}}
        <th scope="col">Receiver</th>
        <th scope="col">Receiver Address</th>
         <th scope="col">Contact</th>
         <th scope="col">Type</th>
         <th scope="col">Image</th>
         <th scope="col">Status</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>

        @foreach($details as $key=>$list)

    <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$list->name}}</td>
        <td>{{$list->address}}</td>
        {{-- <td>{{$list->phone}}</td> --}}
        <td>{{$list->receiver}}</td>
        <td>{{$list->rec_address}}</td>
        <td>{{$list->contact}}</td>
        <td>{{$list->type}}</td>
        <th>
            <img style="border-radius: 4px;" width="100px;" src=" {{url('/uploads/parcels/'.$list->image)}}" alt="image">

        </th>
        <td>{{$list->status}}</td>
        <td>
            <a class="btn btn-success" href="{{route('parcel.view',$list->id)}}"> View</a>
            <a class="btn btn-info" href="{{route('parcel.edit',$list->id)}}">Approve</a>
            <a class="btn btn-danger" href="{{route('parcel.delete',$list->id)}}"> Delete</a>
        </td>

    </tr>

    @endforeach

    </tbody>
</table>
@endsection
