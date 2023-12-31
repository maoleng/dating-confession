<!DOCTYPE html>
<html lang="en">
@include('theme.head-tag')
<body class="home-template global-cta-violet">
<div class="global-wrap">
    <div class="section-content-wrap">
        @include('theme.header')
        @yield('content')
    </div>
    @include('theme.footer')
</div>
@include('theme.notification')
@include('theme.search')
<script src="{{ asset('/assets/js/index.js') }}"></script>
<script src="{{ asset('/assets/js/global.js') }}"></script>
<script src="{{ asset('/assets/js/ityped.js') }}"></script>
<link rel="stylesheet" href="{{ asset('assets/css/res.css') }}">
</body>
</html>
