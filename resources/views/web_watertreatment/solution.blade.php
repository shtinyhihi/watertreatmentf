<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Giải Pháp - WaterTreatment</title>
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


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container ctn">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Các Giải Pháp</h6>
                <h1 class="display-5 text-uppercase mb-0">Ứng Dụng Vào Đời Sống</h1>
            </div>
            <style>
                .card {
                    --blur: 16px;
                    --size: clamp(300px, 50vmin, 600px);
                    width: var(--size);
                    aspect-ratio: 4 / 3;
                    position: relative;
                    border-radius: 2rem;
                    overflow: hidden;
                    color: #000;
                    transform: translateZ(0);
                }

                .card__img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    transform: scale(calc(1 + (var(--hover, 0) * 0.1)));
                    transition: transform 0.2s;
                }

                .card__footer {
                    padding: 0 1.5rem;
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    width: 100%;
                    background: red;
                    display: grid;
                    grid-template-row: auto auto;
                    gap: 0.5ch;
                    background: hsl(0 0% 100% / 0.5);
                    backdrop-filter: blur(var(--blur));
                    height: 30%;
                    align-content: center;
                }

                .card__action {
                    position: absolute;
                    aspect-ratio: 1;
                    width: calc(var(--size) * 0.15);
                    bottom: 30%;
                    right: 1.5rem;
                    transform: translateY(50%) translateY(calc((var(--size) * 0.4))) translateY(calc(var(--hover, 0) * (var(--size) * -0.4)));
                    background: purple;
                    display: grid;
                    place-items: center;
                    border-radius: 0.5rem;
                    background: hsl(0 0% 100% / 0.5);
                    /*   backdrop-filter: blur(calc(var(--blur) * 0.5)); */
                    transition: transform 0.2s;
                }

                .card__action svg {
                    aspect-ratio: 1;
                    width: 50%;
                }

                .card__footer span:nth-of-type(1) {
                    font-size: calc(var(--size) * 0.065);
                }

                .card__footer span:nth-of-type(2) {
                    font-size: calc(var(--size) * 0.035);
                }

                .card:is(:hover, :focus-visible) {
                    --hover: 1;
                }

                .ctn {
                    display: grid;
                    grid-template-columns: repeat(3, 1fr);
                }
            </style>
            @foreach ($categ_slts as $c)
                <div class="container ctn">
                    <div class="row">
                        <div class="col col-sm-12 col-md-6 col-lg-4 col-xl-2">
                            <a href="{{ url('web_watertreatment/solution-detail/solution-id=' . $c->solution_id) }}"
                                class="card col col-sm-12 col-md-6 col-lg-4 col-xl-2">
                                <img src="{{ url('images/' . $c->solution_image) }}" class="card__img">
                                <span class="card__footer">
                                    <span>{{ $c->solution_name }}</span>
                                </span>
                                <span class="card__action">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16" style="color: black">
                                        <path
                                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                        <path
                                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- <div class="owl-carousel team-carousel position-relative" style="padding-right: 25px;">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img width="100px" src="{{ url('images/' . $c->image) }}"
                            alt="{{ url('images/' . $c->image) }}">
                            <div class="team-overlay">
                                <div class="d-flex align-items-center justify-content-start">
                                    <a class="btn btn-light btn-square mx-1" href="#view"><i
                                            class="bi bi-three-dots"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="text-uppercase">{{ $c->name }}</h5>
                        </div>
                    </div>
                </div> --}}
            @endforeach
        </div>
    </div>
    <!-- Team End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-light mt-5 py-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Thông Tin Liên Lạc</h5>
                    <p class="mb-4">Qúy Khách Hàng Có Thể Tương Tác Với Chúng Tôi Thông Qua Các Thông Tin:</p>
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
                        <a class="text-body mb-2" href="{{ url('web_watertreatment/solution') }}"><i
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
