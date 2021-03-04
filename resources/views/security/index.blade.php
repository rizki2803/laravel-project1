@extends('layouts.app')
@section('content')
<!-- /.card -->

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Table Tamu</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>uuid</th>
                        <th>Nama Tamu</th>
                        <th>Kategori</th>
                        <th>No. Telepon</th>
                        <th>Alamat</th>
                        <th>Instansi</th>
                        <th>Tujuan</th>
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
                    <td>{{$security->id}}</td>
                    <td>{{$security->nama_tamu}}</td>
                    <td>{{$security->id_category}}</td>
                    <td>{{$security->tlp}}</td>
                    <td>{{$security->alamat}}</td>
                    <td>{{$security->instansi}}</td>
                    <td>{{$security->tujuan}}</td>
                    <td>{{$security->nama_pic}}</td>
                    <td>{{$security->jam_janji}}</td>
                    <td>{{$security->detail_tujuan}}</td>
                    <td>{{$security->jam_kedatangan}}</td>
                    <td>{{$security->suhu_tubuh}}</td>
                    <td>{{$security->survey1}}</td>
                    <td>{{$security->survey2}}</td>
                    <td>{{$security->survey3}}</td>
                    <td>{{$security->survey4}}</td>
                    <td><button class="btn btn-primary">keluar</button></td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
              </div>
              @endsection