@extends('layouts.app2')
@section('content')
<br>
<!-- /.card -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Guest Data Tables</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="table_guest" class="table table-bordered table-striped table-responsive">
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


                </tr>
              </thead>
              <tbody>
                @php
                $no=1;
                @endphp
                @foreach($data as $receptionist)
                <tr>
                  <td>{{$no++}}</td>
                  <td>{{$receptionist->gc_id}}</td>
                  <td>{{$receptionist->gm_nama}}</td>
                  <td>{{$receptionist->gm_tlp}}</td>
                  <td>{{$receptionist->gm_almt}}</td>
                  <td>{{$receptionist->gm_inst}}</td>
                  <td>{{$receptionist->gpic_id}}</td>
                  <td>{{$receptionist->gm_wj}}</td>
                  <td>{{$receptionist->gm_tjn}}</td>
                  <td>{{$receptionist->gm_jd}}</td>
                  <td>{{$receptionist->gm_suhu}}</td>
                  <td>{{$receptionist->gm_srv1}}</td>
                  <td>{{$receptionist->gm_srv2}}</td>
                  <td>{{$receptionist->gm_srv3}}</td>
                  <td>{{$receptionist->gm_srv4}}</td>
                  <td>{{$receptionist->gm_klr}}</td>
                </tr>

                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
@section('script')

@endsection