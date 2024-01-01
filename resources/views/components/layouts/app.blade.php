<!DOCTYPE html>
<html lang="en">
@include('components.layouts.head-tag')
<body class="home-template global-cta-violet">
<div class="global-wrap">
    <div class="section-content-wrap">
        @include('components.layouts.header')
        {{ $slot }}
    </div>
    @include('components.layouts.footer')
</div>
@include('components.layouts.notification')
@include('components.layouts.search')
<script src="{{ asset('assets/js/index.js') }}"></script>
<script src="{{ asset('assets/js/global.js') }}"></script>
<script src="{{ asset('assets/js/ityped.js') }}"></script>
<link rel="stylesheet" href="{{ asset('assets/css/res.css') }}">
</body>
</html>