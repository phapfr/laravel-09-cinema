<!doctype html>
<html lang="en">

<head>
    @include('AdminRocker.share.css')
</head>

<body>
    <div class="wrapper">
        <div class="header-wrapper">
            <header>
                @include('AdminRocker.share.header')
            </header>
            @include('AdminRocker.share.menu')
        </div>
        <div class="page-wrapper">
            <div class="page-content">
                @yield('noi_dung')
            </div>
        </div>
        <div class="overlay toggle-icon"></div>
        <footer class="page-footer">
            <p class="mb-0">Copyright © 2021. All right reserved.</p>
        </footer>
    </div>

    @include('AdminRocker.share.js')
    @yield('js')
</body>

</html>
