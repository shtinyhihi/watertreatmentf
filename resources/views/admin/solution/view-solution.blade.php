@extends('admin.layout.layout')
@section('title', 'Xem Giải Pháp')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"></div><!-- /.col -->

                @if (session('status'))
                    <div class="alert alert-danger">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('web_watertreatment/index') }}">Trang Chủ</a></li>
                        <li class="breadcrumb-item">Xem Chi Tiết Giải Pháp</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <style>
        .container {
            background-color: rgba(255,255,255,0.6);
            margin-top: 1em;
        }

        .name {
            padding-top: 2em;
        }
    </style>

    <section class="content">
        <div class="container">
            <h3 class="name">{{ $solutions->solution_name }}</h3>
            <hr><br>
            <h5>{!! $solutions->solution_description !!}</h5>
            <br><br><br><br>
            <p>Tag(s): {{ $solutions->solution_tag }}</p>
            <hr>
            <h5>ID: {{ $solutions->solution_id }}</h5>
            Tải file để xem thông tin chi tiết: <a
                href="{{ url('files/' . $solutions->solution_file) }}">{{ $solutions->solution_file }}</a>
            <br><br>
            Tạo vào lúc: {{ $solutions->created_at }}
            <br>
            <p class="update">Cập nhật vào lúc: {{ $solutions->updated_at }}</p>
        </div>
    </section>
@endsection
