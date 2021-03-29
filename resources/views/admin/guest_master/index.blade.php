@extends('layouts.app')
@section('content')

<!-- Main content -->
</br>
<section class="content">
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
                                      <i class="fa fa-search"> filter</i>
                                  </button>
                              </div>
                          </div>
                      </form>
            <table id="example2" class="table table-bordered table-striped table-responsive text-nowrap">
              <thead>
                <tr>
                  <th>#</th>
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
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @php
                $no=1;
                @endphp
                @foreach($data as $guest_master)
                <tr>
                  <td>{{$no++}}</td>
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
                    <td>

                        @if ($guest_master->gm_klr == "")
                            <center>
                                <a href="{{route('scrt_upt', $guest_master->gm_id)}}" class="btn btn-sm btn-danger">
                                    <i class="fa fa-door-open "> Check-out</i>
                                </a>
                            </center>
                        @endif

                    </td>
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
</section>
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
</script>
@endsection
