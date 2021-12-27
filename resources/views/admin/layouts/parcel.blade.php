



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
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="fname" name="division" placeholder="Enter your Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Address</label>
                        <input type="text" class="form-control" id="fname" name="district" placeholder="Enter your Address">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Reciever</label>
                        <input type="text" class="form-control" id="fname" name="office" placeholder="Enter your Reciever">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Rec Add</label>
                        <input type="text" class="form-control" id="fname" name="address" placeholder="Enter your Rec Add">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contact</label>
                        <input type="text" class="form-control" id="fname" name="contact" placeholder="Enter your Contact">
                    </div>

                    <button type="submit" class="btn btn-default">Submit</button>
                    <button type="submit" class="btn btn-default">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>


  @endsection
