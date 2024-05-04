<!DOCTYPE html>
<html lang="en">

<head>
    <title>Amarta Pure Water</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#83B8D9" />
    <meta property="og:title" content="Amarta Pure Water">
    <meta property="og:description" content="Merupakan perusahaan yang bergerak di bidang pengolahan air.">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:type" content="website" />

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ url('landing_page') }}/images/logo/logo_io/favicon.ico" type="image/png">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <link rel="stylesheet" type="text/css" href="{{url('pure_water')}}/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="{{url('pure_water')}}/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="{{url('pure_water')}}/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="{{url('pure_water')}}/css/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="{{url('pure_water')}}/css/themify-icons.css" />
    <link rel="stylesheet" type="text/css" href="{{url('pure_water')}}/css/slick.css">
    <link rel="stylesheet" type="text/css" href="{{url('pure_water')}}/css/prettyPhoto.css">
    <link rel="stylesheet" type="text/css" href="{{url('pure_water')}}/css/shortcodes.css" />
    <link rel="stylesheet" type="text/css" href="{{url('pure_water')}}/css/main.css" />
    <link rel="stylesheet" type="text/css" href="{{url('pure_water')}}/css/megamenu.css" />
    <link rel="stylesheet" type="text/css" href="{{url('pure_water')}}/css/responsive.css" />
    <link rel='stylesheet' id='rs-plugin-settings-css' href="{{url('pure_water')}}/revolution/css/rs6.css">

    <link rel="stylesheet" type="text/css" href="{{url('pure_water')}}/css/cleaning/shortcodes.css" />
    <link rel="stylesheet" type="text/css" href="{{url('pure_water')}}/css/cleaning/main.css" />
    <link rel="stylesheet" type="text/css" href="{{url('pure_water')}}/css/cleaning/responsive.css" />


</head>


<body>

    <!--page start-->
    <div class="page">
        @include('pure_water.layouts.header')
        @yield('content')
        @include('pure_water.layouts.footer')
    </div><!-- page end -->


    <!-- Javascript -->

    <script src="{{url('pure_water')}}/js/jquery.min.js"></script>
    <script src="{{url('pure_water')}}/js/tether.min.js"></script>
    <script src="{{url('pure_water')}}/js/bootstrap.min.js"></script>
    <script src="{{url('pure_water')}}/js/jquery.easing.js"></script>
    <script src="{{url('pure_water')}}/js/jquery-waypoints.js"></script>
    <script src="{{url('pure_water')}}/js/jquery-validate.js"></script>
    <script src="{{url('pure_water')}}/js/jquery.prettyPhoto.js"></script>
    <script src="{{url('pure_water')}}/js/slick.min.js"></script>
    <script src="{{url('pure_water')}}/js/numinate.min.js"></script>
    <script src="{{url('pure_water')}}/js/imagesloaded.min.js"></script>
    <script src="{{url('pure_water')}}/js/jquery-isotope.js"></script>
    <script src="{{url('pure_water')}}/js/main.js"></script>

    <!-- Revolution Slider -->

    <script src="{{url('pure_water')}}/revolution/js/slider.js"></script>

    <script src="{{url('pure_water')}}/revolution/js/revolution.tools.min.js"></script>
    <script src="{{url('pure_water')}}/revolution/js/rs6.min.js"></script>

    <!-- Javascript end-->

</body>

</html>