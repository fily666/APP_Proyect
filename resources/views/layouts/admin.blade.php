<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


    <!-- full calender  --- modulo citas -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales-all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@5.10.1/main.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@5.10.1/main.css">


</head>

<body>
    <div id="app" class='dashboard'>
        <div class="dashboard-nav">
            <header>
                <a href="#!" class="menu-toggle"> <i class="bi bi-list"></i> </a>
                <a href="#" class="brand-logo"> <i class="bi bi-archive"></i> <span>BRAND</span> </a>
            </header>
            <nav class="dashboard-nav-list">

                @if(Auth::check())
                @if(Auth::user()->role_id && Auth::user()->role_id == 1)
                <a href="{{ url('/home') }}" class="dashboard-nav-item"><i class="bi bi-house-door-fill"></i> HOME </a>
                <div class="nav-item-divider"></div>
                <a href="{{ route('portafolios.index') }}" class="dashboard-nav-item"><i class="bi bi-gear"></i> PORTAFOLIO </a>
                <a href="{{ route('expertos.index') }}" class="dashboard-nav-item"><i class="bi bi-gear"></i> PROFESIONALES </a>
                <a href="#" class="dashboard-nav-item"><i class="bi bi-gear"></i> COTIZACIONES </a>
                <a href="{{ route('citas.index') }}" class="dashboard-nav-item"><i class="bi bi-gear"></i> RESERVACIONES </a>
                <a href="{{ route('servicios.index') }}" class="dashboard-nav-item"><i class="bi bi-gear"></i> SERVICIOS </a>
                <a href="{{ route('usuarios.index') }}" class="dashboard-nav-item"><i class="bi bi-gear"></i> USUARIOS </a>
                <a href="{{ route('reportes.index') }}" class="dashboard-nav-item"><i class="bi bi-gear"></i> REPORTES </a>
                @elseif(Auth::user()->role_id && Auth::user()->role_id == 2)
                <a href="{{ url('/home') }}" class="dashboard-nav-item"><i class="bi bi-house-door-fill"></i> HOME </a>
                <div class="nav-item-divider"></div>
                <a href="#" class="dashboard-nav-item"><i class="bi bi-gear"></i> COTIZACIONES </a>
                <a href="{{ route('citas.index') }}" class="dashboard-nav-item"><i class="bi bi-gear"></i> RESERVACIONES </a>
                <a href="{{ route('reportes.index') }}" class="dashboard-nav-item"><i class="bi bi-gear"></i> REPORTES </a>
                <br> <br> <br> <br> <br>
                @endif
                @endif

                <div class="nav-item-divider"></div>
                @guest
                <a href="{{ route('login') }}" class="dashboard-nav-item"><i class="bi bi-person-circle"></i> {{ __('Login') }} </a>

                @if (Route::has('register'))
                <a href="{{ route('login') }}" class="dashboard-nav-item"><i class="bi bi-person-circle"></i> {{ __('Register') }}</a>
                @endif

                @else
                <div class='dashboard-nav-dropdown'>
                    <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="bi bi-person-circle"></i> {{ Auth::user()->name }} </a>
                    <div class='dashboard-nav-dropdown-menu'>
                        <a href="{{ route('logout') }}" class="dashboard-nav-dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        @endguest
                    </div>
                </div>
                <div class="nav-item-divider"></div>
            </nav>
        </div>
        <div class='dashboard-app'>
            <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="bi bi-list"></i></a></header>
            <div class='dashboard-content'>

                @yield('content')

            </div>
        </div>
    </div>
</body>

</html>