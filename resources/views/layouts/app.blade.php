<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('', 'BDE Website') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
<div id="app">
    @auth
        <ul id="dropdown" class="dropdown-content">
            <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    Se déconnecter
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    @endauth
    <nav>
        <div class="nav-wrapper">
            <a href="{{ url('/acceuil_connect___tudiant.html') }}" class="brand-logo">&nbsp{{ config('', 'BDE Website') }}</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            @guest
                <ul class="right hide-on-med-and-down">
                    <li><a href="{{ route('login') }}">Connexion</a></li>
                    <li><a href="{{ route('register') }}">Inscription</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="{{ route('login') }}">Connexion</a></li>
                    <li><a href="{{ route('register') }}">Inscription</a></li>
                </ul>
                @else
                <ul class="right hide-on-med-and-down">
                    <li><a class="button" href="http://laravel5.test/d_connexion.html" data-activates="dropdown">{{ Auth::user()->name }} - Déconnexion</a></li>
                </ul>
            @endguest
        </div>
    </nav>
    @yield('content')
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script>
    $(".button-collapse").sideNav()
    $(".dropdown-button").dropdown()
</script>
</body>
</html>