@extends('admin.master')
@section('content')

<form action="{{route('payment.status.store')}}" method="post" >
    @csrf

    <div class="form-group">
      <br><label for="exampleInputPassword1"> Payment Amount</label><br>
      <input type="number" class="form-control" id="fname" name="payment_amount" placeholder="Enter Tracking Payment ">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1"> Payment Method</label><br>
        <input type="text" class="form-control" id="fname" name="method" placeholder="Enter Tracking Payment ">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1"> Transaction Id</label><br>
        <input type="number" class="form-control" id="fname" name="transaction" placeholder="Enter Tracking Payment ">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1"> Payment Status</label><br>
        <select class="form-control" name="status" id="fname">
            <option>select option</option>
            <option value="paid">paid</option>
            <option value="unpaid">unpaid</option>
    </select>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>






@endsection
