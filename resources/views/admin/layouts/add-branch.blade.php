

@extends('admin.master')
@section('content')


<h1>   ADD BRANCH</h1>






<form action="{{route('branch.store')}}" method="post">
    @csrf
    <label for="fname">Division:</label><br>
    <input type="text" id="fname" name="division" placeholder="Enter your Division"><br>
    <label for="lname">District:</label><br>
    <input type="text" id="lname" name="district" placeholder="Enter your District"><br>
    <label for="fname">Office Name:</label><br>
    <input type="text" id="fname" name="office" placeholder="Enter your Office Name"><br>
    <label for="fname">Address:</label><br>
    <input type="text" id="fname" name="address" placeholder="Enter your Address"><br>
    <label for="fname">Contact:</label><br>
    <input type="text" id="fname" name="contact" placeholder="Enter your Contact"><br>
    <label for="fname">Office Type:</label><br>
    <input type="text" id="fname" name="type" placeholder="Enter your Office Type"><br>
    <input type="submit" value="Submit">
    <input type="reset">
  </form>
  @endsection
