
@extends('admin.master')

@section('content')


                  <h1 class="page-header">
                      Dashboard <small style="color:rgb(54, 121, 221)">Welcome CSMS</small>
                  </h1>
                  <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Dashboard</a></li>
                <li class="active">Data</li>
              </ol>

  </div>

<div id="page-inner">

    <!-- /. ROW  -->

    <div class="row">
        <div class="col-md-3 col-sm-12 col-xs-12">
        <div class="board">
            <div class="panel panel-primary" style="background-color:rgb(83, 83, 248)">
            <div class="number">
                <h3>
                    <h3 style="color:black">{{$parcels}}</h3>
                    <small style="color:white">Parcels</small>
                </h3>
            </div>
            <div class="icon">
               <i class="fa fa-book fa-5x red"></i>
            </div>

            </div>
            </div>
        </div>

               <div class="col-md-3 col-sm-12 col-xs-12">
        <div class="board">
            <div class="panel panel-primary" style="background-color:turquoise">
            <div class="number">
                <h3>
                    <h3 style="color:black">{{$branchs}}</h3>
                    <small style="color:white">Branchs</small>
                </h3>
            </div>
            <div class="icon">
               <i class="fa fa-home fa-5x blue"></i>
            </div>

            </div>
            </div>
        </div>

               <div class="col-md-3 col-sm-12 col-xs-12">
        <div class="board">
            <div class="panel panel-primary" style="background-color:rgb(114, 74, 160)">
            <div class="number">
                <h3>
                    <h3 style="color:black">{{$customers}}</h3>
                    <small style="color:white">Customers</small>
                </h3>
            </div>
            <div class="icon">
               <i class="fa fa-user fa-5x yellow"></i>
            </div>

            </div>
            </div>
        </div>

               <div class="col-md-3 col-sm-12 col-xs-12">
        {{-- <div class="board">
            <div class="panel panel-primary">
            <div class="number">
                <h3>
                    <h3>89,645</h3>
                    <small>Daily Profits</small>
                </h3>
            </div>
            <div class="icon">
               <i class="fa fa-user fa-5x yellow"></i>
            </div>

            </div>
            </div>
        </div> --}}

    </div>
        <!--/.row-->


    <div class="row">

    <!-- /. ROW  -->
    @endsection
