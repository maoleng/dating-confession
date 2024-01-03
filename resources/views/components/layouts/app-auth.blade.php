<!DOCTYPE html>
<html lang="en">
@include('components.layouts.head-tag')
<body>
{{ $slot }}
<link rel="stylesheet" href="{{ asset('assets/css/res.css') }}">
</body>
</html>
