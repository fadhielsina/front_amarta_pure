<!DOCTYPE html>
<html Content-Language="ID" lang="id" xml:lang="id">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Amarta Pure Water</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#13c5dd" />
    <meta property="og:title" content="Amarta Pure Water">
    <meta property="og:description" content="Merupakan perusahaan yang bergerak di bidang pengolahan air.">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:type" content="website" />

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ url('landing_page') }}/images/logo/logo_io/favicon.ico" type="image/png">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <link rel="stylesheet" type="text/css" href="{{ url('landing_page') }}/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ url('landing_page') }}/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="{{ url('landing_page') }}/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="{{ url('landing_page') }}/css/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="{{ url('landing_page') }}/css/themify-icons.css" />
    <link rel="stylesheet" type="text/css" href="{{ url('landing_page') }}/css/slick.css">
    <link rel="stylesheet" type="text/css" href="{{ url('landing_page') }}/css/prettyPhoto.css">
    <link rel="stylesheet" type="text/css" href="{{ url('landing_page') }}/css/shortcodes.css" />
    <link rel="stylesheet" type="text/css" href="{{ url('landing_page') }}/css/main.css" />
    <link rel="stylesheet" type="text/css" href="{{ url('landing_page') }}/css/megamenu.css" />
    <link rel="stylesheet" type="text/css" href="{{ url('landing_page') }}/css/responsive.css" />

</head>


<body>

    <!--page start-->
    <div class="page">
        @include('amarta_pure.layouts.header')
        @yield('content')
        @include('amarta_pure.layouts.footer')
        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->

    </div><!-- page end -->


    <!-- Javascript -->
    <script src="{{ url('landing_page') }}/js/jquery-3.6.0.min.js"></script>
    <script src="{{ url('landing_page') }}/js/jquery-migrate-3.3.2.min.js"></script>
    <script src="{{ url('landing_page') }}/js/bootstrap.min.js"></script>
    <script src="{{ url('landing_page') }}/js/jquery.easing.js"></script>
    <script src="{{ url('landing_page') }}/js/jquery-waypoints.js"></script>
    <script src="{{ url('landing_page') }}/js/jquery-validate.js"></script>
    <script src="{{ url('landing_page') }}/js/jquery.prettyPhoto.js"></script>
    <script src="{{ url('landing_page') }}/js/slick.min.js"></script>
    <script src="{{ url('landing_page') }}/js/numinate.min.js"></script>
    <script src="{{ url('landing_page') }}/js/imagesloaded.min.js"></script>
    <script src="{{ url('landing_page') }}/js/jquery-isotope.js"></script>
    <script src="{{ url('landing_page') }}/js/circle-progress.min.js"></script>
    <script src="{{ url('landing_page') }}/js/main.js"></script>
    <!-- Javascript end-->

</body>

</html>