

@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="card-title">
                    <div class="title">User Create</div>
                </div>
            </div>
            <div class="panel-body">
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="Enter User Name">Name </label>
                        <input type="text" class="form-control" id="fname" name="name" placeholder="Enter your Name">
                    </div>
                    <div class="form-group">
                        <label for="Enter User Email">Email </label>
                        <input type="email" class="form-control" id="fname" name="email" placeholder="Enter your Email">
                    </div>
                    <div class="form-group">
                        <label for="Enter User Name">Password </label>
                        <input type="password" class="form-control" id="fname" name="password" placeholder="Enter your Password">
                    </div>
                    <div class="form-group">
                        <label for="Enter User Mobile">Mobile </label>
                        <input type="mobile" class="form-control" id="fname" name="mobile" placeholder="Enter your Mobile">
                    </div>
                     <div class="form-group">
                        <label for="exampleFormControlSelect1">Role</label>
                       <select class="form-control" name="role" id="exampleFormControlSelect1">
                               <option>select option</option>
                               <option>Admin</option>
                               <option>User</option>
                               <option>Branch Admin</option>
                       </select>
                     </div>



                    <button type="submit" class="btn btn-primary">Submit</button>
                    {{-- <button type="submit" class="btn btn-default">Reset</button> --}}
                </form>
            </div>
        </div>
    </div>
</div>

@endsection




