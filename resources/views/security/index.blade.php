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

            <div class="row">
              <div class="col-sm-12">
                <table id="table" class="table table-bordered table-hover table-responsive">
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
                      <th>Survey 1</th>
                      <th>Survey 2</th>
                      <th>Survey 3</th>
                      <th>Survey 4</th>
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
                      <td>{{$security->gm_inst}}</td>
                      <td>{{$security->gpic_id}}</td>
                      <td>{{$security->gm_wj}}</td>
                      <td>{{$security->gm_tjn}}</td>
                      <td>{{$security->gm_jd}}</td>
                      <td>{{$security->gm_suhu}}</td>
                      <td>{{$security->gm_srv1 == "1")?"Ya":"Tidak"}}</td>
                      <td>{{$security->gm_srv2 == "1")?"Ya":"Tidak"}}</td>
                      <td>{{$security->gm_srv3 == "1")?"Ya":"Tidak"}}</td>
                      <td>{{$security->gm_srv4 == "1")?"Ya":"Tidak"}}</td>
                      <td>{{$security->gm_klr}}</td>
                      <td><center><a href="{{route('scrt_upt', $security->id)}}" class="btn btn-sm btn-danger">
                      <i class="fa fa-door-open "></i></center></td>
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
@endsection