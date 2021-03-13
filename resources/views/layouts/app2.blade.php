<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<style>
    .body {

        background: linear-gradient(to right, #2a1f4c 45%, #ef9b11 80%)
    }
</style>
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="{{asset('img')}}/HariffLogo.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PT. Hariff DTE</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('assets')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets')}}/dist/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('assets')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('assets')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('assets')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- jQuery -->
<script src="{{asset('assets')}}/plugins/jquery/jquery.min.js"></script>
  <!-- DataTables  & Plugins -->
<script src="{{asset('assets')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('assets')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('assets')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('assets')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('assets')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('assets')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('assets')}}/plugins/jszip/jszip.min.js"></script>
<script src="{{asset('assets')}}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('assets')}}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('assets')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets')}}/dist/js/adminlte.min.js"></script>
</head>
<body class="hold-transition layout-top-nav layout-footer-fixed" >

<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="https://hariff.co.id/" class="navbar-brand">
        <img src="{{asset('img')}}/HariffLogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PT. Hariff DTE</span>
      </a>
    </div>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{asset('assets')}}/index3.html" class="nav-link">Logout</a>
      </li>
    </ul>
  </nav>
    <div class="content-wrapper body">
     @yield('content')
    </div>
    <footer class="main-footer text-sm">
        <strong>Copyright &copy; 2021 <a href="https://hariff.co.id/">PT. Hariff DTE</a>.</strong> All rights reserved.
    </footer>
