<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
<?php
if (Auth::guest()) {
    echo '<h3>⚠️Phát hiện cố gắng truy cập bằng phương thức Guest, nhấn vào link dưới để trở về trang login⚠️</h3>';
    echo '<a href="login">Quay lại</a>';
} else if (Auth::user()->role == 'Admin') {
?>
<style>
    * {
        font-family: 'Fira Sans', sans-serif;
    }

    .box-link {
        background: rgb(241, 211, 255);
        background: linear-gradient(270deg, rgba(241, 211, 255, 1) 0%, rgba(86, 244, 208, 1) 100%);
    }

    .main-sidebar {
        background: rgb(72, 185, 209);
        background: linear-gradient(270deg, rgba(72, 185, 209, 1) 0%, rgba(105, 107, 242, 1) 100%);
    }

    .solution-text {
        color: rgb(33, 30, 30);
    }

    .brand-text {
        color: aliceblue;
        font-weight: 200;
    }

    #admin_id {
        background: linear-gradient(34deg, rgba(2,0,36,1) 0%, rgba(255,0,0,1) 66%);
        -webkit-text-fill-color: transparent;
        -webkit-background-clip: text;

        font-weight: bold;
    }
</style>
<aside class="main-sidebar elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('admin') }}" class="brand-link">
        <img src="https://th.bing.com/th/id/R.a5091627b7d101bb34dc6916f8842981?rik=tx4eNhHQKyQLQw&pid=ImgRaw&r=0"
            alt="WaterTreatment" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">WATER TREATMENT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://th.bing.com/th/id/R.8e2c571ff125b3531705198a15d3103c?rik=gzhbzBpXBa%2bxMA&riu=http%3a%2f%2fpluspng.com%2fimg-png%2fuser-png-icon-big-image-png-2240.png&ehk=VeWsrun%2fvDy5QDv2Z6Xm8XnIMXyeaz2fhR3AgxlvxAc%3d&risl=&pid=ImgRaw&r=0"
                    class="img-circle elevation-2" alt="User">
            </div>
            <div class="info nav collapse navbar-collapse dropdown">
                <ul class="navbar-nav ms-auto">
                    <p>Xin chào, <span id="admin_id" onload="changeColor()">{{ Auth::user()->name }}</span></p>
                    </li>
                </ul>

            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="{{ url('admin/solution/index') }}" class="nav-link box-link active">
                        <i class="nav-icon fas fa-wrench"></i>
                        <p class="function-title">Giải Pháp</p>
                    </a>
                </li>
                <br>
                <li class="nav-item menu-open">
                    <a href="{{ url('admin/tool') }}" class="nav-link box-link active">
                        <i class="nav-icon fas fa-calculator"></i>
                        <p class="function-title">
                            Công Cụ
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>

<!-- màu tên admin -->
<script>
    function changeColor() {
        location.reload();
        let randomColor = Math.floor(Math.random() * 16777215).toString(16);
        document.getElementById("admin_id").style.color = "#" + randomColor;
    }
</script>
<?php
} else {
?>
<style>
    * {
        font-family: 'Fira Sans', sans-serif;
    }

    .box-link {
        background: rgb(78, 222, 211);
        background: linear-gradient(270deg, rgba(78, 222, 211, 1) 0%, rgba(253, 187, 45, 1) 100%);
    }

    .main-sidebar {
        background: rgb(2, 0, 36);
        background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(28, 196, 150, 1) 0%, rgba(0, 212, 255, 1) 100%);
    }

    .solution-text {
        color: rgb(33, 30, 30);
    }

    .brand-text {
        color: aliceblue;
        font-weight: 200;
    }

    #admin_id {
        background: linear-gradient(to right, #ff416c, #ff4b2b, #6B8E23);
        -webkit-text-fill-color: transparent;
        -webkit-background-clip: text;
        font-weight: bold;
    }
</style>
<aside class="main-sidebar elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('admin') }}" class="brand-link">
        <img src="https://th.bing.com/th/id/R.a5091627b7d101bb34dc6916f8842981?rik=tx4eNhHQKyQLQw&pid=ImgRaw&r=0"
            alt="WaterTreatment" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">WATER TREATMENT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://th.bing.com/th/id/R.8e2c571ff125b3531705198a15d3103c?rik=gzhbzBpXBa%2bxMA&riu=http%3a%2f%2fpluspng.com%2fimg-png%2fuser-png-icon-big-image-png-2240.png&ehk=VeWsrun%2fvDy5QDv2Z6Xm8XnIMXyeaz2fhR3AgxlvxAc%3d&risl=&pid=ImgRaw&r=0"
                    class="img-circle elevation-2" alt="User">
            </div>
            <div class="info nav collapse navbar-collapse dropdown">
                <ul class="navbar-nav ms-auto">
                    <p>Xin chào, <span id="admin_id" onload="changeColor()">{{ Auth::user()->name }}</span></p>
                    </li>
                </ul>

            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="{{ url('admin/solution/index') }}" class="nav-link box-link active">
                        <i class="nav-icon fas fa-wrench"></i>
                        <p class="function-title">Giải Pháp</p>
                    </a>
                </li>
                <br>
                <li class="nav-item menu-open">
                    <a href="{{ url('admin/tool') }}" class="nav-link box-link active">
                        <i class="nav-icon fas fa-calculator"></i>
                        <p class="function-title">
                            Công Cụ
                        </p>
                    </a>
                </li>
                <br>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link box-link active">
                        <i class="nav-icon fas fa-user-plus"></i>
                        <p class="function-title">
                            Tài khoản
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href='#' class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="solution-text">Danh Sách Tài Khoản (chưa làm)</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href='{{ url('admin/pacc/verifyacc') }}' class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="solution-text">Duyệt Tài Khoản</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <!--ADMIN NEWS-->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p class="news-text">
                            Tin Tức
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href='{{ url('admin/news/index') }}' class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="news-text">Danh Sách Tin Tức</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href='{{ url('admin/news/create') }}' class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p class="news-text">Tạo Tin Tức</p>
                            </a>
                        </li>

                    </ul>
                </li>
        </nav>
    </div>
</aside>

<!-- màu tên admin -->
<script>
    function changeColor() {
        location.reload();
        let randomColor = Math.floor(Math.random() * 16777215).toString(16);
        document.getElementById("admin_id").style.color = "#" + randomColor;
    }
</script>
<?php
    }
?>
