<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->
<head>
    <meta charset="utf-8"/>
    <title>Olimpik CMS</title>
    <meta name="description" content="Dashboard"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon">
    <!-- Bootstrap Core CSS -->
    <link href="/assets/admin/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/assets/admin/css/helper.css" rel="stylesheet">
    <link href="/assets/admin/css/style.css" rel="stylesheet">
    <link href="/assets/admin/css/custom.css" rel="stylesheet">
</head>
<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>
        <!-- Main wrapper  -->
        <div id="main-wrapper">
            <!-- header header  -->
            <div class="header">
                <nav class="navbar top-navbar navbar-expand-md navbar-light">
                    <!-- Logo -->

                    <!-- End Logo -->
                    <div class="navbar-collapse">
                        <!-- toggle and nav items -->
                        <ul class="navbar-nav ml-auto mt-md-0">
                            <!-- This is  -->
                            <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                            <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                            <!-- Messages -->
                        </ul>

                        <!-- User profile and search -->
                        <ul class="navbar-nav my-lg-0 ">
                            <!-- Profile -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@if(!Auth::user()->image)
                                    <img src="/assets/img/avatars/adam-jansen.jpg">
                                    @else
                                    <img src="/assets/img/avatars/thumbnails/{{ Auth::user()->image }}"
                                    alt="{{ Auth::user()->name }}" class="profile-pic""/>
                                @endif </a>
                                <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                    <ul class="dropdown-user">
                                        <li><a href="/admin/users/{{ Auth::user()->id }}"><i class="ti-user"></i> Profile</a></li>
                                        <li><a href="/admin/users/{{ Auth::user()->id}}/edit"><i class="ti-settings"></i> Setting</a></li>
                                        <li><a href="{{ url('/admin/logout') }}"><i class="fa fa-power-off"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- End header header -->
            <!-- Left Sidebar  -->
            <div class="left-sidebar">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard </span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="/admin">Подесувања</a></li>
                                    <li><a href="/admin/analytics">Analytics </a></li>
                                </ul>
                            </li>
                            <li> <a class="categories" href="/admin/categories" aria-expanded="false"><i class="fa fa-bars"></i><span class="hide-menu">Категории</span></a>
                            </li>
                            <li> <a class="categories" href="/admin/slider" aria-expanded="false"><i class="fa fa-file-image-o"></i><span class="hide-menu">Слајдер</span></a>
                            </li>
                            <li> <a class="categories" href="/admin/product" aria-expanded="false"><i class="fa fa fa-cubes"></i><span class="hide-menu">Продукти</span></a></li>
                            <li> <a class="categories" href="/admin/staticpage" aria-expanded="false"><i class="fa fa-newspaper-o"></i><span class="hide-menu">Страни</span></a>
                            </li>
                            <li> <a class="categories" href="/admin/services" aria-expanded="false"><i class="fa fa-server"></i><span class="hide-menu">Услуги</span></a>
                            </li>
                            <li> <a class="categories" href="/admin/referrals" aria-expanded="false"><i class="fa fa-address-card-o"></i><span class="hide-menu">Референти</span></a>
                            </li>
                            <li> <a class="categories" href="/admin/users" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Корисници</span></a>
                            </li>
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </div>
            <!-- End Left Sidebar  -->
            <!-- Page wrapper  -->
            <div class="page-wrapper">
                <!-- Bread crumb -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-primary">Dashboard</h3> </div>
                        <div class="col-md-7 align-self-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                    <!-- End Bread crumb -->
                    <!-- Container fluid  -->
                    <div class="container-fluid">
                        <!-- Start Page Content -->
                        <div class="row">
                            <div class="col-12">
                                @yield('content')
                            </div>
                        </div>
                        <!-- End PAge Content -->
                    </div>
                    <!-- End Container fluid  -->

                    <!-- footer -->
                    <footer class="navbar fixed-bottom"> <a href="#"></a></footer>
                    <!-- End footer -->
                </div>
                <!-- JavaScript files placed at the end of the document so the pages load faster -->
                <!-- ================================================== -->
                <!-- Jquery and Bootstap core js files -->
                <!-- All Jquery -->
                <script src="/assets/admin/js/lib/jquery/jquery.min.js"></script>
                <!-- Bootstrap tether Core JavaScript -->
                <script src="/assets/admin/js/lib/bootstrap/js/popper.min.js"></script>
                <script src="/assets/admin/js/lib/bootstrap/js/bootstrap.min.js"></script>
                <!-- slimscrollbar scrollbar JavaScript -->
                <script src="/assets/admin/js/jquery.slimscroll.js"></script>
                <!--Menu sidebar -->
                <script src="/assets/admin/js/sidebarmenu.js"></script>
                <!--stickey kit -->
                <script src="/assets/admin/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
                <!--Custom JavaScript -->
                <script src="/assets/admin/js/custom.min.js"></script>
                <!--ck editor -->
                <script src="//cdn.ckeditor.com/4.9.2/full/ckeditor.js"></script>

            </body>
            </html>

