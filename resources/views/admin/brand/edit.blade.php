@extends('layout.layout')
@section('title', 'List Brand')
@section('content')
  <!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">List Brand</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Edit Brand</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-header bg-primary">
                  <h3 class="card-title">Edit Brand</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action='{{url("brand/postEdit")}}' enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Brand ID</label>
                        <input type="text" name="id" class="form-control" readonly value="{{$brand->id}}">
                    </div>
                    <div class="form-group">
                        <label>Brand Name</label>
                        <input type="text" name="name" class="form-control" readonly value="{{$brand->name}}">
                    </div>
                    <div class="form-group">
                        <label>Brand Image</label>
                        <img src='{{url("images/$brand->image")}}' alt="{{url("images/$brand->image")}}">
                        <input type="file" name="image">
                    </div>
                    <input type="submit" value="Edit" class="btn btn-primary">

                </form>
            </div>
            <!-- /.card-body -->
</div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
</section>

<!-- /.content -->
@endsection