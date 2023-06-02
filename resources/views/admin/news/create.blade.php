@extends('admin.layout.layout')
@section('title', 'Tin Tức')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"></div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                        <li class="breadcrumb-item active">Tạo Tin Tức</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- css -->
    <style>
        html,
        body,
        .content {
            height: 100%;
        }
    </style>
    <!-- Main content -->

    <section class="content">
        <div class="h-100"
            style="
                background-image: url(https://media.istockphoto.com/vectors/abstract-vector-background-with-orange-and-yellow-lines-vector-id162313415?k=6&m=162313415&s=170667a&w=0&h=Cq76pqY6fsTMeDdIJleX9bdull_8DMPKNOtMADR3cdk=);
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
              ">
            <div class="mask d-flex align-items-center h-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-10">
                            <div class="card" style="border-radius: 1rem;">
                                @if (session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <div class="card-body p-5">
                                    <form action='{{ url('admin/news/postCreate') }}' enctype="multipart/form-data"
                                        method="post">
                                        @csrf
                                        <!-- Text input -->
                                        <div class="form-group mb-4">
                                            <input name="news_id" type="text" class="form-control"
                                                placeholder="Từ 4-6 kí tự" minlength="4" maxlength="6" required />
                                            <label class="form-label">ID</label>
                                        </div>

                                        <!-- Text input -->
                                        <div class="form-group mb-4">
                                            <input name="news_title" type="text" class="form-control" required />
                                            <label class="form-label">Tên Tin Tức</label>
                                        </div>

                                        <!-- Description input -->
                                        <div class="form-group mb-4">
                                            <textarea name="news_News" id="create_editor" cols="30" rows="10" required></textarea>
                                            <label class="form-label">Nội Dung</label>
                                        </div>

                                        <script src="https://cdn.ckeditor.com/4.16.0/standard-all/ckeditor.js"></script>
                                        <script>
                                            CKEDITOR.replace('create_editor');
                                        </script>
                                        <!-- Image input -->
                                        <div class="form-group mb-4">
                                            <input name="news_image" type="file" class="form-control" required />
                                            <label class="form-label">Hình Ảnh</label>
                                        </div>
                                        <!-- Tag -->
                                        <div class="form-group mb-4">
                                            <input name="news_tag" type="text" class="form-control" value=""
                                                required />
                                            <label class="form-label">Tag(s)</label>
                                        </div>
                                        <!-- Submit button -->
                                        <input type="submit" value="Tạo" class="btn btn-primary btn-block">
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- /.content -->
@endsection
