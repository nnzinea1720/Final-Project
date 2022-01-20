

@extends('admin.master')
@section('content')




<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="card-title">
                    <div class="title">Customer Info</div>
                </div>
            </div>
            <div class="panel-body">
                <form action="{{route('customer.store')}}" method="post">
                     @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1"> Customer Name:</label>
                          <input type="text" class="form-control" id="fname" name="cust_name" placeholder="Enter your Customer Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Customer Contact:</label>
                            <input type="number" class="form-control" id="fname" name="cust_contact" placeholder="Enter your Customer Contact">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Customer Address:</label>
                            <input type="text" class="form-control" id="fname" name="cust_address" placeholder="Enter your Customer Address">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Receipient Name:</label>
                            <input type="text" class="form-control" id="fname" name="rec_name" placeholder="Enter your Recepient Name">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Recepient Phone:</label>
                            <input type="number" class="form-control" id="fname" name="rec_phone" placeholder="Enter your Recepient Phone">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Recepient Address:</label>
                            <input type="text" class="form-control" id="fname" name="rec_address" placeholder="Enter your Recepient Address">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Branch Name:</label>
                            <input type="text" class="form-control" id="fname" name="branch_name" placeholder="Enter your Branch Name">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Type:</label>
                            <input type="text" class="form-control" id="fname" name="type" placeholder="Enter your type">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Price:</label>
                            <input type="price" class="form-control" id="fname" name="price" placeholder="Enter your price">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Pickup Date:</label>
                            <input type="date" class="form-control" id="fname" name="date" placeholder="Enter your date">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Pickup Time:</label>
                            <input type="time" class="form-control" id="fname" name="time" placeholder="Enter your time">
                          </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>


  @endsection

