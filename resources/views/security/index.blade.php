@extends('layouts.app2')
@section('content')
<br>
<section class="content">
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
            <label for="filter-periode"> Filter Berdasarkan Periode : </label> 
            <select name="filter_periode" id="filter_periode" class="col-2 form-control">
              <option value=""> Pilih Periode </option>
              <option value="7"> 7 Hari Terakhir </option>
              <option value="14"> 14 Hari Terakhir </option>
              <option value="21"> 21 Hari Terakhir </option>
              <option value="31"> 31 Hari Terakhir </option>
              <option value="365"> 365 Hari Terakhir </option>
            </select>
            <div class="row">
              <div class="col-sm-12">
                <table id="example2" class="table table-bordered table-hover table-responsive text-nowrap">
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
                      <th>Sehat</th>
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
                    @foreach($data as $security)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$security->gc_tipe}}</td>
                      <td>{{$security->gm_nama}}</td>
                      <td>{{$security->gm_tlp}}</td>
                      <td>{{$security->gm_almt}}</td>
                      <td>{{($security->gm_inst == "")?"Personal":""}}</td>
                      <td>{{$security->gpic_id}}</td>
                      <td>{{$security->gm_wj}}</td>
                      <td>{{$security->gm_tjn}}</td>
                      <td>{{$security->gm_jd}}</td>
                      <td>{{$security->gm_suhu}}</td>
                      <td>{{($security->gm_srv1 == "1")?"Ya":"Tidak"}}</td>
                      <td>{{($security->gm_srv2 == "1")?"Ya":"Tidak"}}</td>
                      <td>{{($security->gm_srv3 == "1")?"Ya":"Tidak"}}</td>
                      <td>{{($security->gm_srv4 == "1")?"Ya":"Tidak"}}</td>
                      <td>{{($security->gm_klr == "")?"Belum Keluar":""}}</td>
                      <td>
                        <center><a href="{{route('scrt_upt', $security->id)}}" class="btn btn-sm btn-danger">
                            <i class="fa fa-door-open "></i></a></center>
                      </td>
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
</section>
<script>
  $(function () {
    $("#example2").DataTable
    ({"responsive": true, "lengthChange": false, "autoWidth": true,
    }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
    })
</script>
@endsection