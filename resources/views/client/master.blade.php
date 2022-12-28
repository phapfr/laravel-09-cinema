<!doctype html>
<html class="no-js" lang="">

<head>
    @include('client.share.css')
</head>
<body>
    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <img src="/assets_client/img/preloader.svg" alt="">
            </div>
        </div>
    </div>
    <!-- preloader-end -->
    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->
    @include('client.share.header')


    <!-- main-area -->
    <main>

    @include('client.share.slide')

            @yield('content')


    </main>
    <!-- main-area-end -->
    @include('client.share.footer')
    <!-- JS here -->
    @include('client.share.js')
    @yield('js')
</body>

</html>
