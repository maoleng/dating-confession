<!DOCTYPE html>
<html lang="en">
@include('components.layouts.head-tag')
<body>
{{ $slot }}
@stack('page-script')
<link rel="stylesheet" href="{{ asset('assets/css/res.css') }}">
</body>
</html>
