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

    @include('partials.alerts')

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">Mipage</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
                <ul class="navbar-nav d-flex">
                    @if(Auth::user() && Auth::user()->role == 'admin')
                        <li class="nav-item dropdown dropstart">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLinkAdmin" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="me-2">Beheer</span> <i class="bi bi-gear h5"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkAdmin">
                            </ul>
                        </li>
                    @endif
                    <li class="nav-item dropdown dropstart">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="me-2">Mijn account</span> <i class="bi bi-person-circle h5"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            @guest
                                <a class="dropdown-item" href="{{ route('login') }}">Inloggen</a>
                                <a class="dropdown-item" href="{{ route('register') }}">Registreren</a>
                            @else
                                <a class="dropdown-item" href="{{ route('profile.index') }}">Mijn gegevens</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Uitloggen</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            @endguest
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
</body>
</html>
