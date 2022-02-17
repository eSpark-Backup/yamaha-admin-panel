<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>{{ env('APP_NAME') }}</title>

    <meta name="description" content="{{ env('APP_NAME') }}">
    <meta name="author" content="{{ env('APP_NAME') }}">
    <meta name="robots" content="noindex, nofollow">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Icons --}}
    <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
    <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">

    {{-- Fonts and Styles --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ mix('/css/app.css') }}">

    {{-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: --}}
    <link rel="stylesheet" id="css-theme" href="{{ mix('/css/themes/amethyst.css') }}">

</head>

<body>

    @inertia

    {{-- Laravel Application --}}
    <script src="{{ mix('/js/app.js') }}"></script>
    
    {{-- OneUI Core JS --}}
    <script src="{{ mix('js/ui.app.js') }}"></script>
</body>

</html>
