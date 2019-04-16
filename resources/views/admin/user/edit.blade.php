<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Data Table | Notika - Notika Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('/admin/')}}/css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('/admin/')}}/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('/admin/')}}/css/chosen/chosen.css">
    <link rel="stylesheet" href="{{url('/admin/')}}/css/wave/button.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('/admin/')}}/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('/admin/')}}/css/animate.css">
    <!-- normalize CSS
		============================================ -->

    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('/admin/')}}/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('/admin/')}}/css/notika-custom-icon.css">
    <!-- Data Table JS
		============================================ -->
    <link rel="stylesheet" href="{{url('/admin/')}}/css/jquery.dataTables.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('/admin/')}}/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('/admin/')}}/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('/admin/')}}/css/responsive.css">

    <link rel="stylesheet" href="{{url('/admin/parsley')}}/parsley.css">
    <link rel="stylesheet" href="{{url('/admin/')}}/css/dropzone/dropzone.css">


    <!-- modernizr JS
		============================================ -->
</head>

<body>



<![endif]-->
<!-- Start Header Top Area -->
{{--<div class="header-top-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="logo-area">
                    <a href="#"><img src="img/logo/logo.png" alt="" /></a>
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
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-mail"></i></span></a>
                            <div role="menu" class="dropdown-menu message-dd animated zoomIn">
                                <div class="hd-mg-tt">
                                    <h2>Messages</h2>
                                </div>
                                <div class="hd-message-info">
                                    <a href="#">
                                        <div class="hd-message-sn">
                                            <div class="hd-message-img">
                                                <img src="img/post/1.jpg" alt="" />
                                            </div>
                                            <div class="hd-mg-ctn">
                                                <h3>David Belle</h3>
                                                <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="hd-message-sn">
                                            <div class="hd-message-img">
                                                <img src="img/post/2.jpg" alt="" />
                                            </div>
                                            <div class="hd-mg-ctn">
                                                <h3>Jonathan Morris</h3>
                                                <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="hd-message-sn">
                                            <div class="hd-message-img">
                                                <img src="img/post/4.jpg" alt="" />
                                            </div>
                                            <div class="hd-mg-ctn">
                                                <h3>Fredric Mitchell</h3>
                                                <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="hd-message-sn">
                                            <div class="hd-message-img">
                                                <img src="img/post/1.jpg" alt="" />
                                            </div>
                                            <div class="hd-mg-ctn">
                                                <h3>David Belle</h3>
                                                <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="hd-message-sn">
                                            <div class="hd-message-img">
                                                <img src="img/post/2.jpg" alt="" />
                                            </div>
                                            <div class="hd-mg-ctn">
                                                <h3>Glenn Jecobs</h3>
                                                <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="hd-mg-va">
                                    <a href="#">View All</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item nc-al"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-alarm"></i></span><div class="spinner4 spinner-4"></div><div class="ntd-ctn"><span>3</span></div></a>
                            <div role="menu" class="dropdown-menu message-dd notification-dd animated zoomIn">
                                <div class="hd-mg-tt">
                                    <h2>Notification</h2>
                                </div>
                                <div class="hd-message-info">
                                    <a href="#">
                                        <div class="hd-message-sn">
                                            <div class="hd-message-img">
                                                <img src="img/post/1.jpg" alt="" />
                                            </div>
                                            <div class="hd-mg-ctn">
                                                <h3>David Belle</h3>
                                                <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="hd-message-sn">
                                            <div class="hd-message-img">
                                                <img src="img/post/2.jpg" alt="" />
                                            </div>
                                            <div class="hd-mg-ctn">
                                                <h3>Jonathan Morris</h3>
                                                <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="hd-message-sn">
                                            <div class="hd-message-img">
                                                <img src="img/post/4.jpg" alt="" />
                                            </div>
                                            <div class="hd-mg-ctn">
                                                <h3>Fredric Mitchell</h3>
                                                <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="hd-message-sn">
                                            <div class="hd-message-img">
                                                <img src="img/post/1.jpg" alt="" />
                                            </div>
                                            <div class="hd-mg-ctn">
                                                <h3>David Belle</h3>
                                                <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="hd-message-sn">
                                            <div class="hd-message-img">
                                                <img src="img/post/2.jpg" alt="" />
                                            </div>
                                            <div class="hd-mg-ctn">
                                                <h3>Glenn Jecobs</h3>
                                                <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="hd-mg-va">
                                    <a href="#">View All</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-menus"></i></span><div class="spinner4 spinner-4"></div><div class="ntd-ctn"><span>2</span></div></a>
                            <div role="menu" class="dropdown-menu message-dd task-dd animated zoomIn">
                                <div class="hd-mg-tt">
                                    <h2>Tasks</h2>
                                </div>
                                <div class="hd-message-info hd-task-info">
                                    <div class="skill">
                                        <div class="progress">
                                            <div class="lead-content">
                                                <p>HTML5 Validation Report</p>
                                            </div>
                                            <div class="progress-bar wow fadeInLeft" data-progress="95%" style="width: 95%;" data-wow-duration="1.5s" data-wow-delay="1.2s"> <span>95%</span>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="lead-content">
                                                <p>Google Chrome Extension</p>
                                            </div>
                                            <div class="progress-bar wow fadeInLeft" data-progress="85%" style="width: 85%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>85%</span> </div>
                                        </div>
                                        <div class="progress">
                                            <div class="lead-content">
                                                <p>Social Internet Projects</p>
                                            </div>
                                            <div class="progress-bar wow fadeInLeft" data-progress="75%" style="width: 75%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>75%</span> </div>
                                        </div>
                                        <div class="progress">
                                            <div class="lead-content">
                                                <p>Bootstrap Admin</p>
                                            </div>
                                            <div class="progress-bar wow fadeInLeft" data-progress="65%" style="width: 65%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>65%</span> </div>
                                        </div>
                                        <div class="progress progress-bt">
                                            <div class="lead-content">
                                                <p>Youtube App</p>
                                            </div>
                                            <div class="progress-bar wow fadeInLeft" data-progress="55%" style="width: 55%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>55%</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hd-mg-va">
                                    <a href="#">View All</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-chat"></i></span></a>
                            <div role="menu" class="dropdown-menu message-dd chat-dd animated zoomIn">
                                <div class="hd-mg-tt">
                                    <h2>Chat</h2>
                                </div>
                                <div class="search-people">
                                    <i class="notika-icon notika-left-arrow"></i>
                                    <input type="text" placeholder="Search People" />
                                </div>
                                <div class="hd-message-info">
                                    <a href="#">
                                        <div class="hd-message-sn">
                                            <div class="hd-message-img chat-img">
                                                <img src="img/post/1.jpg" alt="" />
                                                <div class="chat-avaible"><i class="notika-icon notika-dot"></i></div>
                                            </div>
                                            <div class="hd-mg-ctn">
                                                <h3>David Belle</h3>
                                                <p>Available</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="hd-message-sn">
                                            <div class="hd-message-img chat-img">
                                                <img src="img/post/2.jpg" alt="" />
                                            </div>
                                            <div class="hd-mg-ctn">
                                                <h3>Jonathan Morris</h3>
                                                <p>Last seen 3 hours ago</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="hd-message-sn">
                                            <div class="hd-message-img chat-img">
                                                <img src="img/post/4.jpg" alt="" />
                                            </div>
                                            <div class="hd-mg-ctn">
                                                <h3>Fredric Mitchell</h3>
                                                <p>Last seen 2 minutes ago</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="hd-message-sn">
                                            <div class="hd-message-img chat-img">
                                                <img src="img/post/1.jpg" alt="" />
                                                <div class="chat-avaible"><i class="notika-icon notika-dot"></i></div>
                                            </div>
                                            <div class="hd-mg-ctn">
                                                <h3>David Belle</h3>
                                                <p>Available</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="hd-message-sn">
                                            <div class="hd-message-img chat-img">
                                                <img src="img/post/2.jpg" alt="" />
                                                <div class="chat-avaible"><i class="notika-icon notika-dot"></i></div>
                                            </div>
                                            <div class="hd-mg-ctn">
                                                <h3>Glenn Jecobs</h3>
                                                <p>Available</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="hd-mg-va">
                                    <a href="#">View All</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Header Top Area -->
<!-- Mobile Menu start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav">
                            <li><a data-toggle="collapse" data-target="#Charts" href="#">Home</a>
                                <ul class="collapse dropdown-header-top">
                                    <li><a href="index.html">Dashboard One</a></li>
                                    <li><a href="index-2.html">Dashboard Two</a></li>
                                    <li><a href="index-3.html">Dashboard Three</a></li>
                                    <li><a href="index-4.html">Dashboard Four</a></li>
                                    <li><a href="analytics.html">Analytics</a></li>
                                    <li><a href="widgets.html">Widgets</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#demoevent" href="#">Email</a>
                                <ul id="demoevent" class="collapse dropdown-header-top">
                                    <li><a href="inbox.html">Inbox</a></li>
                                    <li><a href="view-email.html">View Email</a></li>
                                    <li><a href="compose-email.html">Compose Email</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#democrou" href="#">Interface</a>
                                <ul id="democrou" class="collapse dropdown-header-top">
                                    <li><a href="animations.html">Animations</a></li>
                                    <li><a href="google-map.html">Google Map</a></li>
                                    <li><a href="data-map.html">Data Maps</a></li>
                                    <li><a href="code-editor.html">Code Editor</a></li>
                                    <li><a href="image-cropper.html">Images Cropper</a></li>
                                    <li><a href="wizard.html">Wizard</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#demolibra" href="#">Charts</a>
                                <ul id="demolibra" class="collapse dropdown-header-top">
                                    <li><a href="flot-charts.html">Flot Charts</a></li>
                                    <li><a href="bar-charts.html">Bar Charts</a></li>
                                    <li><a href="line-charts.html">Line Charts</a></li>
                                    <li><a href="area-charts.html">Area Charts</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#demodepart" href="#">Tables</a>
                                <ul id="demodepart" class="collapse dropdown-header-top">
                                    <li><a href="normal-table.html">Normal Table</a></li>
                                    <li><a href="data-table.html">Data Table</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#demo" href="#">Forms</a>
                                <ul id="demo" class="collapse dropdown-header-top">
                                    <li><a href="form-elements.html">Form Elements</a></li>
                                    <li><a href="form-components.html">Form Components</a></li>
                                    <li><a href="form-examples.html">Form Examples</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">App views</a>
                                <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                    <li><a href="notification.html">Notifications</a>
                                    </li>
                                    <li><a href="alert.html">Alerts</a>
                                    </li>
                                    <li><a href="modals.html">Modals</a>
                                    </li>
                                    <li><a href="buttons.html">Buttons</a>
                                    </li>
                                    <li><a href="tabs.html">Tabs</a>
                                    </li>
                                    <li><a href="accordion.html">Accordion</a>
                                    </li>
                                    <li><a href="dialog.html">Dialogs</a>
                                    </li>
                                    <li><a href="popovers.html">Popovers</a>
                                    </li>
                                    <li><a href="tooltips.html">Tooltips</a>
                                    </li>
                                    <li><a href="dropdown.html">Dropdowns</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages</a>
                                <ul id="Pagemob" class="collapse dropdown-header-top">
                                    <li><a href="contact.html">Contact</a>
                                    </li>
                                    <li><a href="invoice.html">Invoice</a>
                                    </li>
                                    <li><a href="typography.html">Typography</a>
                                    </li>
                                    <li><a href="color.html">Color</a>
                                    </li>
                                    <li><a href="login-register.html">Login Register</a>
                                    </li>
                                    <li><a href="404.html">404 Page</a>
                                    </li>
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
                    <li><a data-toggle="tab" href="#Home"><i class="notika-icon notika-house"></i> Home</a>
                    </li>
                    <li><a data-toggle="tab" href="#mailbox"><i class="notika-icon notika-mail"></i> Email</a>
                    </li>
                    <li><a data-toggle="tab" href="#Interface"><i class="notika-icon notika-edit"></i> Interface</a>
                    </li>
                    <li><a data-toggle="tab" href="#Charts"><i class="notika-icon notika-bar-chart"></i> Charts</a>
                    </li>
                    <li class="active"><a data-toggle="tab" href="#Tables"><i class="notika-icon notika-windows"></i> Tables</a>
                    </li>
                    <li><a data-toggle="tab" href="#Forms"><i class="notika-icon notika-form"></i> Forms</a>
                    </li>
                    <li><a data-toggle="tab" href="#Appviews"><i class="notika-icon notika-app"></i> App views</a>
                    </li>
                    <li><a data-toggle="tab" href="#Page"><i class="notika-icon notika-support"></i> Pages</a>
                    </li>
                </ul>
                <div class="tab-content custom-menu-content">
                    <div id="Home" class="tab-pane in notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="index.html">Dashboard One</a>
                            </li>
                            <li><a href="index-2.html">Dashboard Two</a>
                            </li>
                            <li><a href="index-3.html">Dashboard Three</a>
                            </li>
                            <li><a href="index-4.html">Dashboard Four</a>
                            </li>
                            <li><a href="analytics.html">Analytics</a>
                            </li>
                            <li><a href="widgets.html">Widgets</a>
                            </li>
                        </ul>
                    </div>
                    <div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="inbox.html">Inbox</a>
                            </li>
                            <li><a href="view-email.html">View Email</a>
                            </li>
                            <li><a href="compose-email.html">Compose Email</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Interface" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="animations.html">Animations</a>
                            </li>
                            <li><a href="google-map.html">Google Map</a>
                            </li>
                            <li><a href="data-map.html">Data Maps</a>
                            </li>
                            <li><a href="code-editor.html">Code Editor</a>
                            </li>
                            <li><a href="image-cropper.html">Images Cropper</a>
                            </li>
                            <li><a href="wizard.html">Wizard</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Charts" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="flot-charts.html">Flot Charts</a>
                            </li>
                            <li><a href="bar-charts.html">Bar Charts</a>
                            </li>
                            <li><a href="line-charts.html">Line Charts</a>
                            </li>
                            <li><a href="area-charts.html">Area Charts</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Tables" class="tab-pane active notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="normal-table.html">Normal Table</a>
                            </li>
                            <li><a href="data-table.html">Data Table</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Forms" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="form-elements.html">Form Elements</a>
                            </li>
                            <li><a href="form-components.html">Form Components</a>
                            </li>
                            <li><a href="form-examples.html">Form Examples</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Appviews" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="notification.html">Notifications</a>
                            </li>
                            <li><a href="alert.html">Alerts</a>
                            </li>
                            <li><a href="modals.html">Modals</a>
                            </li>
                            <li><a href="buttons.html">Buttons</a>
                            </li>
                            <li><a href="tabs.html">Tabs</a>
                            </li>
                            <li><a href="accordion.html">Accordion</a>
                            </li>
                            <li><a href="dialog.html">Dialogs</a>
                            </li>
                            <li><a href="popovers.html">Popovers</a>
                            </li>
                            <li><a href="tooltips.html">Tooltips</a>
                            </li>
                            <li><a href="dropdown.html">Dropdowns</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Page" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="contact.html">Contact</a>
                            </li>
                            <li><a href="invoice.html">Invoice</a>
                            </li>
                            <li><a href="typography.html">Typography</a>
                            </li>
                            <li><a href="color.html">Color</a>
                            </li>
                            <li><a href="login-register.html">Login Register</a>
                            </li>
                            <li><a href="404.html">404 Page</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Menu area End-->
<!-- Breadcomb area Start-->
<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="notika-icon notika-windows"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Data Table</h2>
                                    <p>Welcome to Notika <span class="bread-ntd">Admin Template</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                            <div class="breadcomb-report">
                                <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>--}}
<!-- Breadcomb area End-->
<!-- Data Table area Start-->
<div class="data-table-area">
    <div class="container">
        <div class="row">
            @include('admin.common.flash')

        </div>
    </div>
</div>
<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="form-example-wrap">

                    {{ Form::model($data, array('route' => array('category.update', $data->id), 'method' => 'PUT')) }}


                    <div class="cmp-tb-hd">
                        <h2>Tạo mới danh mục</h2>

                    </div>
                    <div class="form-example-int">
                        <div class="form-group">
                            <label>Tên nhóm</label>
                            <input type="text" value="{{$data->name}}" required data-parsley-required-message="{{ trans('category.name') }}" class="form-control input-sm" name="name" placeholder="Tên nhóm">
                        </div>
                    </div>

                    <div class="form-example-int mg-t-15">
                        <div class="form-group">
                            <label>Danh mục cha</label>

                            <div class="chosen-select-act">
                                <select class="chosen" name="parent_id" data-placeholder="Chọn thư mục cha...">
                                    <option value="0">Thư mục cha</option>
                                    @foreach($listParent as $k => $row)
                                        <option {{$row->id == $data->parent_id ? 'selected' : ''}} value="{{$row->id}}">{{$row->name}}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-example-int">
                        <div class="form-group">
                            <label>Đường dẫn ảnh</label>
                            <input type="text" id="image-category" class="form-control input-sm" value="{{$data->image}}" name="image" placeholder="Đường dẫn ảnh">
                            <a style="margin-top: 10px" data-toggle="modal" data-target="#modalUploadMedia" data-href="{{route('image.modal')}}"
                               class="btn btn-default btn-icon-notika waves-effect openMediaModal"><i class="notika-icon notika-up-arrow"></i> Tải
                                ảnh lên</a>

                            <div class="modal fade" id="modalUploadMedia" role="dialog" style="display: none;">
                                <div class="modal-dialog modal-large modal-content-media">
                                    <div class="modal-content">
                                        Loading...
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-example-int mg-t-15">
                        <div class="form-group">
                            <label>Mô tả danh mục</label>
                            <textarea class="form-control input-sm" name="description"
                                      placeholder="Mô tả danh mục">{{$data->description}}</textarea>
                        </div>
                    </div>
                    <div class="form-example-int mg-t-15">
                        <div class="fm-checkbox">
                            <label class="">
                                <div class="icheckbox_square-green" style="position: relative;"><input type="checkbox"
                                                                                                       {{CommonEnum::active == $data->status ? 'checked':""}}
                                                                                                       value="{{CommonEnum::active}}"
                                                                                                       name="status"
                                                                                                       class="i-checks"
                                                                                                       style="position: absolute; opacity: 0;">
                                    <ins class="iCheck-helper"
                                         style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                </div>
                                <i></i> Kích hoạt</label>
                        </div>
                    </div>
                    <div class="form-example-int mg-t-15">
                        <input type="submit" value="Tạo mới" class="btn btn-success notika-bdz-file-previewtn-success waves-effect">
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

<!-- Data Table area End-->
<!-- Start Footer area-->
{{--<div class="footer-copyright-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="footer-copy-right">
                    <p>Copyright © 2018
                        . All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>--}}
<!-- End Footer area-->
<!-- jquery
    ============================================ -->
<script src="{{url('/admin/js')}}/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="{{url('/admin/js')}}/bootstrap.min.js"></script>
<script src="{{url('/admin/parsley')}}/parsley.min.js"></script>

<!-- Data Table JS
    ============================================ -->
<script src="{{url('/admin/js')}}/data-table/jquery.dataTables.min.js"></script>
<script src="{{url('/admin/js')}}/data-table/data-table-act.js"></script>
<!-- main JS
    ============================================ -->
<script src="{{url('/admin/js')}}/icheck/icheck.min.js"></script>
<script src="{{url('/admin/js')}}/icheck/icheck-active.js"></script>
<script src="{{url('/admin/js')}}/chosen/chosen.jquery.js"></script>
<script src="{{url('/admin/js')}}/dropzone/dropzone.js"></script>

<script src="js/plugins.js"></script>
<!-- main JS
    ============================================ -->
<script>
    $(".chosen")[0] && $(".chosen").chosen({
        width: "100%",
        allow_single_deselect: !0
    });

    $('.openMediaModal').on('click',function(){
        var dataURL = $(this).attr('data-href');

        $('.modal-content').load(dataURL,function(){
            $('#modalUploadMedia').modal({show:true});
        });
    });
    $(function () {
        $('#add-category').parsley();
    });


</script>
</body>

</html>

