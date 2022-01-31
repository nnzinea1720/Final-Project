


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
<a href="{{route('user.booking.parcel')}}" class="btn btn-success">Create new Booking</a>


    {{-- <h1 style="font-weight: bold; padding-top: 10px;">Parcel Booking</h1> --}}

    <!-- <------Search----->
<form  action="{{route('booking.parcel.show')}}">
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

        <div id="divToPrint">
    <table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        {{-- <th scope="col">Address</th> --}}
        {{-- <th scope="col">Phone</th> --}}
        {{-- <th scope="col">Weight</th> --}}
        <th scope="col">Type</th>
        <th scope="col">Tracking Number</th>
        <th scope="col">Image</th>
        <th scope="col">Receiver</th>
        {{-- <th scope="col">Receiver Address</th> --}}
         {{-- <th scope="col">Contact</th> --}}
         <th scope="col">Delivery Area</th>
         <th scope="col">Total Cost</th>
         {{-- <th scope="col">Booking Date</th> --}}
         <th scope="col">Status</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>

        @foreach($lists as $key=>$list)

    <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$list->name}}</td>
        {{-- <td>{{$list->address}}</td> --}}
        {{-- <td>{{$list->phone}}</td> --}}
        {{-- <td>{{$list->weight}}</td> --}}
        <td>{{$list->type}}</td>
        <td>{{$list->track_number}}</td>
        <td> <img style="border-radius: 4px;" width="100px;" src=" {{url('/uploads/bookings/'.$list->image)}}" alt="image"></td>
        <td>{{$list->receiver}}</td>
        {{-- <td>{{$list->rec_address}}</td> --}}
        {{-- <td>{{$list->contact}}</td> --}}
        <td>{{$list->delivery_area}}</td>
        <td>{{$list->total_cost}}</td>
        {{-- <td>{{$list->date}}</td> --}}
        <td>{{$list->status}}</td>
        <td>
            <a class="btn btn-info" href="{{route('payment.status.create',$list->id)}}">Add Payment</a><br>
            <a class="btn btn-warning" href="{{route('booking.parcel.approve',$list->id)}}">Approve</a><br>
            <a class="btn btn-primary" href="{{route('booking.parcel.view',$list->id)}}">View</a><br>


        </td>

    </tr>

    @endforeach

    </tbody>
</table>
</div>
<br>
   <input class="btn btn-danger" type="button" onClick="PrintDiv('divToPrint');" value="Print">

@endsection


<script language="javascript">
    function PrintDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
