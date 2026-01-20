<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title ?? 'YIOGS - Home' }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" type="image/svg" sizes="56x56" href="{{ asset('front_end/assets/images/fav-icon/icon.png') }}">

    <link rel="stylesheet" href="{{ asset('front_end/assets/css/bootstrap.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('front_end/assets/css/owl.carousel.min.css') }}" type="text/css"
        media="all">
    <link rel="stylesheet" href="{{ asset('front_end/assets/css/animate.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('front_end/assets/css/animated-text.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('front_end/assets/css/all.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('front_end/assets/css/flaticon.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('front_end/assets/css/theme-default.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('front_end/assets/css/meanmenu.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('front_end/assets/css/owl.transitions.css') }}" type="text/css"
        media="all">
    <link rel="stylesheet" href="{{ asset('front_end/venobox/venobox.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('front_end/assets/css/bootstrap-icons.css') }}" type="text/css"
        media="all">
    <link rel="stylesheet" href="{{ asset('front_end/assets/css/style.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('front_end/assets/css/responsive.css') }}" type="text/css" media="all">
    <script src="{{ asset('front_end/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
</head>

<body class="{{ request()->is('/') ? 'home-page' : 'inner-page' }}">

    <!-- loader -->
    <div class="loader-wrapper">
        <span class="loader"></span>
        <div class="loder-section left-section"></div>
        <div class="loder-section right-section"></div>
    </div>


    <!--==================================================-->
    <!-- Start Echofy Top Header Area -->
    <!--==================================================-->

    @include('partials.header')

    <!--==================================================-->
    <!-- End Main Menu Area -->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start Main COntent Area -->
    <!--==================================================-->

    {{ $slot }}

    @stack('scripts')

    <!--==================================================-->
    <!-- End Main Content area -->
    <!--==================================================-->




    <!--==================================================-->
    <!-- Strat Echofy Footer Area-->
    <!--==================================================-->
    @include('partials.footer')
    <!--==================================================-->
    <!-- End Echofy Footer Area-->
    <!--==================================================-->


    <!--==================================================-->
    <!-- End Echofy search-popup Area-->
    <!--==================================================-->
    <div class="search-popup">
        <button class="close-search style-two"><span class="flaticon-multiply"><i
                    class="far fa-times-circle"></i></span></button>
        <button class="close-search"><i class="bi bi-arrow-up"></i></button>
        <form method="post" action="#">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
    <!--==================================================-->
    <!-- End Echofy search-popup Area-->
    <!--==================================================-->



    <!--==================================================-->
    <!-- Start scrollup section Section -->
    <!--==================================================-->
    <div class="prgoress_indicator active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 0;">
            </path>
        </svg>
    </div>
    <!--==================================================-->
    <!-- End scrollup section Section -->
    <!--==================================================-->


    <script src="{{ asset('front_end/assets/js/vendor/jquery-3.6.2.min.js') }}"></script>
    <script src="{{ asset('front_end/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('front_end/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front_end/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front_end/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('front_end/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('front_end/assets/js/wow.js') }}"></script>
    <script src="{{ asset('front_end/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('front_end/venobox/venobox.js') }}"></script>

    <script src="{{ asset('front_end/assets/js/animated-text.js') }}"></script>
    <script src="{{ asset('front_end/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('front_end/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('front_end/assets/js/jquery.meanmenu.js') }}"></script>

    <script src="{{ asset('front_end/assets/js/jquery.scrollUp.js') }}"></script>
    <script src="{{ asset('front_end/assets/js/theme.js') }}"></script>
    <script src="{{ asset('front_end/assets/js/coustom.js') }}"></script>
    <script src="{{ asset('front_end/assets/js/jquery.barfiller.js') }}"></script>
    <script src="{{ asset('front_end/assets/js/vanilla-tilt.min.js') }}"></script>
    <script src="{{ asset('front_end/assets/js/silik-slider.js') }}"></script>

</body>

</html>
