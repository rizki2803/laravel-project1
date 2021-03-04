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
                        
                        
                    </tr>
                    </thead>
                    <tbody>
                    @php
                    $no=1;
                    @endphp
                    @foreach($data as $receptionist)
                    <tr>
                    <td>{{$no++}}</td>
                    <td>{{$receptionist->id}}</td>
                    <td>{{$receptionist->nama_tamu}}</td>
                    <td>{{$receptionist->id_category}}</td>
                    <td>{{$receptionist->tlp}}</td>
                    <td>{{$receptionist->alamat}}</td>
                    <td>{{$receptionist->instansi}}</td>
                    <td>{{$receptionist->tujuan}}</td>
                    <td>{{$receptionist->nama_pic}}</td>
                    <td>{{$receptionist->jam_janji}}</td>
                    <td>{{$receptionist->detail_tujuan}}</td>
                    <td>{{$receptionist->jam_kedatangan}}</td>
                    <td>{{$receptionist->suhu_tubuh}}</td>
                    <td>{{$receptionist->survey1}}</td>
                    <td>{{$receptionist->survey2}}</td>
                    <td>{{$receptionist->survey3}}</td>
                    <td>{{$receptionist->survey4}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
              </div>
              @endsection