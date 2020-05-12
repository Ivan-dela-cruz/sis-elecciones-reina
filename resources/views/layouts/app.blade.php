<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Elecciones</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="{{asset('user/css/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/main.css')}}">
</head>
<body>
<div id="app">
    <header id="header">
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="index.html"><img src="img/logo.png" alt="" title=""/></a>
                </div>
                <nav id="nav-menu-container">

                    <ul class="nav-menu">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item" style="font-size: 15px;">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item" style="font-size: 15px;">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                            <li class="menu-has-children"><a style="font-size: 15px;">Calificaciones</a>
                                <ul>
                                    <li><a class="text-uppercase" style="font-size: 15px;" href="{{route('home')}}">Traje
                                            inicial</a></li>
                                    <hr>
                                    <li><a class="text-uppercase" style="font-size: 15px;" href="{{route('gala')}}">Traje
                                            gala</a></li>
                                    <hr>
                                    <li><a class="text-uppercase" style="font-size: 15px;" href="{{route('pregunta')}}">Pregunta</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown" style="font-size: 15px;">
                                <a style="font-size: 15px;" id="navbarDropdown" class="nav-link dropdown-toggle"
                                   href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                        @endguest
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header><!-- #header -->

    <main class="py-4">
        @yield('content')
    </main>

</div>


<script src="{{asset('user/js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('user/js/popper.min.js')}}"></script>
<script src="{{asset('user/js/vendor/bootstrap.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="{{asset('user/js/easing.min.js')}}"></script>
<script src="{{asset('user/js/hoverIntent.js')}}"></script>
<script src="{{asset('user/js/superfish.min.js')}}"></script>
<script src="{{asset('user/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('user/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('user/js/jquery.tabs.min.js')}}"></script>
<script src="{{asset('user/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('user/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('user/js/waypoints.min.js')}}"></script>
<script src="{{asset('user/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('user/js/simple-skillbar.js')}}"></script>
<script src="{{asset('user/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('user/js/mail-script.js')}}"></script>
<script src="{{asset('user/js/main.js')}}"></script>
</body>
</html>
