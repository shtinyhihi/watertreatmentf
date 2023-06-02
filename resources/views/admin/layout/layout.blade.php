<?php
    if(Auth::guest())
    {
        echo '<h3>⚠️Phát hiện cố gắng truy cập bằng phương thức Guest, nhấn vào link dưới để trở về trang login⚠️</h3>';
        echo '<a href="login">Quay lại</a>';
    }
    else {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QTV - {{ Auth::user()->name }}</title>


    <base href="{{ asset('/') }}" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- layout -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
</head>

<style>
    .content-wrapper {
        background: url('https://th.bing.com/th/id/R.fa83b43e230511f0c5ed694f6ff52e3c?rik=QyCGnikAfWFx6A&riu=http%3a%2f%2fwww.pixelstalk.net%2fwp-content%2fuploads%2f2016%2f05%2fPhoto-sky-wallpapers-desktop-desgins.jpg&ehk=muUqLVJS1CYeg0WwHi2FJ0UWVQzt76kjoP2TccDyEg4%3d&risl=&pid=ImgRaw&r=0');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        @include('admin.layout.nav-bar')

        <!-- /.navbar -->
        @include ('admin.layout.sidebar')
        <!-- Main Sidebar Container -->


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @yield('content')
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        @include ('admin.layout.footer')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    
    <!-- Bootstrap -->
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

    <!--layout-->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    @yield('script-content')
</body>

</html>
<?php
    }
?>
