<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="Akui Women's College" />
    <meta property="og:title" content="Akui Women's College" />
    <meta property="og:description" content="Akui Women's College" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="" />

    <!-- PAGE TITLE HERE -->
    <title>Akui Women's College</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/front/css/plugins.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/front/css/style.css')}}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{url('assets/front/css/skin/skin-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/front/css/templete.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/front/css/star-rating-svg.css')}}">
    <!-- Google Font -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Playfair+Display:400,400i,700,700i,900,900i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap');

    </style>

    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/front/plugins/revolution/revolution/css/revolution.min.css')}}">

</head>
<body id="bg">
    <div class="page-wraper">
        <div id="loading-area"></div>
        <!-- end preloader -->
        <!--  top bar -->
        @include('front.resource.top-head')
        <!--  end top bar -->
        <!--  navigation -->
        @include('front.resource.menu')
        <!--  end navigation -->
        @yield('content')
        <!--  footer -->
        @include('front.resource.footer')
    </div>
    <!-- JAVASCRIPT FILES ========================================= -->
    <script src="{{url('assets/front/js/jquery.min.js')}}"></script>
    <!-- JQUERY.MIN JS -->
    <script src="{{url('assets/front/plugins/wow/wow.js')}}"></script>
    <!-- WOW JS -->
    <script src="{{url('assets/front/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- BOOTSTRAP.MIN JS -->
    <script src="{{url('assets/front/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
    <!-- FORM JS -->
    <script src="{{url('assets/front/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script>
    <!-- FORM JS -->
    <script src="{{url('assets/front/plugins/magnific-popup/magnific-popup.js')}}"></script>
    <!-- MAGNIFIC POPUP JS -->
    <script src="{{url('assets/front/plugins/counter/waypoints-min.js')}}"></script>
    <!-- WAYPOINTS JS -->
    <script src="{{url('assets/front/plugins/counter/counterup.min.js')}}"></script>
    <!-- COUNTERUP JS -->
    <script src="{{url('assets/front/plugins/imagesloaded/imagesloaded.js')}}"></script>
    <!-- IMAGESLOADED -->
    <script src="{{url('assets/front/plugins/masonry/masonry-3.1.4.js')}}"></script>
    <!-- MASONRY -->
    <script src="{{url('assets/front/plugins/masonry/masonry.filter.js')}}"></script>
    <!-- MASONRY -->
    <script src="{{url('assets/front/plugins/owl-carousel/owl.carousel.js')}}"></script>
    <!-- OWL SLIDER -->
    <script src="{{url('assets/front/plugins/lightgallery/js/lightgallery-all.min.js')}}"></script>
    <!-- Lightgallery -->
    <script src="{{url('assets/front/plugins/scroll/scrollbar.min.js')}}"></script>
    <!-- scroll -->
    <script src="{{url('assets/front/js/custom.js')}}"></script>
    <!-- CUSTOM FUCTIONS  -->
    <script src="{{url('assets/front/js/dz.carousel.min.js')}}"></script>
    <!-- SORTCODE FUCTIONS  -->
    <script src="{{url('assets/front/plugins/countdown/jquery.countdown.js')}}"></script>
    <!-- COUNTDOWN FUCTIONS  -->
    <script src="{{url('assets/front/js/dz.ajax.js')}}"></script>
    <!-- CONTACT JS  -->
    <script src="{{url('assets/front/plugins/rangeslider/rangeslider.js')}}"></script>
    <!-- Rangeslider -->
    <script src="{{url('assets/front/js/jquery.lazy.min.js')}}"></script>
    <script src="{{url('assets/front/js/jquery.star-rating-svg.js')}}"></script>
    <!-- REVOLUTION JS FILES -->
    <script src="{{url('assets/front/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{url('assets/front/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{url('assets/front/plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{url('assets/front/plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{url('assets/front/plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{url('assets/front/plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{url('assets/front/plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{url('assets/front/plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{url('assets/front/plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{url('assets/front/plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script src="{{url('assets/front/js/rev.slider.js')}}"></script>
    <script src="{{url('assets/vendor/sweetalert/sweetalert.all.js')}}"></script>
    @include('sweetalert::alert')
    <script>
        jQuery(document).ready(function() {
            'use strict';
            dz_rev_slider_2();
            $('.lazy').Lazy();
        }); /*ready*/

    </script>
</body>

</html>
