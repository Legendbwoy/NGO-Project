<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="DynamicLayers">

    <title>Charitify || NGO/Charity/Fundraising Template</title>

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

    <!-- Font Awesome Icons CSS -->
    <link rel="stylesheet" href="{{ asset('website/css/font-awesome.min.css') }}">
    <!-- Themify Icons CSS -->
    <link rel="stylesheet" href="{{ asset('website/css/themify-icons.css') }}">
    <!-- Elegant Font Icons CSS -->
    <link rel="stylesheet" href="{{ asset('website/css/elegant-font-icons.css') }}">
    <!-- Elegant Line Icons CSS -->
    <link rel="stylesheet" href="{{ asset('website/css/elegant-line-icons.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('website/css/bootstrap.min.css') }}">
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="{{ asset('website/css/venobox/venobox.css') }}">
    <!-- OWL-Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('website/css/owl.carousel.css') }}">
    <!-- Slick Nav CSS -->
    <link rel="stylesheet" href="{{ asset('website/css/slicknav.min.css') }}">
    <!-- Css Animation CSS -->
    <link rel="stylesheet" href="{{ asset('website/css/css-animation.min.css') }}">
    <!-- Nivo Slider CSS -->
    <link rel="stylesheet" href="{{ asset('website/css/nivo-slider.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('website/css/main.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('website/css/responsive.css') }}">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    {{-- <div class="site-preloader-wrap">
        <div class="spinner"></div>
    </div><!-- Preloader --> --}}

    <!-- Header Section -->
    @include('frontend.layouts.header')
    <!-- /Header Section -->


    @yield('content')

    <!-- Footer Start -->
    @include('frontend.layouts.footer')
    <!-- Footer End -->

    <a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>

    <!-- jQuery Lib -->
    <script src="{{ asset('website/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('website/js/vendor/bootstrap.min.js') }}"></script>
    <!-- Tether JS -->
    <script src="{{ asset('website/js/vendor/tether.min.js') }}"></script>
    <!-- Imagesloaded JS -->
    <script src="{{ asset('website/js/vendor/imagesloaded.pkgd.min.js') }}"></script>
    <!-- OWL-Carousel JS -->
    <script src="{{ asset('website/js/vendor/owl.carousel.min.js') }}"></script>
    <!-- isotope JS -->
    <script src="{{ asset('website/js/vendor/jquery.isotope.v3.0.2.js') }}"></script>
    <!-- Smooth Scroll JS -->
    <script src="{{ asset('website/js/vendor/smooth-scroll.min.js') }}"></script>
    <!-- venobox JS -->
    <script src="{{ asset('website/lib/wow/wow.min.js') }}"></script>
    <!-- ajaxchimp JS -->
    <script src="{{ asset('website/js/vendor/jquery.ajaxchimp.min.js') }}"></script>
    <!-- Counterup JS -->
    <script src="{{ asset('website/js/vendor/jquery.counterup.min.js') }}"></script>
    <!-- waypoints js -->
    <script src="{{ asset('website/js/vendor/jquery.waypoints.v2.0.3.min.js') }}"></script>
    <!-- Slick Nav JS -->
    <script src="{{ asset('website/js/vendor/jquery.slicknav.min.js') }}"></script>
    <!-- Nivo Slider JS -->
    <script src="{{ asset('website/js/vendor/jquery.nivo.slider.pack.js') }}"></script>
    <!-- Letter Animation JS -->
    <script src="{{ asset('website/js/vendor/letteranimation.min.js') }}"></script>
    <!-- Wow JS -->
    <script src="{{ asset('website/js/vendor/wow.min.js') }}"></script>
    <!-- Contact JS -->
    <script src="{{ asset('website/js/contact.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('website/js/main.js') }}"></script>

    <script>
    document.getElementById('search-icon').addEventListener('click', function() {
        var form = document.getElementById('search-form');
        if (form.style.display === 'none' || form.style.display === '') {
            form.style.display = 'block';
            form.querySelector('.search-input').focus();
        } else {
            form.style.display = 'none';
        }
    });
</script>

</body>

</html>
