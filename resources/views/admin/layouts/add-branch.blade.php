

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
                        <label for="exampleInputPassword1">Branch Name</label>
                        <input type="text" class="form-control" id="fname" name="office" placeholder="Enter your Branch Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Branch Id</label>
                        <input type="number" class="form-control" id="fname" name="number" placeholder="Enter your Number">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Branch Address</label>
                        <input type="text" class="form-control" id="fname" name="address" placeholder="Enter your Address">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contact</label>
                        <input type="text" class="form-control" id="fname" name="contact" placeholder="Enter your Contact">
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>


  @endsection
