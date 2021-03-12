@extends('layouts.app')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

        <!-- Main content -->
        <section class="content">
        <div class="container-fluid">
            <div class="row ">
            <div class="col-12">
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Category</h3>
                    <a href="{{route('gc_get')}}" class="float-sm-right btn btn-xs btn-primary">
                          <i class="fa fa-arrow-left"> Back</i>
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row mb-2">
                        
                        <form method="get" action="/guest_category/upt/{{$gc->gc_id}}" enctype="multipart/form-data">
        
                            <input type="category" value="{{ $gc->gc_tipe }}" class="form-control" name="gc_tipe">
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
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
@endsection