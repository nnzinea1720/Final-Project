
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



<body>







    <div style="width: 35%; margin: auto; margin-top: 60px;">
        @foreach($lists as $key=>$track)


        <p><h3 style="color:DodgerBlue">Tracking Number:{{$track->track_number}}</span></h3><h2><span style="color:#2874A6"></span><h2></p>
            <p class="" style="font-size: 20px;" ><b>Name:</b> {{$track->name}}</p>
            <p class="" style="font-size: 20px;" ><b>Address:</b> {{$track->address}}</p>
            <p class="" style="font-size: 20px;" ><b>Phone:</b> {{$track->phone}}</p>
            <p class="" style="font-size: 20px;" ><b>Weight:</b> {{$track->weight}}</p>
            <p class="" style="font-size: 20px;" ><b>Type :</b> {{$track->type}}</p>
            <div>
                <p>
                    <img style="border-radius: 4px;" width="400px;" height="400px;" src="{{url('uploads/bookings/'.$track->image)}}">
                </p>
            </div>
            <p class="" style="font-size: 20px;" ><b>Date:</b> {{$track->date}}</p>
            <p class="" style="font-size: 20px;" ><b>Recepient Name:</b> {{$track->receiver}}</p>
            <p class="" style="font-size: 20px;" ><b>Recepient Address:</b> {{$track->rec_address}}</p>
            <p class="" style="font-size: 20px;" ><b>Recepient Contact:</b> {{$track->contact}}</p>
            <p class=""style="font-size: 20px;" ><b>Delivery Area:</b> {{$track->delivery_area}}</p>
            {{-- <p class="card-text" ><b>From Branch Name:</b> {{$track->frombranch->name}}</p>
            <p class="card-text" ><b>To Branch Name:</b> {{$track->tobranch->name}}</p> --}}
            <p class="" style="font-size: 20px;" ><b>Total Cost:</b> {{$track->total_cost}}</p>
            <p class="" style="font-size: 20px;" ><b>Delivery Status:</b> {{$track->status}}</p>
            @endforeach

        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>















