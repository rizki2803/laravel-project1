@extends('layouts.app2')
@section('content')

</br>
<section class="content">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <!-- /.card -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Guest Data Tables</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
              <form method="get" action="{{url('/guest_security')}}">
                  <div class="form-group">
                      <div class="d-inline col-sm-6">
                          <label>Minimum date:</label>
                          <input type="text" id="min" name="min" value="" />
                      </div>
                      <div class="d-inline col-sm-6">
                          <label>Maximum date:</label>
                          <input type="text" id="max" name="max" value="" />
                          <button type="submit" id="date_filter" name="date_filter" class="btn btn-xs btn-secondary">
                              <i class="fa fa-search"></i> filter
                          </button>
                          <a href="{{url('/guest_security')}}" class="btn btn-xs btn-primary">
                              <i class="fa fa-sync" ></i> refresh
                          </a>
                      </div>

                  </div>
              </form>
            <div class="row">
              <div class="col-sm-12">
                <table id="example2" class="table table-bordered table-hover table-responsive text-nowrap">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Action</th>
                      <th>KTP</th>
                      <th>OUT</th>
                      <th>Kategori</th>
                      <th>Nama Tamu</th>
                      <th>No. Telepon</th>
                      <th>Alamat</th>
                      <th>Instansi</th>
                      <th>Nama PIC</th>
                      <th>Jam Janji</th>
                      <th>Detail Tujuan</th>
                      <th>Jam Kedatangan</th>
                      <th>Suhu Tubuh</th>
                      <th>Sakit</th>
                      <th>Batuk</th>
                      <th>Sakit Tenggorokan</th>
                      <th>Gangguan Penciuman</th>
                      <th>Jam Keluar</th>

                    </tr>
                  </thead>
                  <tbody>
                  @php
                      $no=1;
                  @endphp
                  @foreach($data as $security)
                      <tr>
                          <td>{{$no++}}</td>
                        <td>
                            <div class="btn-group-vertical">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    </button>
                                    <ul class="dropdown-menu">
                                        @if ($security->gm_path == "")
                                        <li>
                                            <a onclick="upl('{{$security->gm_id}}')" href="" class="dropdown-item" data-toggle="modal" data-target="#modal-upload">
                                                <i class="fa fa-file-upload" ></i>
                                                &emsp;Upload KTP
                                            </a>
                                        </li>
                                        @else
                                        <li>
                                            <a onclick="upl('{{$security->gm_id}}')" href="" class="dropdown-item" data-toggle="modal" data-target="#modal-upload">
                                                <i class="fa fa-file-upload" ></i>
                                                &emsp;Re-Upload KTP
                                            </a>
                                        </li>
                                        <li>
                                            <a onclick="viewImg('{{$security->gm_path}}')" href="#" class="dropdown-item" data-toggle="modal" data-target="#modal-view">
                                                <i class="fa fa-eye "></i>
                                                &emsp;View KTP
                                            </a>
                                        </li>
                                        @endif

                                        @if ($security->gm_klr == "")
                                        <li>
                                            <a href="{{route('scrt_upt', $security->gm_id)}}" class="dropdown-item">
                                                <i class="fa fa-door-open "></i>
                                                &emsp;Check-out
                                            </a>
                                        </li>
                                        @endif

                                    </ul>
                                </div>
                            </div>
                        </td>
                        @if ($security->gm_u_stat == "")
                            <td><i class="fa fa-times-circle text-danger"></i></td>
                        @else
                            <td><i class="fa fa-check-circle text-success"></i></td>
                        @endif
                        @if ($security->gm_klr == "")
                            <td><i class="fa fa-exclamation-circle text-warning"></i></td>
                        @else
                            <td><i class="fa fa-check-circle text-success"></i></td>
                        @endif
                          <td>{{$security->gc_tipe}}</td>
                          <td>{{$security->gm_nama}}</td>
                          <td>{{$security->gm_tlp}}</td>
                          <td>{{$security->gm_almt}}</td>
                          <td>{{($security->gm_inst == "")?"Personal":$security->gm_inst}}</td>
                          <td>{{$security->gm_pic}}</td>
                          <td>{{$security->gm_wj}}</td>
                          <td>{{$security->gm_tjn}}</td>
                          <td>{{$security->gm_jd}}</td>
                          <td>{{$security->gm_suhu}}</td>
                          <td>{{($security->gm_srv1 == "1")?"Ya":"Tidak"}}</td>
                          <td>{{($security->gm_srv2 == "1")?"Ya":"Tidak"}}</td>
                          <td>{{($security->gm_srv3 == "1")?"Ya":"Tidak"}}</td>
                          <td>{{($security->gm_srv4 == "1")?"Ya":"Tidak"}}</td>
                          <td>{{($security->gm_klr == "")?"Belum Keluar":$security->gm_klr}}</td>

                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="modal fade" id="modal-upload">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Upload Foto KTP</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-upl" action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group">
                            <input type="file" name="ktp" id="ktp">

                            <div class="input-group-append">
                                <button type="submit" class="btn-default btn-xs ">Upload</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <div class="modal fade" id="modal-view">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">View Foto KTP</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <center>
                        <img src="" id="view_ktp" width="auto" height="200px">
                    </center>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

</section>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/datetime/1.0.2/js/dataTables.dateTime.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script>
  $(function() {
    $("#example2").DataTable({
      "responsive": true,
      "lengthChange": true,
      "autoWidth": true,
      "pageLength": 100
    }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');

  })
  function upl(id) {
      var url = "{{route('scrt_upl','inikode')}}";
      url = url.replace('inikode',id);
      $("#form-upl").attr("action", url);

  }
  function viewImg(path){
      var url = "{{asset('inipath')}}";
      url = url.replace('inipath', path);
      $("#view_ktp").attr("src", url);
  }

  $(document).ready(function(){

      $('input[name="min"]').daterangepicker({
          singleDatePicker: true,
          showDropdowns: true,
      });
      $('input[name="max"]').daterangepicker({
          singleDatePicker: true,
          showDropdowns: true,
      });

      var minDate, maxDate;

      // Refilter the table
      $('#min, #max').on('change', function () {
          // Create date inputs
          minDate = new DateTime($('#min'), {
              format: 'MM/DD/YYYY'
          });
          maxDate = new DateTime($('#max'), {
              format: 'MM/DD/YYYY'
          });

      });

  });
</script>
@endsection
