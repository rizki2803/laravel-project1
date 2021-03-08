<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="{{asset('img')}}/HariffLogo.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PT. Hariff DTE</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets')}}/dist/css/adminlte.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{asset('assets')}}/plugins/daterangepicker/daterangepicker.css">
  <!-- date-range-picker -->
  <script src="{{asset('assets')}}/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- jQuery -->
  <script src="{{asset('assets')}}/plugins/jquery/jquery.min.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed" style="min-height: 100%;">

<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{asset('assets')}}/index3.html" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{asset('assets')}}/index3.html" class="nav-link">Logout</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

@include('partials.menu')
