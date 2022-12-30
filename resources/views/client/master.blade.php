<!doctype html>
<html class="no-js" lang="">
<head>
    @include('client.share.css')
</head>
<body>
    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->
    @include('client.share.header')
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
