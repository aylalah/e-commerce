<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->

        <link rel="icon" href="{{ asset('front/img/core-img/favicon.ico')}}">

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

        <!-- Google Font -->
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        <style>
            /* html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            } */

             /* .full-height {
                height: 100vh;
            } */

            /* .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            } 

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            } */

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style> 
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            @include('includes.header')

            @include('includes.nav')

            @yield('my-content')

            @include('includes.footer')           
        
            
        </div>
    </body>

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


</html>
