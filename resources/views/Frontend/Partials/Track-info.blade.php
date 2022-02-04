<!DOCTYPE html>
<html lang="en">
<h1>
    <meta charset="utf-8">


    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- <img src="https://blewbury.co.uk/wp-content/uploads/2017/09/parcels.jpg" class="img-fluid" alt="background image"/> --}}
    </h1>




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
<a href="" class="btn btn-success"> Booking Parcel List</a>
<a href="{{route('user')}}" class="btn btn-outline-danger solid blank">Back To Home</a>
<br><br>

    {{-- <h1 style="font-weight: bold; padding-top: 10px;">Parcel Booking</h1> --}}

        <div id="divToPrint">
    <table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">Address</th>
        <th scope="col">Phone</th>
     <th scope="col">Weight</th>
        <th scope="col">Type</th>
        <th scope="col">Tracking Number</th>
        <th scope="col">Image</th>
        <th scope="col">From Branch</th>
        <th scope="col">Receiver</th>
         <th scope="col">Receiver Address</th>
         <th scope="col">Contact</th>
         <th scope="col">Delivery Area</th>
         <th scope="col">To Branch</th>
         <th scope="col">Total Cost</th>
          <th scope="col">Booking Date</th>
         <th scope="col">Status</th>

    </tr>
    </thead>
    <tbody>

        @foreach($info as $key=>$list)

    <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$list->name}}</td>
        <td>{{$list->address}}</td>
        <td>{{$list->phone}}</td>
        <td>{{$list->weight}}</td>
        <td>{{$list->type}}</td>
        <td>{{$list->track_number}}</td>
        <td> <img style="border-radius: 4px;" width="100px;" src=" {{url('/uploads/bookings/'.$list->image)}}" alt="image"></td>
        <td>{{$list->from}}</td>
        <td>{{$list->receiver}}</td>
        <td>{{$list->rec_address}}</td>
        <td>{{$list->contact}}</td>
        <td>{{$list->delivery_area}}</td>
        <td>{{$list->to}}</td>
        <td>{{$list->total_cost}}</td>
        <td>{{$list->date}}</td>
        <td>{{$list->status}}</td>
        <td><a href="{{route('user.tracking.history',$list->id)}}" class="btn btn-info">view</a></td>

    </tr>

    @endforeach

    </tbody>
</table>
</div>
<body style=" margin-right:100px;">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    </body>
