



@extends('admin.master')
@section('content')


<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="card-title">
                    <div class="title">Parcel</div>
                </div>
            </div>
            <div class="panel-body">
                <form action="" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="fname" name="name" placeholder="Enter your Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Address</label>
                        <input type="text" class="form-control" id="fname" name="address" placeholder="Enter your Address">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Phone </label>
                        <input type="phone" class="form-control" id="fname" name="phone" placeholder="Enter your phone">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Reciever</label>
                        <input type="text" class="form-control" id="fname" name="receiver" placeholder="Enter your Reciever">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Rec Add</label>
                        <input type="text" class="form-control" id="fname" name="rec_address" placeholder="Enter your Rec Add">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contact</label>
                        <input type="text" class="form-control" id="fname" name="contact" placeholder="Enter your Contact">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Delivery Area</label>
                        <select class="form-control" name="delivery_area" id="fname">
                            <option>select option</option>
                            <option>Inside Dhaka</option>
                            <option>Outside Dhaka</option>
                    </select>
                        {{-- <input type="text" class="form-control" id="fname" name="delivery_area" placeholder="Enter your Delivery Area"> --}}

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Weight</label>
                        <input type="text" class="form-control" id="fname" name="weight" placeholder="Enter your Weight">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Total Cost</label>
                        <input type="text" class="form-control" id="fname" name="total_cost" placeholder="Enter your Contact">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Type</label>
                        <select class="form-control" name="role" id="exampleFormControlSelect1">
                            <option>select option</option>
                            <option>Book </option>
                            <option>Dress </option>
                            <option>Ornaments </option>
                            <option>others </option>
                    </select>
                        {{-- <input type="text" class="form-control" id="fname" name="type" placeholder="Enter your Type"> --}}
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Image</label>
                        <input name="image/png" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Booking Date</label>
                        <input type="date" class="form-control" id="fname" name="date" placeholder="Enter your Date">
                    </div>


                    <button type="submit" class="btn btn-success">Book Now</button>

                </form>
            </div>
        </div>
    </div>
</div>


  @endsection
