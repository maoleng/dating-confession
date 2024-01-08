<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $title ?? '' }}</title>
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/screen.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/gh-members-styles.css') }}">
    <script defer src="{{ asset('assets/js/cards.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/cards.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/custom.css') }}">
    <style>
        .paid-tier-2 {
            --gradient-paid-start: #b53cff;
            --gradient-paid-end: #f952ff;
        }
        :root {--ghost-accent-color: #2821fc;}
    </style>
    @stack('page-style')
</head>
