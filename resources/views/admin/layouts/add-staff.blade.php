

@extends('admin.master')
@section('content')


<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="card-title">
                    <div class="title">ADD STAFF</div>
                </div>
            </div>
            <div class="panel-body">
                <form action="{{route('staff.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="fname" name="name" placeholder="Enter your Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Id</label>
                        <input type="text" class="form-control" id="fname" name="num" placeholder="Enter your Id">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Branch Name</label>
                        <input type="text" class="form-control" id="fname" name="branch" placeholder="Enter your Branch name">
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
                        <label for="exampleInputPassword1">Email</label>
                        <input type="email" class="form-control" id="fname" name="email" placeholder="Enter your Email">
                    </div>
                    {{-- <div class="form-group">
                        <label for="exampleInputFile">Image input</label>
                        <input type="file" id="exampleInputFile">

                    </div> --}}

                    <button type="submit" class="btn btn-default">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
