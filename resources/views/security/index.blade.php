@extends('layouts.app2')
@section('content')
<br>
<!-- /.card -->
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Table Tamu</h3>
              </div>
              <!-- /.card-header -->
              
               <div class="card-body">
               
                <div class="row">
                <div class="col-sm-12">
                 
               


                <table id="example2" class="table table-bordered table-hover table-responsive">
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
                        <td>{{$security->gc_id}}</td>
                        <td>{{$security->gm_nama}}</td>
                        <td>{{$security->gm_tlp}}</td>
                        <td>{{$security->gm_almt}}</td>
                        <td>{{$security->gm_inst}}</td>
                        <td>{{$security->gpic_id}}</td>
                        <td>{{$security->gm_wj}}</td>
                        <td>{{$security->gm_tjn}}</td>
                        <td>{{$security->gm_jd}}</td>
                        <td>{{$security->gm_suhu}}</td>
                        <td>{{$security->gm_srv1}}</td>
                        <td>{{$security->gm_srv2}}</td>
                        <td>{{$security->gm_srv3}}</td>
                        <td>{{$security->gm_srv4}}</td>
                        <td><button class="btn btn-primary">keluar</button></td>
                        </tr>
                        @endforeach
                        </tbody>
                </table>
                </div>
              </div>
              @endsection