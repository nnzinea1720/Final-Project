<!DOCTYPE html>
<!--
Template Name: BRILLIANT Bootstrap Admin Template
Version: 4.5.6
Author: WebThemez
Website: http://www.webthemez.com/
-->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Courier Service Management System</title>
    <!-- Bootstrap Styles-->
    <link href="{{url('/assets/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{url('/assets/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="{{url('/assets/js/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{url('/assets/css/custom-styles.css')}}" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{url('/assets/js/Lightweight-Chart/cssCharts.css')}}">
</head>

<body>
    <div id="wrapper">
@include('admin.partials.nav')
        <!-- /. NAV SIDE  -->

		<div id="page-wrapper">
		  <div class="header">
                        <h1 class="page-header">
                            Dashboard <small>Welcome CSMS</small>
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
                        <div class="panel panel-primary">
						<div class="number">
							<h3>
								<h3>44,023</h3>
								<small>Daily Visits</small>
							</h3>
						</div>
						<div class="icon">
						   <i class="fa fa-eye fa-5x red"></i>
						</div>

                        </div>
						</div>
                    </div>

					       <div class="col-md-3 col-sm-12 col-xs-12">
					<div class="board">
                        <div class="panel panel-primary">
						<div class="number">
							<h3>
								<h3>32,850</h3>
								<small>Sales</small>
							</h3>
						</div>
						<div class="icon">
						   <i class="fa fa-shopping-cart fa-5x blue"></i>
						</div>

                        </div>
						</div>
                    </div>

					       <div class="col-md-3 col-sm-12 col-xs-12">
					<div class="board">
                        <div class="panel panel-primary">
						<div class="number">
							<h3>
								<h3>56,150</h3>
								<small>Comments</small>
							</h3>
						</div>
						<div class="icon">
						   <i class="fa fa-comments fa-5x green"></i>
						</div>

                        </div>
						</div>
                    </div>

					       <div class="col-md-3 col-sm-12 col-xs-12">
					<div class="board">
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
                    </div>

                </div>
				    <!--/.row-->


				<div class="row">

                <!-- /. ROW  -->


@yield('content')



                <!-- /. ROW  -->



            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="{{url('/assets/js/jquery-1.10.2.js')}}"></script>
    <!-- Bootstrap Js -->
    <script src="{{url('/assets/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Js -->
    <script src="{{url('/assets/js/jquery.metisMenu.js')}}"></script>
    <!-- Morris Chart Js -->
    <script src="{{url('/assets/js/morris/raphael-2.1.0.min.js')}}"></script>
    <script src="{{url('/assets/js/morris/morris.js')}}"></script>


	<script src="{{url('/assets/js/easypiechart.js')}}"></script>
	<script src="{{url('/assets/js/easypiechart-data.js')}}"></script>

	 <script src="{{url('/assets/js/Lightweight-Chart/jquery.chart.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{url('/assets/js/custom-scripts.js')}}"></script>


    <!-- Chart Js -->
    <script type="text/javascript" src="{{url('/assets/js/Chart.min.js')}}"></script>
    <script type="text/javascript" src="{{url('/assets/js/chartjs.js')}}"></script>

</body>

</html>
