

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
                <form action="{{route('customer.update',$customers->id)}}" method="post">
                    @method('put')
                     @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1"> Customer Name:</label>
                          <input value="{{$customers-> cust_name}}" type="text" class="form-control" id="fname" name="cust_name" placeholder="Enter your Customer Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Customer Contact:</label>
                            <input value="{{$customers-> cust_contact}}" type="number" class="form-control" id="fname" name="cust_contact" placeholder="Enter your Customer Contact">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Customer Address:</label>
                            <input value="{{$customers-> cust_address}}" type="text" class="form-control" id="fname" name="cust_address" placeholder="Enter your Customer Address">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Receipient Name:</label>
                            <input value="{{$customers-> rec_name}}" type="text" class="form-control" id="fname" name="rec_name" placeholder="Enter your Recepient Name">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Recepient Phone:</label>
                            <input value="{{$customers-> rec_phone}}" type="number" class="form-control" id="fname" name="rec_phone" placeholder="Enter your Recepient Phone">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Recepient Address:</label>
                            <input value="{{$customers-> rec_address}}" type="text" class="form-control" id="fname" name="rec_address" placeholder="Enter your Recepient Address">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Branch Name:</label>
                            <input value="{{$customers-> branch_name}}" type="text" class="form-control" id="fname" name="branch_name" placeholder="Enter your Branch Name">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Type:</label>
                            <input value="{{$customers-> type}}" type="text" class="form-control" id="fname" name="type" placeholder="Enter your type">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Price:</label>
                            <input value="{{$customers-> price}}" type="price" class="form-control" id="fname" name="price" placeholder="Enter your price">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Pickup Date:</label>
                            <input value="{{$customers-> date}}" type="date" class="form-control" id="fname" name="date" placeholder="Enter your date">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Pickup Time:</label>
                            <input value="{{$customers-> time}}" type="time" class="form-control" id="fname" name="time" placeholder="Enter your time">
                          </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>


  @endsection

