

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
                <form action="{{route('branch.update',$branchs->id)}}" method="post">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Division</label>
                        <input value="{{$branchs->division}}" type="text" class="form-control" id="fname" name="division" placeholder="Enter your Division">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">District</label>
                        <input value="{{$branchs->district}}" type="text" class="form-control" id="fname" name="district" placeholder="Enter your District">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Branch Name</label>
                        <input value="{{$branchs->office}} "type="text" class="form-control" id="fname" name="office" placeholder="Enter your Office Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Branch Id</label>
                        <input value="{{$branchs->number}} "type="text" class="form-control" id="fname" name="number" placeholder="Enter your Id">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Address</label>
                        <input value="{{$branchs->address}}" type="text" class="form-control" id="fname" name="address" placeholder="Enter your Address">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contact</label>
                        <input value="{{$branchs->contact}}" type="text" class="form-control" id="fname" name="contact" placeholder="Enter your Contact">
                    </div>


                    <button type="submit" class="btn btn-danger">Edited</button>
                    <a href="{{route('branch.list')}}" class="btn btn-success">Back</a>

                </form>
            </div>
        </div>
    </div>
</div>


  @endsection
