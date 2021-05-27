@extends('layouts.app')
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
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Guest</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
                      <form method="get" action="{{route('gm_get')}}">
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
                                  <a href="{{route('gm_get')}}" class="btn btn-xs btn-primary">
                                      <i class="fa fa-sync" ></i> refresh
                                  </a>
                              </div>
                          </div>
                      </form>
            <table id="example2" class="table table-bordered table-striped table-responsive text-nowrap">
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
                @foreach($data as $guest_master)
                <tr>
                    <td>{{$no++}}</td>
                    <td>
                        <div class="btn-group-vertical">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                </button>
                                <ul class="dropdown-menu">
                                    @if ($guest_master->gm_path == "")
                                        <li>
                                            <a onclick="upl('{{$guest_master->gm_id}}')" href="" class="dropdown-item" data-toggle="modal" data-target="#modal-upload">
                                                <i class="fa fa-file-upload" ></i>
                                                &emsp;Upload KTP
                                            </a>
                                        </li>
                                    @else
                                        <li>
                                            <a onclick="viewImg('{{$guest_master->gm_path}}')" href="#" class="dropdown-item" data-toggle="modal" data-target="#modal-view">
                                                <i class="fa fa-eye "></i>
                                                &emsp;View KTP
                                            </a>
                                        </li>
                                    @endif

                                    @if ($guest_master->gm_klr == "")
                                        <li>
                                            <a href="{{route('scrt_upt', $guest_master->gm_id)}}" class="dropdown-item">
                                                <i class="fa fa-door-open "></i>
                                                &emsp;Check-out
                                            </a>
                                        </li>
                                    @endif

                                </ul>
                            </div>
                        </div>
                    </td>
                    @if ($guest_master->gm_u_stat == "")
                        <td><i class="fa fa-times-circle text-danger"></i></td>
                    @else
                        <td><i class="fa fa-check-circle text-success"></i></td>
                    @endif
                    @if ($guest_master->gm_klr == "")
                        <td><i class="fa fa-exclamation-circle text-warning"></i></td>
                    @else
                        <td><i class="fa fa-check-circle text-success"></i></td>
                    @endif
                  <td>{{$guest_master->gc_tipe}}</td>
                  <td>{{$guest_master->gm_nama}}</td>
                  <td>{{$guest_master->gm_tlp}}</td>
                  <td>{{$guest_master->gm_almt}}</td>
                  <td>{{($guest_master->gm_inst == "")?"Personal":$guest_master->gm_inst}}</td>
                  <td>{{$guest_master->gm_pic}}</td>
                  <td>{{$guest_master->gm_wj}}</td>
                  <td>{{$guest_master->gm_tjn}}</td>
                  <td>{{$guest_master->gm_jd}}</td>
                  <td>{{$guest_master->gm_suhu}}</td>
                  <td>{{($guest_master->gm_srv1 == "1")?"Ya":"Tidak"}}</td>
                  <td>{{($guest_master->gm_srv2 == "1")?"Ya":"Tidak"}}</td>
                  <td>{{($guest_master->gm_srv3 == "1")?"Ya":"Tidak"}}</td>
                  <td>{{($guest_master->gm_srv4 == "1")?"Ya":"Tidak"}}</td>
                  <td>{{($guest_master->gm_klr == "")?"Belum Keluar":$guest_master->gm_klr}}</td>

                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
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
<!-- /.content -->
</section>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/datetime/1.0.2/js/dataTables.dateTime.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<script>

    var table = $("#example2");

    $(document).ready(function(){

        table.DataTable({
            buttons: [
                "excel",
                {
                    extend: 'pdfHtml5',
                    orientation: 'landscape',
                    pageSize: 'LEGAL'

                }
            ],
            "responsive": true, "lengthChange": true, "autoWidth": true, "pageLength": 100,
        }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');

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
</script>
@endsection
