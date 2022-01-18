



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
                <form action="{{route('parcel.update',$parcels->id)}}" method="post">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input value="{{$parcels->name}}" type="text" class="form-control" id="fname" name="name" placeholder="Enter your Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Address</label>
                        <input value="{{$parcels->address}}" type="text" class="form-control" id="fname" name="address" placeholder="Enter your Address">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Reciever</label>
                        <input value="{{$parcels->receiver}}" type="text" class="form-control" id="fname" name="receiver" placeholder="Enter your Reciever">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Rec Add</label>
                        <input value="{{$parcels->rec_address}}" type="text" class="form-control" id="fname" name="rec_address" placeholder="Enter your Rec Add">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contact</label>
                        <input value="{{$parcels->contact}}" type="text" class="form-control" id="fname" name="contact" placeholder="Enter your Contact">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Type</label>
                        <input value="{{$parcels->type}}" type="text" class="form-control" id="fname" name="type" placeholder="Enter your Type">
                    </div>

                    <button type="submit" class="btn btn-default">Submit</button>
                    <button type="submit" class="btn btn-default">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>


  @endsection