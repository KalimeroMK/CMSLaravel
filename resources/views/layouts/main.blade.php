<!DOCTYPE html>
<!--[if IE 9]>
    <html lang="en" class="ie9"> <![endif]-->
    <!--[if !IE]><!-->
    <html lang="en">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <title>{{$settings->title}}</title>
        <meta name="description" content="{!! str_limit(strip_tags($settings->description), 150, '...')!!}">
        <meta name="author" content="Martin Karadzinov">

        <!-- Mobile Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicon -->
        <link rel="shortcut icon" href="/assets/images/favicon.ico">

        <!-- Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">

        <!-- Bootstrap core CSS -->
        <link href="/assets/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Font Awesome CSS -->
        <link href="/assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

        <!-- Plugins -->
        <link href="/assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
        <link href="/assets/plugins/rs-plugin-5/css/settings.css" rel="stylesheet">
        <link href="/assets/plugins/rs-plugin-5/css/layers.css" rel="stylesheet">
        <link href="/assets/plugins/rs-plugin-5/css/navigation.css" rel="stylesheet">
        <link href="/assets/css/animations.css" rel="stylesheet">
        <link href="/assets/plugins/slick/slick.css" rel="stylesheet">

        <!-- The Project's core CSS file -->
        <!-- Use css/rtl_style.css for RTL version -->
        <link href="/assets/css/style.css" rel="stylesheet" >
        <!-- The Project's Typography CSS file, includes used fonts -->
        <!-- Used font for body: Roboto -->
        <!-- Used font for headings: Raleway -->
        <!-- Use css/rtl_typography-default.css for RTL version -->
        <link href="/assets/css/typography-default.css" rel="stylesheet" >
        <!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer) -->
        <link href="/assets/css/skins/light_blue.css" data-style="styles-no-cookie" rel="stylesheet">

        <!-- Custom css -->
        <link href="/assets/css/custom.css" rel="stylesheet">

    </head>

    <!-- body classes:  -->
    <!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
        <!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
            <!-- "transparent-header": makes the header transparent and pulls the banner to top -->
            <!-- "gradient-background-header": applies gradient background to header -->
            <!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
            <body class="transparent-header gradient-background-header front-page page-loader-4">


                <!-- scrollToTop -->
                <!-- ================ -->
                <div class="scrollToTop circle"><i class="fa fa-angle-up"></i></div>
                <!-- page wrapper start -->
                <!-- ================ -->
                <div class="page-wrapper">

                   @yield('menu')

                   @yield('slider')

                   <div id="page-start"></div>

                   @yield('content')



                   <!-- JavaScript files placed at the end of the document so the pages load faster -->
                   <!-- ================================================== -->
                   <!-- Jquery and Bootstap core js files -->
                   <script src="/assets/plugins/jquery.min.js"></script>
                   <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
                   <!-- jQuery Revolution Slider  -->
                   <script src="/assets/plugins/rs-plugin-5/js/jquery.themepunch.tools.min.js"></script>
                   <script src="/assets/plugins/rs-plugin-5/js/jquery.themepunch.revolution.min.js"></script>
                   <!-- Isotope javascript -->
                   <script src="/assets/plugins/isotope/imagesloaded.pkgd.min.js"></script>
                   <script src="/assets/plugins/isotope/isotope.pkgd.min.js"></script>
                   <!-- Magnific Popup javascript -->
                   <script src="/assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
                   <!-- Appear javascript -->
                   <script src="/assets/plugins/waypoints/jquery.waypoints.min.js"></script>
                   <script src="/assets/plugins/waypoints/sticky.min.js"></script>
                   <!-- Count To javascript -->
                   <script src="/assets/plugins/countTo/jquery.countTo.js"></script>
                   <!-- Slick carousel javascript -->
                   <script src="/assets/plugins/slick/slick.min.js"></script>
                   <!-- Pace javascript -->
                   <script src="/assets/plugins/pace/pace.min.js"></script>
                   <!-- Initialization of Plugins -->
                   <script src="/assets/js/template.js"></script>
                   <!-- Custom Scripts -->
                   <script src="/assets/js/custom.js"></script>
                   <!-- Color Switcher (Remove these lines) -->

                   @yield('scripts')
               </body>
               </html>
