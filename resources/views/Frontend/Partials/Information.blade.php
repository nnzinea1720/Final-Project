

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


{{-- @section('content')
<div class="content"> --}}


 <div class="row">
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="card-title">
                    <div style="font-weight: bold; padding-top: 10px;" class="title"> Customer Information</div>
                </div>
            </div>
            <div class="panel-body">
                <form action="{{route('user.customer.store')}}" method="post">
                 @csrf

                 <div class="row">
                     <div class="col">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Customer Name</label>
                            <input type="text" class="form-control" id="fname" name="cust_name" placeholder="Enter your Customer Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Contact</label>
                            <input type="number" class="form-control" id="fname" name="contact" placeholder="Enter your Contact">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Customer Address</label>
                            <input type="text" class="form-control" id="fname" name="cust_address" placeholder="Enter your Customer Address">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Branch Name</label>
                            <input type="text" class="form-control" id="fname" name="branch_name" placeholder="Enter your Branch Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Type</label>
                            <input type="text" class="form-control" id="fname" name="type" placeholder="Enter your Type">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Price</label>
                            <input type="text" class="form-control" id="fname" name="price" placeholder="Enter your Price">
                        </div>

                     </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Recepient Name</label>
                                <input type="text" class="form-control" id="fname" name="rec_name" placeholder="Enter your Recepient Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Phone</label>
                                <input type="number" class="form-control" id="fname" name="phone" placeholder="Enter your Contact">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Recepient Address</label>
                                <input type="text" class="form-control" id="fname" name="rec_address" placeholder="Enter your Recepient Address">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Pickup Date</label>
                                <input type="date" class="form-control" id="fname" name="date" placeholder="Enter your Pickup Date">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Time</label>
                                <input type="time" class="form-control" id="fname" name="time" placeholder="Enter your Time">
                            </div>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-outline-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>
 </div>
</div>
{{-- @endsection --}}



<body style="margin-left:100px; margin-right:100px;">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

