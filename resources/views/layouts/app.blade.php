<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


     <!-- Font awesome -->
     <link href="{{ asset('front/css/font-awesome.css')}}" rel="stylesheet">
     <!-- Bootstrap -->
     <link href="{{ asset('front/css/bootstrap.css')}}" rel="stylesheet">   
     <!-- SmartMenus jQuery Bootstrap Addon CSS -->
     <link href="{{ asset('front/css/jquery.smartmenus.bootstrap.css')}}" rel="stylesheet">
     <!-- Product view slider -->
     <link rel="stylesheet" type="text/css" href="{{ asset('front/css/jquery.simpleLens.css')}}">    
     <!-- slick slider -->
     <link rel="stylesheet" type="text/css" href="{{ asset('front/css/slick.css')}}">
     <!-- price picker slider -->
     <link rel="stylesheet" type="text/css" href="{{ asset('front/css/nouislider.css')}}">
     <!-- Theme color -->
     <link id="switcher" href="{{ asset('front/css/theme-color/default-theme.css')}}" rel="stylesheet">
     <!-- <link id="switcher" href="css/theme-color/bridge-theme.css')}}" rel="stylesheet"> -->
     <!-- Top Slider CSS -->
     <link href="{{ asset('front/css/sequence-theme.modern-slide-in.css')}}" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="{{ asset('front/css/style.css')}}" rel="stylesheet"> 

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body>
       
    <div id="app">
        {{-- <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            
        </nav> --}}

        

        @include('includes.user_nav')
        @include('includes.nav')
        
        @yield('content')

        @include('includes.footer')
    </div>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}

    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('front/js/bootstrap.js')}}"></script>  
<!-- SmartMenus jQuery plugin -->
<script type="text/javascript" src="{{ asset('front/js/jquery.smartmenus.js')}}"></script>
<!-- SmartMenus jQuery Bootstrap Addon -->
<script type="text/javascript" src="{{ asset('front/js/jquery.smartmenus.bootstrap.js')}}"></script>  
<!-- To Slider JS -->
<script src="{{ asset('front/js/sequence.js')}}"></script>
<script src="{{ asset('front/js/sequence-theme.modern-slide-in.js')}}"></script>  
<!-- Product view slider -->
<script type="text/javascript" src="{{ asset('front/js/jquery.simpleGallery.js')}}"></script>
<script type="text/javascript" src="{{ asset('front/js/jquery.simpleLens.js')}}"></script>
<!-- slick slider -->
<script type="text/javascript" src="{{ asset('front/js/slick.js')}}"></script>
<!-- Price picker slider -->
<script type="text/javascript" src="{{ asset('front/js/nouislider.js')}}"></script>
<!-- Custom js -->
<script src="{{ asset('front/js/custom.js')}}"></script> 
</body>
</html>
