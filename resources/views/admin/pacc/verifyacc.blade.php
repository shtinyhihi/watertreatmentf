@extends('admin.layout.layout')
@section('title', 'Duyệt Tài Khoản Admin')
@section('content')
    <style>
        table {
            color: aliceblue;
        }

        table td,
        table th {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
        }

        .mask-custom {
            background: rgba(88, 83, 83, 0.2);
            border-radius: 2em;
            backdrop-filter: blur(25px);
            border: 2px solid rgba(255, 255, 255, 0.05);
            background-clip: padding-box;
            box-shadow: 10px 10px 10px rgba(46, 54, 68, 0.03);
        }

        .bg-image {
            background-repeat: no-repeat;
        }

        .pendacctablelabel {
            color: aliceblue;
            font-size: 2em;
        }
    </style>
    <!-- Content Header (Page header) -->
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
                        <li class="breadcrumb-item">Duyệt Tài Khoản</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="bg-image">
        <div class="mask d-flex align-items-center">
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card mask-custom">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="pendacctable" class="table table-borderless text-white">
                                        <label for="" class="pendacctablelabel">Danh Sách Tài Khoản Đăng
                                            Kí QTV</label>
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Tên Tài Khoản</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Vai Trò</th>
                                                <th scope="col">Mật Khẩu Tài Khoản</th>
                                                <th scope="col">Duyệt</th>
                                                <th scope="col">Từ Chối</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pacc as $p)
                                                <tr>
                                                    <form action="{{ url('admin/pacc/createUser') }}" method="POST">
                                                        @csrf
                                                        <td>{{ $p->id }}</td>

                                                        <td><input type="text" name="name"
                                                                value="{{ $p->admin_name }}" readonly></td>
                                                        <td><input type="email" name="email"
                                                                value="{{ $p->admin_email }}" readonly></td>
                                                        <td><input type="text" name="role" value="{{ $p->role }}"
                                                                readonly></td>
                                                        <td><input type="password" placeholder="MK Tài Khoản"
                                                                name="password" autocomplete="off" autofocus required>
                                                        </td>
                                                        <td><button type="submit" class="btn btn-success">✔️</button>
                                                        </td>
                                                    </form>
                                                    <form action="{{ url('admin/pacc/deleteAcc/'.$p->admin_email) }}">
                                                        <td><button type="submit" class="btn btn-danger">❌</button>
                                                        </td>
                                                    </form>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(() => {
                $('#pendacctable').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ],
                    "bInfo": false,
                    "scrollX": false,
                });
            });
        </script>
    </div>

    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard3.js"></script>
    {{-- ckeditor --}}
    <script src="public/ckeditor/ckeditor.js"></script>
@endsection
