<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{$sltdetail->solution_name}} - WaterTreatment</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <base href="{{ asset('/') }}">

    <!-- Favicon -->
    <link href="watertreatment_public/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="watertreatment_public/lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="watertreatment_public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="watertreatment_public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="watertreatment_public/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid border-bottom d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Địa chỉ văn phòng</h6>
                        <span>123 Street, New York, USA</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center border-start border-end py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Email công ty</h6>
                        <span>info@example.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Liên hệ với chúng tôi</h6>
                        <span>+012 345 6789</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="{{ url('web_watertreatment/index') }}" class="navbar-brand ms-lg-5">
            <h1 class="m-0 text-uppercase text-dark"><i class="bi bi-shop fs-1 text-primary me-3"></i
                    style="font-size: 10px;">Water Treatment</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ url('web_watertreatment/index') }}" class="nav-item nav-link active">Trang Chủ</a>
                <a href="{{ url('web_watertreatment/product') }}" class="nav-item nav-link">Sản Phẩm</a>
                <a href="{{ url('web_watertreatment/service') }}" class="nav-item nav-link">Dịch Vụ</a>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">KHÁC</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ url('web_watertreatment/tool') }}" class="nav-item nav-link">Công Cụ</a>
                        <a href="{{ url('web_watertreatment/solution-category') }}" class="nav-item nav-link">Giải
                            Pháp</a>
                        <a href="{{ url('web_watertreatment/news') }}" class="nav-item nav-link">Tin Tức</a>
                    </div>
                </div>
                <a href="{{ url('web_watertreatment/contact') }}"
                    class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5">Liên Hệ <i
                        class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    <style>
        .slt_image{
            width: 100%;
            height: 10%;
        }
        .slt_id {
            color: crimson;
        }
    </style>

    <div class="container-fluid py-5">
        <div class="container">
            <h3><strong class="slt_name">{{$sltdetail->solution_name}}</strong></h3>
            <hr>
            <br>
            {!! $sltdetail->solution_description !!}
            <br><br><br><br><br><br><br>
            Tags:
            @foreach (explode(',', $sltdetail->solution_tag) as $tag)
                <a href="{{ url('web_watertreatment/solution/solution-tag=' . $tag) }}" style="margin-left: 1em;">{{ $tag }}</a>
            @endforeach
            <hr>
            <p class="slt_id">ID: {{ $sltdetail->solution_id }}</p>
            <p>Tải file đầy đủ thông tin: <a href=" {{ url('files/'.$sltdetail->solution_file) }} ">{{ $sltdetail->solution_file }}</a></p>
            <br>
            <p>Thời gian tạo: {{ $sltdetail->created_at }}</p>
            <p>Thời gian cập nhật: {{ $sltdetail->updated_at }}</p>
        </div>
    </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-light mt-5 py-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Thông Tin Liên Lạc</h5>
                    <p class="mb-4">Quý Khách Hàng Có Thể Tương Tác Với Chúng Tôi Thông Qua Các Thông Tin:</p>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>info@example.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+012 345 67890</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Các Liên Kết</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-body mb-2" href="{{ url('web_watertreatment/index') }}"><i
                                class="bi bi-arrow-right text-primary me-2"></i>Trang Chủ</a>
                        <a class="text-body mb-2" href="{{ url('web_watertreatment/product') }}"><i
                                class="bi bi-arrow-right text-primary me-2"></i>Sản Phẩm</a>
                        <a class="text-body mb-2" href="{{ url('web_watertreatment/service') }}"><i
                                class="bi bi-arrow-right text-primary me-2"></i>Dịch Vụ</a>
                        <a class="text-body mb-2" href="{{ url('web_watertreatment/tool') }}"><i
                                class="bi bi-arrow-right text-primary me-2"></i>Công Cụ</a>
                        <a class="text-body mb-2" href="{{ url('web_watertreatment/solution-category') }}"><i
                                class="bi bi-arrow-right text-primary me-2"></i>Giải Pháp</a>
                        <a class="text-body" href="{{ url('web_watertreatment/news') }}"><i
                                class="bi bi-arrow-right text-primary me-2"></i>Tin Tức</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h6 class="text-uppercase mt-4 mb-3">Theo Dõi Chúng Tôi</h6>
                    <div class="d-flex">
                        <a class="btn btn-outline-primary btn-square me-2" href="#"><i
                                class="bi bi-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square me-2" href="#"><i
                                class="bi bi-facebook"></i></a>
                        <a class="btn btn-outline-primary btn-square me-2" href="#"><i
                                class="bi bi-linkedin"></i></a>
                        <a class="btn btn-outline-primary btn-square" href="#"><i
                                class="bi bi-instagram"></i></a>
                    </div>
                </div>
                <div class="col-12 text-center text-body">
                    <a class="text-body" href="">Điều Khoản và Điều Kiện</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">Chính Sách Bảo Mật</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">Hỗ Trợ Khách Hàng</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">Giao Dịch</a>
                    <span class="mx-1">|</span>
                    <a class="text-body" href="">Trợ Giúp</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white-50 py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white"
                            href="{{ url('web_watertreatment/index') }}">WaterTreatment</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0"><a class="text-white" href="{{ url('login') }}">Đăng Nhập Cho Quản Trị
                            Viên</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="watertreatment_public/lib/easing/easing.min.js"></script>
    <script src="watertreatment_public/lib/waypoints/waypoints.min.js"></script>
    <script src="watertreatment_public/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="watertreatment_public/js/main.js"></script>
</body>

</html>
