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

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


</head>

<body>
    <div id="app" class='dashboard'>
        <div class="dashboard-nav">
            <header>
                <a href="#!" class="menu-toggle"> <i class="bi bi-list"></i> </a>
                <a href="#" class="brand-logo"> <i class="bi bi-archive"></i> <span>BRAND</span> </a>
            </header>
            <nav class="dashboard-nav-list">
                <a href="{{ url('/home') }}" class="dashboard-nav-item active"><i class="bi bi-house-door-fill"></i> HOME </a>
                <a href="#" class="dashboard-nav-item"><i class="bi bi-gear"></i> PORTAFOLIO </a>
                <a href="#" class="dashboard-nav-item"><i class="bi bi-gear"></i> COTIZACIONES </a>
                <a href="#" class="dashboard-nav-item"><i class="bi bi-gear"></i> USUARIOS </a>
                <a href="#" class="dashboard-nav-item"><i class="bi bi-gear"></i> REPORTES </a>

                <div class="nav-item-divider"></div>
                @guest
                <a href="{{ route('login') }}" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="bi bi-person-circle"></i> {{ __('Login') }} </a>

                @if (Route::has('register'))
                <a href="{{ route('login') }}" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i class="bi bi-person-circle"></i> {{ __('Register') }}</a>
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