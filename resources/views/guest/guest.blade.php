<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Top Navigation</title>

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

<body class="hold-transition layout-top-nav">

  <div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container">
          <div class="row mb-2">
            <div class="col-sm-6">
            <img class="profile-user-img img-fluid img-circle" src="{{asset('img')}}/HariffLogo.png" alt="User profile picture">
              <h1 class="m-0"> PT.Hariff DTE </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">

              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Silahkan isi data berikut :</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="card-body">
                <form action="{{route('survey.store')}}"method="post">
                  @csrf
                  <div class="form-group">
                    <label>Kategori Tamu</label>

                    <select name="kategori_tamu" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="9" tabindex="-1" aria-hidden="true">
                      <option selected="selected" data-select2-id="11">Visitor</option>
                      <option data-select2-id="39">Interview</option>
                      <option data-select2-id="42">Promoti</option>
                    </select></span>

                  </div>
                  <div class="form-group">
                    <label>Nama</label>
                    <input name="nama" type="text" class="form-control" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                    <label>No telp</label>
                    <input name="tlp" type="text" class="form-control" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input name="alamat" type="text" class="form-control" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                    <label>Nama Instansi</label>
                    <input name="nama_instansi" type="text" class="form-control" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                    <label>Tujuan :</label><br>
                    <label>Nama PIC</label>
                    <input name="nama_pic" type="text" class="form-control" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                    <label>Tanggal:</label>

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                      </div>
                      <input name="date" type="date" class="form-control float-right" id="reservation">
                    </div>

                    <!-- /.input group -->
                  </div>
                  <div class="form-group">
                    <label>Date and time range:</label>

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                      </div>
                      <input name="jam" type="time" class="form-control float-right" id="reservation">
                    </div>
                    <div class="form-group">
                      <label>Detail Tujuan</label>
                      <input name="detail_tujuan" type="text" class="form-control" placeholder="Enter ...">
                    </div>
                    <div class="col-sm-6">
                      <!-- radio -->
                      <label>Kondisi Tubuh :</label><br>
                      <div class="icheck-danger d-inline">
                        <input  type="radio" name="r1" checked="" id="radioDanger1">
                        <label for="radioDanger1">
                          Sehat
                        </label>
                      </div>
                      <div class="icheck-danger d-inline">
                        <input type="radio" name="r1" id="radioDanger2">
                        <label for="radioDanger2">
                          Tidak
                        </label>
                      </div>
                      <div class="form-group clearfix">
                        <div class="icheck-danger d-inline">
                          <input type="radio" name="r2" checked="" id="radioDanger1">
                          <label for="radioDanger1">
                            Batuk
                          </label>
                        </div>
                        <div class="icheck-danger d-inline">
                          <input type="radio" name="r2" id="radioDanger2">
                          <label for="radioDanger2">
                            Tidak
                          </label>
                        </div><br>
                        <div class="icheck-danger d-inline">
                          <input type="radio" name="r3" checked="" id="radioDanger1">
                          <label for="radioDanger1">
                            Sakit Tenggorokan
                          </label>
                        </div>
                        <div class="icheck-danger d-inline">
                          <input type="radio" name="r3" id="radioDanger2">
                          <label for="radioDanger2">
                            Tidak
                          </label>
                        </div>
                        <div class="form-group clearfix">
                          <label>Indra Penciuman :</label><br>
                          <div class="icheck-danger d-inline">
                            <input type="radio" name="r4" checked="" id="radioDanger1">
                            <label for="radioDanger1">
                              Normal
                            </label>
                          </div>
                          <div class="icheck-danger d-inline">
                            <input type="radio" name="r4" id="radioDanger2">
                            <label for="radioDanger2">
                              Tidak
                            </label>
                          </div>

                          <!-- /.input group -->
                        </div>
                        <!-- /.card-body -->
                        <button type="submit" class="btn btn-primary">Submit</button>

                </form>

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
    <div class="float-right d-none d-sm-block">
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
    <script src="{{asset('assets')}}/plugins/daterangepicker/daterangepicker.js"></script>
    <script>

    </script>
    