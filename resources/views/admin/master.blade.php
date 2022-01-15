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
