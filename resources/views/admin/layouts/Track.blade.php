
@extends('admin.master')
@section('content')

<form action="{{route('track.store')}}" method="post" >
    @csrf

    <div class="form-group">
      <br><label for="exampleInputPassword1">Enter Tracking No</label><br>
      <input type="number" class="form-control" id="fname" name="no"placeholder="Enter Tracking No ">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>






@endsection
