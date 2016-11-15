<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home Property | Home</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">

        <!-- Font awesome -->

        <style>
            #map-canvas{
                width: 400px;
                height: 400px;
            }
        </style>

        <style>
            ul#menu li {
                display:inline;
            }
        </style>

        {{--<link rel="stylesheet" href="{{ asset('https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css') }}">--}}
        {{--<script src="{{ asset('https://code.jquery.com/jquery-1.11.3.min.js') }}"></script>--}}
        {{--<script src="{{ asset('https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js') }}"></script>--}}

        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyB6K1CFUQ1RwVJ-nyXxd6W0rfiIBe12Q"
                type="text/javascript"></script>

        <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">



        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">
        <!-- Bootstrap -->
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <!-- slick slider -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
        <!-- price picker slider -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/nouislider.css') }}">
        <!-- Theme color -->
        <link id="switcher" href="{{ asset('css/theme-color/default-theme.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('http://www.w3schools.com/lib/w3.css') }}">

        <!-- Main style sheet -->

        <link href="{{ asset('css/ratings.css') }}" rel="stylesheet">
        <link href="{{ asset('css/rating.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style4.css') }}" rel="stylesheet">
        <link href="{{ asset('jqueryui/jquery-ui.min.css') }}" rel="stylesheet">
        <link href="{{ asset('jqueryui/jquery-ui.theme.min.css') }}" rel="stylesheet">


        <!-- Google Font -->
        <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="{{ asset('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}"></script>
        <script src="{{ asset('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
        <![endif]-->
    </head>

    <body>
    {{--@include('includes.header')--}}
    @include('includes.menu')
    @include('includes.message')
    @yield('content');
    @include('includes.footer2')
    @include('includes.footer')

    <!-- jQuery library -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->


    </body>
</html>