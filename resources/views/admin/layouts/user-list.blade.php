
@extends('admin.master')


@section('content')

{{--Message section in blade file--}}

    @if(session('success'))
        <div class="alert alert-success">
            {!! session('success') !!}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {!! session('error') !!}
        </div>
    @endif


<h1></h1>
<br>
<a href="{{route('admin.form')}}" class="btn btn-warning">CREATE USER</a>

<!-- <------Search----->
<form  action="{{route('user.show')}}">
    <div class="input-group rounded mt-3 mb-2">
      <div class="form-outline">
        <br><input name="search" type="search" id="form1" class="form-control" placeholder="Search" arial-level="search" arial-describedby="search-addon" />
      </div>

      <br>
          <button type="submit" class="btn btn-primary mb-3">search</button>
          <i class="fas fa-search"></i>

    </div>
    </form>
    <!-- <------End Search----->
        <div id="divToPrint">
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        {{-- <th scope="col">password</th> --}}
        {{-- <th scope="col">mobile</th> --}}
        <th scope="col">role</th>
        <th scope="col">Action</th>


    </tr>
    </thead>
    <tbody>
        @foreach ($users as $key=>$user)
            <tr>
                <th>{{$key}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                {{-- <td>{{$user->password}}</td> --}}
                <td>{{$user->role}}</td>
                {{-- <td>{{$user->mobile}}</td> --}}

                <td>
                    <a class="btn btn-info" href="{{route('user.view',$user->id)}}"> View</a>
                    <a class="btn btn-danger" href="{{route('user.delete',$user->id)}}"> Delete</a>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
</div>
<br>
<input class="btn btn-success" type="button" onClick="PrintDiv('divToPrint');" value="Print">

@endsection

<script language="javascript">
    function PrintDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
