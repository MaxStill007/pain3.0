<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    
    <link rel="icon" href="{{ asset('img/logo.svg') }}" type="image/svg+xml">
    <link rel="icon" href="{{ asset('img/logo.svg') }}" type="image/svg+xml" sizes="any">


    <!--Bootstrap style-->
    @vite('resources/css/bootstrap.css')
    
    <!--App script-->
    @vite('resources/js/app.js')
       
    <!--CardCarousel JS-->
    @vite('resources/js/cardcarousel.js')
    @vite('resources/js/orderModal.js')
    @vite('resources/js/modal.js')

    <!-- Font Awesome Cdn -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />

    <!--Jquery JS-->
    @vite('resources/js/jquery.js')

    <!--Google Fonts-->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined"
    />
    
    <!--Custom CSS style-->
    @vite('resources/css/style.css')

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-CustomDark">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-transparent border-bottom border-CustomBorder border-3">
            <div class="container">
                <a class="navbar-brand text-CustomWhite d-flex align-items-center me-0"  href="{{ url('/') }}">
                    <img src="/img/logo.svg" class="me-2" style="width: 40px; height: 40px; object-fit: contain" alt="PowerApp Logo" />
                    <h4 class="headlines mb-0">PowerApp</h4>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse fs-5" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ms-md-5 me-auto">
                        @auth
                        <li class="nav-item">
                            <a class="nav-link text-CustomWhite" href="{{ route('profile.orders') }}">{{ __('Мои заказы') }}</a>
                        <li class="nav-item">
                            <a class="nav-link text-CustomWhite" href="{{ route('order.create') }}">{{ __('Новый заказ') }}</a>
                        </li>
                        @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-CustomWhite" href="{{ route('login') }}">{{ __('Вход') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-CustomWhite" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-CustomWhite" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end bg-CustomDark" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-CustomWhite fs-5" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Выйти из аккаунта') }}
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
