<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())}} ">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CMS base')}} </title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
     ============================================ -->
    <link rel="stylesheet" href="{{url('/public/admin')}}/css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('/public/admin')}}/css/font-awesome.min.css")>
    <link rel="stylesheet" href="{{url('/public/admin')}}/css/chosen/chosen.css">
    <link rel="stylesheet" href="{{url('/public/admin')}}/css/meanmenu/meanmenu.min.css")>
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('/public/admin')}}/css/owl.carousel.css")>
    <link rel="stylesheet" href="{{url('/public/admin')}}/css/owl.theme.css")>
    <link rel="stylesheet" href="{{url('/public/admin')}}/css/owl.transitions.css")>
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('/public/admin')}}/css/animate.css")>
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('/public/admin')}}/css/normalize.css")>
    <link rel="stylesheet" href="{{url('/public/admin')}}/css/notification/notification.css")>
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('/public/admin')}}/css/scrollbar/jquery.mCustomScrollbar.min.css")>
    <!-- Notika icon CSS
      ============================================ -->
    <link rel="stylesheet" href="{{url('/public/admin')}}/css/notika-custom-icon.css")>
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('/public/admin')}}/css/wave/waves.min.css")>
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('/public/admin')}}/css/main.css")>
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('/public/admin')}}/style.css")>
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('/public/admin')}}/css/responsive.css")>
    <link rel="stylesheet" href="{{url('/public/admin')}}/css/wave/button.css")>
    <link rel="stylesheet" href="{{url('/public/admin')}}/css/dropzone/dropzone.css")>
    <link rel="stylesheet" href="{{url('/public/admin')}}/css/dropzone/dropzone.css")>
    <link rel="stylesheet" href="{{url('/public/admin')}}/css/jquery.dataTables.min.css">
    <script src="{{url('/public/admin')}}/js/vendor/modernizr-2.8.3.min.js")></script>

    @yield('css')
</head>
<body>
<div class="header-top-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="logo-area">
                    <a href="#">{{ config('app.name', 'Laravel') }}</a>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="header-top-menu">
                    <ul class="nav navbar-nav notika-top-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-search"></i></span></a>
                            <div role="menu" class="dropdown-menu search-dd animated flipInX">
                                <div class="search-input">
                                    <i class="notika-icon notika-left-arrow"></i>
                                    <input type="text" />
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-support"></i></span></a>
                            <div role="menu" class="dropdown-menu profile-dd animated zoomIn">
                                <ul class="profile-info-menu">
                                    <li><a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> Đăng xuất</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav">
                            <li><a data-toggle="collapse" data-target="#Charts" href="#">Home</a>
                                <ul class="collapse dropdown-header-top">
                                    <li><a href="{{route('user.index')}}">Quản lý tài khooản</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu end -->
<!-- Main Menu area start-->
<div class="main-menu-area mg-tb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                    <li class="active"><a data-toggle="tab" href="#User"><i class="notika-icon notika-support"></i>Quản lý tài khoản</a>
                    </li>
                </ul>
                <div class="tab-content custom-menu-content">
                    <div id="User" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="{{route('user.index')}}">Danh sách tài khooản</a></li>
                            <li><a href="{{route('user.create')}}">Tạo mới tài khooản</a></li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Menu area End-->
<div id="app">
    <main class="py-4">
        @yield('content')
    </main>
</div>
<script src="{{url('/public/admin')}}/js/vendor/jquery-1.12.4.min.js")></script>
<script src="{{url('/public/admin')}}/js/bootstrap.min.js")></script>
<script src="{{url('/public/admin')}}/js/wow.min.js")></script>
<script src="{{url('/public/admin')}}/js/jquery-price-slider.js")></script>
<script src="{{url('/public/admin')}}/js/owl.carousel.min.js")></script>
<script src="{{url('/public/admin')}}/js/jquery.scrollUp.min.js")></script>
<script src="{{url('/public/admin')}}/js/meanmenu/jquery.meanmenu.js")></script>
<script src="{{url('/public/admin')}}/js/scrollbar/jquery.mCustomScrollbar.concat.min.js")></script>
<script src="{{url('/public/admin')}}/js/icheck/icheck.min.js")></script>
<script src="{{url('/public/admin')}}/js/icheck/icheck-active.js")></script>
<script src="{{url('/public/admin/js')}}/chosen/chosen.jquery.js"></script>
<script src="{{url('/public/admin/parsley')}}/parsley.min.js"></script>
<script src="{{url('/public/admin')}}/js/main.js")></script>
<script src="{{url('/public/admin/js')}}/dropzone/dropzone.js"></script>
<script src="{{url('/public/admin/js')}}/notification/bootstrap-growl.min.js"></script>
<script src="{{url('/public/admin/js')}}/notification/notification-active.js"></script>
<script src="{{url('/public/admin/js')}}/data-table/jquery.dataTables.min.js"></script>
<script src="{{url('/public/admin/js')}}/data-table/data-table-act.js"></script>
@yield('js')
</body>
</html>
