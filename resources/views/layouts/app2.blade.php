<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PT. Hariff DTE</title>

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
</head>
<body class="hold-transition layout-top-nav layout-footer-fixed" >
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="{{asset('assets')}}/index3.html" class="navbar-brand">
        <img src="{{asset('img')}}/HariffLogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Pt. Hariff DTE</span>
      </a>

      
    </div>
  </nav>
    <div class="content-wrapper">
     @yield('content')
    </div>
    <footer class="main-footer">
        <strong>Copyright &copy; 2021 <a href="https://hariff.co.id/">PT. Hariff DTE</a>.</strong> All rights reserved.
    </footer>
