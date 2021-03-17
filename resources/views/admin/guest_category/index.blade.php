@extends('layouts.app')
@section('content')

</br>
@include('sweetalert::alert')
        <!-- Main content -->
        <section class="content">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
        <div class="container-fluid">
            <div class="row">
            <div class="col-12">
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Category</h3>
                    <a href="{{route('gc_store')}}" class="float-sm-right btn btn-xs btn-primary">
                          <i class="fa fa-plus"></i>
                    </a>
                    </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Guest Category</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    @php
                    $no=1;
                    @endphp
                    @foreach($gc as $category)
                    <tr>
                      <td>{{$no++}}</td>
                        <td>{{$category->gc_tipe}}</td>
                        <td>
                        <a href="{{route('gc_edit',$category->gc_id)}}" class="btn btn-sm btn-warning">
                          <i class="fa fa-edit "></i>
                        </a>
                                <a href="{{route('gc_del',$category->gc_id)}}" class="btn btn-sm btn-danger delete-confirm">
                                  <i class="fa fa-trash-alt "></i>
                                </a>
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
//.deletebutton is the class name in button
@foreach($gc as $category)
<script>
    $('.delete-confirm').on('click', function () {
        // return confirm('Are you sure want to delete?');
        event.preventDefault();//this will hold the url
        swal({
            title: "Are you sure?",
            text: "Once clicked, this will be soft deleted!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    swal("Done! category has been soft deleted!", {
                        icon: "success",
                        button: false,
                    });
                    location.reload({{route('gc_del',$category->gc_id)}});//this will release the event
                } else {
                    swal("Your imaginary file is safe!");
                }
            });
    });
</script>
@endforeach
@endsection
