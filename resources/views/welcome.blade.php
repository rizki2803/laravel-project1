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
    <title>PT.Hariff DTE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets')}}/dist/css/adminlte.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{asset('assets')}}/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="{{asset('assets')}}/dist/css/adminlte.css">

    <!-- jQuery -->
    <script src="{{asset('assets')}}/plugins/jquery/jquery.min.js"></script>
</head>

<body class="hold-transition layout-top-nav">


    <div class="wrapper">

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper body">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <center><img class="profile-user-img img-fluid img-circle" src="{{asset('img')}}/HariffLogo1.jpeg" alt="User profile picture">
                                <h1 class="m-0 text-light"> PT.Hariff DTE </h1>
                            </center>
                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-4">

                            <!-- /.card-header -->
                            <!-- form start -->

                            <!-- jquery validation -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Silahkan Login : </h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form id="quickForm" novalidate="novalidate">
                                    <div class="card-body">
                                        @csrf
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                            </div>
                                            <input type="password" class="form-control" placeholder="password">
                                        </div>
                                       
                                        <div class="form-group mb-0">
                                             
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">SIGN IN</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->
                        </div>

                    </div>
                </div>
        </div>

    </div>
    </div>
    </section>
    <!-- Main Footer -->

    </div>
    <!-- ./wrapper -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block text-sm">
        </div>
        <strong>Copyright © 2021 <a href="https://hariff.co.id/">PT.Hariff DTE</a>.</strong> All rights reserved.
    </footer>
    </div>

</html>

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('assets')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets')}}/dist/js/demo.js"></script>
<!-- date-range-picker -->
{{--<script src="{{asset('assets')}}/plugins/daterangepicker/daterangepicker.js"></script>--}}