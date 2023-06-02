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
                        <li class="breadcrumb-item"><a href="{{ url('') }}">Trang Chủ</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('admin/news/index') }}">Danh Sách Tin Tức</a></li>
                        <li class="breadcrumb-item active">Xem Tin Tức</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <h3>{{$news->news_title}}</h3>
        <hr><br>
        <img src="{{ url('images/' .$news->news_image) }}" alt="">
        <h5>{!! $news->news_News !!}</h5>
        <br><br><br><br>
        <p>Tag(s): {{$news->news_tag}}</p>
        <hr>
        <br><br>
        Tạo vào lúc: {{ $news->created_at }}
        <br>
        Cập nhật vào lúc: {{ $news->updated_at }}
    </section>
@endsection
