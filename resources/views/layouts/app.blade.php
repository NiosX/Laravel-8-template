<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts
    <script src="{{ asset('js/app.js') }}" defer></script> -->
    <script src="{{ asset('js/jquery.js') }}" ></script>
    <script src="{{ asset('js/popper.js') }}" ></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" ></script>
    <script src="{{ asset('js/jquery.sticky.js') }}" defer></script>
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet" media="all">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.css') }}">

    <!-- Styles
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
    <div id="" class="">
        <nav class="navbar navbar-expand-md navbar-dark bg-primary">
            <div class="container-fluid text-center">
                <a class="navbar-brand" href="{{ url('/') }}">
                    App
                </a>
                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('mantenimiento.index') }}">Mantenimientos</a>
                        </li>
                    </ul>
                    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <span class="fa fa-user mr-1"></span> Mi Perfil
                                </a>
        
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                        ({{ Auth::user()->name }}) Cerrar Sesión
                                    </a>
        
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container my-3">
            @if ($errors->any())
                @foreach($errors->all() as $error) 
                    <div class="alert alert-dismissible alert-danger fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="alert-heading">Hubo un error!</h4>
                        <p class="mb-0">{{$error}}</p>
                    </div>
                @endforeach
            @endif
            @if (\Session::has('success'))
                <div class="alert alert-dismissible alert-success fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="alert-heading">Enhorabuena!</h4>
                    <p class="mb-0">{!! \Session::get('success') !!}</p>
                </div>
            @endif
        </div>    
        @yield('content')
        
    </div>
    @yield('js')
</body>

</html>
