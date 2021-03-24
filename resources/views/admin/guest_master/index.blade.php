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
<script>
  $(function() {
    $("#example2").DataTable({
        "responsive": true,
        "lengthChange": true,
        "autoWidth": true,
        "pageLength": 100,
    }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
  })
</script>
@endsection
