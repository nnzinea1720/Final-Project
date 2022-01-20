

@extends('admin.master')
@section('content')


<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="card-title">
                    <div class="title">ADD BRANCH</div>
                </div>
            </div>
            <div class="panel-body">
                <form action="{{route('branch.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Division</label>
                        <input type="text" class="form-control" id="fname" name="division" placeholder="Enter your Division">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">District</label>
                        <input type="text" class="form-control" id="fname" name="district" placeholder="Enter your District">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Office Name</label>
                        <input type="text" class="form-control" id="fname" name="office" placeholder="Enter your Office Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Address</label>
                        <input type="text" class="form-control" id="fname" name="address" placeholder="Enter your Address">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contact</label>
                        <input type="text" class="form-control" id="fname" name="contact" placeholder="Enter your Contact">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Office Type</label>
                        <input type="text" class="form-control" id="fname" name="type"placeholder="Enter your Office Type">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>


  @endsection
