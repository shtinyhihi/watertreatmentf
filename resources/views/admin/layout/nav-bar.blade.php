<style>
    .main-header
    {
        background: rgba(255, 255, 255, 0.1);
    }
</style>

<nav class="main-header navbar navbar-expand p-0">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ url('web_watertreatment/index') }}" class="nav-link">Trang Chủ</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ url('contact') }}" class="nav-link">Liên Hệ</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                <p>{{ __('Đăng Xuất') }}</p>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</nav>
