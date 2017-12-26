<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tingson Furniture |') }}</title>

    <!-- styles -->
    <link href="{{URL::to('css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{URL::to('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::to('css/animate.min.css')}}" rel="stylesheet">
    <link href="{{URL::to('css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{URL::to('css/owl.theme.css')}}" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="{{URL::to('css/style.default.css')}}" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="{{URL::to('css/custom.css')}}" rel="stylesheet">

    <script src="{{URL::to('js/respond.min.js')}}"></script>

    <link rel="{{URL::to('shortcut icon')}}" href="{{URL::to('favicon.png')}}">

    <script type="text/javascript">
    
    </script>
    
</head>
<body>
    @include('inc.navbar')
    @yield('content')
    @include('inc.footer')
    
    <!-- *** SCRIPTS TO INCLUDE ***
_________________________________________________________ -->
    <script src="{{URL::to('js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{URL::to('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::to('js/jquery.cookie.js')}}"></script>
    <script src="{{URL::to('js/waypoints.min.js')}}"></script>
    <script src="{{URL::to('js/modernizr.js')}}"></script>
    <script src="{{URL::to('js/bootstrap-hover-dropdown.js')}}"></script>
    <script src="{{URL::to('js/owl.carousel.min.js')}}"></script>
    <script src="{{URL::to('js/front.js')}}"></script>

    </body>
</html>

