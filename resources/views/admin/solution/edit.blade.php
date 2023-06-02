@extends('admin.layout.layout')
@section('title', 'Giải Pháp')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"></div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('web_watertreatment/index') }}">Trang Chủ</a></li>
                        <li class="breadcrumb-item active">Chỉnh Sửa Giải Pháp</li>
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
        <div>
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
                                    <form action='{{ url('admin/solution/postEdit') }}' enctype="multipart/form-data"
                                        method="post">
                                        @csrf
                                        <!-- Text input -->
                                        <div class="form-group mb-4">
                                            <input name="solution_id" type="text" class="form-control"
                                                placeholder="Từ 4-6 kí tự" minlength="4" maxlength="6" required
                                                value="{{ $solutions->solution_id }}" readonly />
                                            <label class="form-label">ID</label>
                                        </div>

                                        <!-- Text input -->
                                        <div class="form-group mb-4">
                                            <input name="solution_name" type="text" class="form-control" required
                                                value="{{ $solutions->solution_name }}" />
                                            <label class="form-label">Tên Giải Pháp</label>
                                        </div>

                                        <!-- Description input -->
                                        <div class="form-group mb-4">
                                            <textarea name="solution_description" id="edit_editor" class="form-control" cols="30" rows="10" required
                                                value="{!! $solutions->solution_description !!}">{!! $solutions->solution_description !!}</textarea>
                                            <label class="form-label">Nội Dung</label>
                                        </div>

                                        <script src="https://cdn.ckeditor.com/4.16.0/standard-all/ckeditor.js"></script>
                                        <script>
                                            CKEDITOR.replace('edit_editor');
                                        </script>

                                        <!-- Image input -->
                                        <div class="form-group mb-4">
                                            <img src="{{ url('images/' . $solutions->solution_image) }}" width="100em"
                                                height="100em" alt="">
                                            <input name="solution_image" type="file" class="form-control" required
                                                value="{{ url('images/' . $solutions->solution_image) }}" />
                                            <label class="form-label">Hình Ảnh</label>
                                        </div>

                                        <!-- File input -->
                                        <div class="form-group mb-4">
                                            <a
                                                href="{{ url('files/' . $solutions->solution_file) }}">{{ $solutions->solution_file }}</a>
                                            <input name="solution_file" type="file" class="form-control"
                                                placeholder="Chấp nhận file dạng .pdf, .docx" required
                                                value="{{ url('files/' . $solutions->solution_file) }}" />
                                            <label class="form-label">File</label>
                                        </div>

                                        <!-- Tag -->
                                        <div class="form-group mb-4">
                                            <input name="solution_tag" type="text" class="form-control"
                                                value="{{ $solutions->solution_tag }}" required />
                                            <label class="form-label">Tag(s)</label>
                                        </div>

                                        <!-- Submit button -->
                                        <input type="submit" value="Chỉnh Sửa" class="btn btn-info btn-block">
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
