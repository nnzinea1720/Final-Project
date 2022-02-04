

@extends('admin.master')
@section('content')


<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="card-title">
                    <a href="" class="btn btn-info"> Create Notice </a>
                </div>
            </div>
            <div class="panel-body">
                <form action="{{route('notice.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Date</label>
                        <input type="date" class="form-control" id="fname" name="date" placeholder="Enter your Date">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Notice Name</label>
                        <input type="text" class="form-control" id="fname" name="notice_name" placeholder="Enter your Notice Name">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{route('admin')}}" class="btn btn-danger"> Home </a>
                </form>
            </div>
        </div>
    </div>
</div>


  @endsection
