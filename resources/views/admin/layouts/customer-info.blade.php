

@extends('admin.master')
@section('content')

@if(session()->has('success'))
    <p class="alert alert-success">
        {{session()->get('success')}}
    </p>
@endif
@if(session()->has('error'))
    <p class="alert alert-danger">
        {{session()->get('error')}}
    </p>
@endif


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
                            <input type="number" class="form-control" id="fname" name="contact" placeholder="Enter your Customer Contact">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Email:</label>
                            <input type="email" class="form-control" id="fname" name="email" placeholder="Enter your Email">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Customer Address:</label>
                            <input type="text" class="form-control" id="fname" name="cust_address" placeholder="Enter your Email">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Branch Name:</label>
                            <input type="text" class="form-control" id="fname" name="branch_name" placeholder="Enter your Branch Name">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1"> Division:</label>
                            <input type="text" class="form-control" id="fname" name="division" placeholder="Enter your division">
                          </div>


                        <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>


  @endsection

