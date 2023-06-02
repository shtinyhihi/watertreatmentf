@section('title', 'Danh Sách Giải Pháp')

<?php
if (Auth::guest()) {
    echo '<h3>⚠️Phát hiện cố gắng truy cập bằng phương thức Guest, nhấn vào link dưới để trở về trang login⚠️</h3>';
    echo '<a href="login">Quay lại</a>';
} else if (Auth::user()->role == 'Admin') {
?>
@extends('admin.layout.layout')
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
                        <li class="breadcrumb-item active">Danh Sách Giải Pháp</li>
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
                        <h3 class="card-title">Danh Sách Giải Pháp</h3>
                    </div>
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
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="solution" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên</th>
                                    <th>Hình Ảnh</th>
                                    <th>Tác Vụ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($solutions as $s)
                                    <tr>
                                        <td>{{ $s->solution_id }}</td>
                                        <td>{{ $s->solution_name }}</td>
                                        <td><img width="100px" src="{{ url('images/' . $s->solution_image) }}"
                                                alt="{{ url('images/' . $s->solution_image) }}"></td>
                                        <td class="text-right">
                                            <a class="btn btn-primary btn-sm"
                                                href="{{ url('admin/solution/create') }}">
                                                <i class="fas fa-plus"></i> Tạo
                                            </a>
                                            <a class="btn btn-warning btn-sm"
                                                href="{{ url('admin/solution/view-solution/id=' . $s->solution_id) }}">
                                                <i class="fas fa-search"></i> Chi tiết
                                            </a>
                                            <a class="btn btn-secondary btn-sm"
                                                href="{{ url('admin/solution/edit/id=' . $s->solution_id) }}">
                                                <i class="fas fa-pencil-alt"></i> Chỉnh sửa
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

@section('script-content')
    <script>
        $(document).ready(function() {
            $("#solution").DataTables();
        });
    </script>
@endsection
<?php
} else {
?>
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
                    <li class="breadcrumb-item active">Danh Sách Giải Pháp</a>
                    </li>
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
                    <h3 class="card-title">Danh Sách Giải Pháp</h3>
                </div>
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
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="solution" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Hình Ảnh</th>
                                <th>Tác Vụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($solutions as $s)
                                <tr>
                                    <td>{{ $s->solution_id }}</td>
                                    <td>{{ $s->solution_name }}</td>
                                    <td><img width="100px" src="{{ url('images/' . $s->solution_image) }}"
                                            alt="{{ url('images/' . $s->solution_image) }}"></td>
                                    <td class="text-right">
                                        <a class="btn btn-primary btn-sm"
                                            href="{{ url('admin/solution/view-solution/id=' . $s->solution_id) }}">
                                            <i class="fas fa-search"></i> Chi tiết
                                        </a>
                                        <a class="btn btn-secondary btn-sm"
                                            href="{{ url('admin/solution/edit/id=' . $s->solution_id) }}">
                                            <i class="fas fa-pencil-alt"></i> Chỉnh sửa
                                        </a>
                                        <a class="btn btn-danger btn-sm"
                                            href="{{ url('admin/solution/delete/id=' . $s->solution_id) }}">
                                            <i class="fas fa-trash"></i> Xoá
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

@section('script-content')
<script>
    $(document).ready(function() {
        $("#solution").DataTables();
    });
</script>
@endsection
<?php
    }
?>