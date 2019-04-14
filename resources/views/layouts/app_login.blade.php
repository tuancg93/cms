<!DOCTYPE html>
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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href={{asset("img/favicon.ico")}}>
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href={{asset("css/bootstrap.min.css")}}>
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href={{asset("css/font-awesome.min.css")}}>
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href={{asset("css/owl.carousel.css")}}>
    <link rel="stylesheet" href={{asset("css/owl.theme.css")}}>
    <link rel="stylesheet" href={{asset("css/owl.transitions.css")}}>
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href={{asset("css/animate.css")}}>
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href={{asset("css/normalize.css")}}>
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href={{asset("css/scrollbar/jquery.mCustomScrollbar.min.css")}}>
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href={{asset("css/wave/waves.min.css")}}>
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href={{asset("css/notika-custom-icon.css")}}>
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href={{asset("css/main.css")}}>
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href={{asset("css/style.css")}}>
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href={{asset("css/responsive.css")}}>
    <!-- modernizr JS
		============================================ -->
    <script src={{asset("js/vendor/modernizr-2.8.3.min.js")}}></script>
</head>
<body>
@yield('content')
<script src={{asset("js/vendor/jquery-1.12.4.min.js")}}></script>
<script src={{asset("js/bootstrap.min.js")}}></script>
<script src={{asset("js/wow.min.js")}}></script>
<script src={{asset("js/owl.carousel.min.js")}}></script>
<script src={{asset("js/meanmenu/jquery.meanmenu.js")}}></script>
<script src={{asset("js/jquery-price-slider.js")}}></script>
<script src={{asset("js/jquery.scrollUp.min.js")}}></script>
<script src={{asset("js/scrollbar/jquery.mCustomScrollbar.concat.min.js")}}></script>
<script src={{asset("js/icheck/icheck.min.js")}}></script>
<script src={{asset("js/icheck/icheck-active.js")}}></script>
<script src={{asset("js/main.js")}}></script>
<script src={{asset("js/login/login-action.js")}}></script>
</body>
</html>
