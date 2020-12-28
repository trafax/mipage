<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @section('seo')
        <title>{{ config('app.name', 'Laravel') }}</title>
    @show

    <link href="{{ env('ASSET_URL') . mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ env('ASSET_URL') . mix('js/app.js') }}" type="text/javascript"></script>
</head>
<body>

    @if (Auth::user() && Auth::user()->isAdmin())
        <div id="loader"><p class="position-absolute top-50 start-50 translate-middle">Een ogenblik geduld a.u.b.</p></div>
        @include('partials.admin_bar')
        <div id="modal"></div>
    @endif

    @include('partials.navigation')
    @include('partials.alerts')
    @include('partials.modal')

    @yield('content')
</body>
</html>
