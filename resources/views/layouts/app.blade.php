<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</head>
<body>

    @if (Auth::user() && Auth::user()->isAdmin())
        @include('partials.admin_bar')
        <div id="modal"></div>
    @endif

    @include('partials.navigation')
    @include('partials.alerts')

    @yield('content')
</body>
</html>
