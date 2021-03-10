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
    @include('sweetalert::alert')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper body">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container">

          {{ @csrf_field() }}
          <div class="row mb-2">
            <div class="col-sm-12">
              <center><img class="profile-user-img img-fluid img-circle" src="{{asset('img')}}/HariffLogo1.jpeg" alt="User profile picture">
                <h1 class="m-0 text-light"> PT.Hariff DTE </h1>
              </center>
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
                  <form action="{{route('survey.store')}}" method="post">
                    @csrf
                    <label>Pilih :</label><br>
                    <div class="form-group">
                      <div class="icheck-danger d-inline col-sm-6">
                        <input type="radio" name="pil_aktif" id="pil_aktif" value="NO" checked>
                        <label for="pil_aktif"><b>Personal</b> </label>
                      </div>
                      <div class="icheck-danger d-inline col col-sm-6">
                        <input type="radio" name="pil_aktif" id="pil_aktif1" value="OK">
                        <label for="pil_aktif1"><b>instansi</b></label>
                      </div>
                    </div>
                    <div class="form-group" id="ins">

                      <div class="form-group">
                        <div class="form-line">
                          <label>Kategori Tamu</label>
                          {{Form::select('guestcategory', $gc,null, ['class'=>'form-control ','id'=>'tamu'])}}
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Nama</label>
                      <input name="nama" type="text" class="form-control" required="required" placeholder="Enter ...">
                    </div>
                    <div class="form-group">
                      <label>No telp</label>
                      <input name="tlp" type="text" class="form-control" required="required" placeholder="Enter ...">
                    </div>
                    <div class="form-group">
                      <label>Alamat</label>
                      <input name="alamat" type="text" class="form-control" required="required" placeholder="Enter ...">
                    </div>
                    <div class="form-group" id="form_instansi">
                      <label>Nama Instansi</label>
                      <input id="instansi" name="nama_aktif" type="text" class="form-control"  placeholder="Enter ...">
                    </div>
                    <div class="form-group">
                      <label>Tujuan :</label><br>
                      <label>Nama PIC</label>
                      <input name="namapic" type="text" class="form-control" placeholder="Enter ...">
                    </div>
                    <div class="form-group">
                      <!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <label>Waktu yang di janjikan :</label>

                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="far fa-clock"></i></span>
                        </div>
                        <input name="jam" type="time" class="form-control float-right" id="reservation">
                      </div><br>
                      <div class="form-group">
                        <label>Detail Tujuan</label>
                        <textarea name="dtltujuan" type="text" class="form-control" rows="3" required="required" placeholder="Enter ..."></textarea>
                      </div>
                      <div class="form-group">
                        <label>Suhu Tubuh</label>
                        <input name="suhu" type="text" class="form-control" required="required" placeholder="36.0">
                      </div>
                      <!-- radio -->
                      <div class="col-sm-12">
                        <label>Kondisi Tubuh :</label><br>
                        <label>Apakah anda sedang sakit?</label><br>
                        <div class="icheck-danger d-inline col-3">
                          <input type="radio" name="r1" value ="Ya" id="radioDanger1">
                          <label for="radioDanger2">
                            YA
                          </label>
                        </div>
                        <div class="icheck-danger d-inline ">
                          <input type="radio" name="r1" value ="tidak" id="radioDanger2">
                          <label for="radioDanger2">
                            Tidak
                          </label>
                        </div>
                        <br><label>Apakah anda mengalami batuk dalam 3 hari terakhir ?</label><br>
                        <div class="form-group clearfix">
                          <div class="icheck-danger d-inline col-3">
                            <input type="radio" name="r2" value ="Ya" id="radioDanger1">
                            <label for="radioDanger1">
                              YA
                            </label>
                          </div>
                          <div class="icheck-danger d-inline col-6">
                            <input type="radio" name="r2" value ="tidak" id="radioDanger2">
                            <label for="radioDanger2">
                              Tidak
                            </label>
                          </div><br>
                          <label>Apakah anda mengalami sakit tenggorokan dalam 3 hari terakhir ?</label><br>
                          <div class="icheck-danger d-inline col-3">
                            <input type="radio" name="r3" value ="Ya" id="radioDanger1">
                            <label for="radioDanger1">
                              YA
                            </label>
                          </div>
                          <div class="icheck-danger d-inline col-6">
                            <input type="radio" name="r3"  value ="tidak" id="radioDanger2">
                            <label for="radioDanger2">
                              Tidak
                            </label>
                          </div>
                          <div class="form-group clearfix">
                            
                            <label>apakah indra penciuman anda sedang tidak normal dalam 3 hari terakhir ?</label><br>
                            <div class="icheck-danger d-inline col-3">
                              <input type="radio" name="r4" value ="Ya" id="radioDanger1">
                              <label for="radioDanger1">
                                YA
                              </label>
                            </div>
                            <div class="icheck-danger d-inline col-6">
                              <input type="radio" name="r4" value ="tidak" id="radioDanger2">
                              <label for="radioDanger2">
                                Tidak
                              </label>
                            </div>


                            <!-- /.input group -->
                          </div>
                          <!-- /.card-body -->


                          <input type="submit" class="btn btn-primary" value="submit">

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
<script>
  $(function() {

    $(':radio').on('change', function() {

        // var aktif = $("input[name='nama_instansi']:checked").val();
        var Instansi = $("input[name='pil_aktif']:checked").val();
        
        if (Instansi == 'NO') {
          // console.log(Instansi);
          $('#nama_instansi').val("");
          $('#form_instansi').hide();
          $('#nama_instansi').attr('enabled', true);
        } else {
          // console.log(Instansi);
          $('#form_instansi').show();

          $('#nama_instansi').attr('disabled', true);
        }
      })
      .filter(':checked').change();
  });
</script>