<!doctype html>
<html lang="en">

<head>
    <title>Cash Manager Plus @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/aos.css')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/images/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/images/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/images/favicons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset('frontend/images/favicons/site.webmanifest')}}">
    <link rel="mask-icon" href="{{ asset('frontend/images/favicons/safari-pinned-tab.svg')}}" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
    <style>
        .site-section {
            padding: 3em 0;
            padding-bottom: 0;
        }

        .site-blocks-cover h1 {
            font-size: 2rem;
        }

        sticky-wrapper.is-sticky .site-navbar .site-logo a {
            color: #963cbd;
            font-weight: 600;
        }

        .sticky-wrapper.is-sticky .site-navbar .site-logo a {
            color: #963cbd;
        }

        .site-blocks-cover .desc {
            font-size: 1rem;
            font-weight: 500;
        }

        .slide {
            margin-top: 17rem;
        }

        .single-text .owl-dots {
            margin-top: 1rem;
            text-align: center;
        }

        .site-navbar .site-navigation .site-menu>li>a {
            padding: 20px 30px;
            color: #000;
            display: inline-block;
            text-decoration: none !important;
            font-size: 18px;
        }

        .sticky-wrapper .site-navbar .site-menu>li>a {
            color: rgba(255, 255, 255, 1) !important;
        }

        .site-blocks-cover.overlay:before {
            background: rgba(0, 0, 0, 0.5);
        }

    </style>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-site-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <div class="site-wrap">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
        <x-frontend.navigation-menu />
        @yield('content')
        <x-footer />
    </div> <!-- .site-wrap -->
    <script src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery-ui.js')}}"></script>
    <script src="{{asset('frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('frontend/js/aos.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('frontend/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
    @yield('script')
    <script>
        window.addEventListener('scroll', function() {
            var scrollPosition = window.scrollY;
            var stickyWrapper = document.getElementById("sticky-wrapper");
            var siteLogoImg = document.querySelector(".site-logo img");
            if (scrollPosition >= 100 || (stickyWrapper && stickyWrapper.classList.contains("is-sticky"))) {
                siteLogoImg.src = "/frontend/images/logo/logo-sticky.png";
            } else {
                siteLogoImg.src = "/frontend/images/logo/logod.png";
            }
        });

    </script>
</body>

</html>
