



@extends('admin.master')
@section('content')


<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="card-title">
                    <div class="title">Booking Parcel</div>
                </div>
            </div>
            <div class="panel-body">
                <form action="{{route('booking.parcel.update',$list->id)}}" method="post">
                    @method('put')
                    @csrf

                        <label for="inputState">State</label>
                        <select id="inputState" name="status"class="form-control">
                          <option selected>Set Status</option>
                          <option value="delivered">Delivered</option>
                          <option value="panding">Pending</option>
                          <option value="return">Return</option>
                        </select>

                        <br>


                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>


  @endsection
