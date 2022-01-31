
@extends('admin.master')
@section('content')


<table class="table">

    <tbody>
        @foreach($lists as $key=>$track)

        <p><h3 style="color:rgb(255, 101, 30)">Tracking Number:{{$track->track_number}}</span></h3><h2><span style="color:#2874A6"></span><h2></p>
            <p class="card-text" ><b>Weight:</b> {{$track->weight}}</p>
            <p class="card-text" ><b>Type :</b> {{$track->type}}</p>
            <div>
                <p>
                    <img style="border-radius: 4px;" width="200px;" src=" {{url('uploads/bookings/'.$track->image)}}">
                </p>
            </div>
            <p class="card-text" ><b>Date:</b> {{$track->date}}</p>
            <p class="card-text" ><b>Recepient Name:</b> {{$track->name}}</p>
            <p class="card-text" ><b>Recepient Address:</b> {{$track->rec_address}}</p>
            <p class="card-text" ><b>Recepient Contact:</b> {{$track->contact}}</p>
            <p class="card-text" ><b>Delivery Area:</b> {{$track->delivery_area}}</p>
            {{-- <p class="card-text" ><b>From Branch Name:</b> {{$track->frombranch->name}}</p>
            <p class="card-text" ><b>To Branch Name:</b> {{$track->tobranch->name}}</p> --}}
            <p class="card-text" ><b>Total Cost:</b> {{$track->total_cost}}</p>
            <p class="card-text" ><b>Delivery Status:</b> {{$track->status}}</p>
            @endforeach

        </tbody>
    </table>

    @endsection
