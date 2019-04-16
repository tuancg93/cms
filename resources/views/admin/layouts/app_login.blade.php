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
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href={{asset("img/favicon.ico")}}>
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href={{asset("admin/css/bootstrap.min.css")}}>
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href={{asset("admin/css/font-awesome.min.css")}}>
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href={{asset("admin/css/owl.carousel.css")}}>
    <link rel="stylesheet" href={{asset("admin/css/owl.theme.css")}}>
    <link rel="stylesheet" href={{asset("admin/css/owl.transitions.css")}}>
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href={{asset("admin/css/animate.css")}}>
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href={{asset("admin/css/normalize.css")}}>
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href={{asset("admin/css/scrollbar/jquery.mCustomScrollbar.min.css")}}>
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href={{asset("admin/css/wave/waves.min.css")}}>
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href={{asset("admin/css/notika-custom-icon.css")}}>
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href={{asset("admin/css/main.css")}}>
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href={{asset("admin/style.css")}}>
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href={{asset("admin/css/responsive.css")}}>
    <!-- modernizr JS
		============================================ -->
    <script src={{asset("admin/js/vendor/modernizr-2.8.3.min.js")}}></script>
</head>
<body>
@yield('content')
<script src={{asset("admin/js/vendor/jquery-1.12.4.min.js")}}></script>
<script src={{asset("admin/js/bootstrap.min.js")}}></script>
<script src={{asset("admin/js/wow.min.js")}}></script>
<script src={{asset("admin/js/owl.carousel.min.js")}}></script>
<script src={{asset("admin/js/meanmenu/jquery.meanmenu.js")}}></script>
<script src={{asset("admin/js/jquery-price-slider.js")}}></script>
<script src={{asset("admin/js/jquery.scrollUp.min.js")}}></script>
<script src={{asset("admin/js/scrollbar/jquery.mCustomScrollbar.concat.min.js")}}></script>
<script src={{asset("admin/js/icheck/icheck.min.js")}}></script>
<script src={{asset("admin/js/icheck/icheck-active.js")}}></script>
<script src={{asset("admin/js/main.js")}}></script>
<script src={{asset("admin/parsley/parsley.min.js")}}></script>
<script src={{asset("admin/js/login/login-action.js")}}></script>
<script>
    $("#form_login").parsley(
        {
            errorsContainer: function (el) {
                return el.$element.closest('.form-group');
            }
        }
    );
</script>
</body>
</html>
