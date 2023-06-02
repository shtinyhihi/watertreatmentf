@extends('layout.layout')
@section('title', 'View Brand')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">View Brand</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ url('brand/index') }}"></a></li>
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
                    <div class="card-header">
                        <h3 class="card-title">View Brand</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <h1>Brand: {{ $brand->name }}</h1>
                        <h2>Has some products:</h2>
                        <table id="product" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Product Id</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($brand->products as $p)
                                    <tr>
                                        <td>{{ $p->id }}</td>
                                        <td>{{ $p->name }}</td>
                                        <td>{{ $p->price }}</td>
                                        <td>{!! $p->description !!}</td>
                                        <td><img width="100px" src="{{ url('images/' . $p->image) }}"
                                                alt="{{ url('images/' . $p->image) }}"></td>
                                        <td class="text-right">
                                            <a class="btn btn-primary btn-sm" href="#">
                                                <i class="fas fa-folder"></i> View
                                            </a>
                                            <a class="btn btn-info btn-sm" href="{{ url('product/edit/' . $p->id) }}">
                                                <i class="fas fa-pencil-alt"></i> Edit
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="{{ url('product/delete/' . $p->id) }}">
                                                <i class="fas fa-trash"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                            </tfoot>
                        </table>
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
