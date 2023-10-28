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
        <div class="container">
            <div class="loginbox mt-5">
                <div class="container mt-5">
                    <div class="login-right-wrap py-3 mt-5">
                        <p class="account-subtitle text-white text-bold py-2">Staff Register</p>
                        <form method="POST" class="form-row" action="{{ route('staff.register') }}">
                            <div class="row mt-5">
                                <div class="form-group col-lg-6 col-md-8 col-sm-12">
                                    <label class="form-control-label">First Name</label>
                                    <input name="firstName" class="form-control  @error('firstName') is-invalid @enderror" type="text">
                                </div>
                                <div class="form-group col-lg-6 col-md-8 col-sm-12">
                                    <label class="form-control-label">SurName</label>
                                    <input name="surname" class="form-control  @error('surname') is-invalid @enderror" type="text">
                                </div>
                                <div class="form-group col-lg-6 col-md-8 col-sm-12">
                                    <label class="form-control-label">Email Address</label>
                                    <input name="email" class="form-control  @error('email') is-invalid @enderror" type="email">
                                </div>
                                <div class="form-group col-lg-6 col-md-8 col-sm-12">
                                    <label class="form-control-label">phone Number</label>
                                    <input name="phoneN0" class="form-control  @error('phoneN0') is-invalid @enderror" type="tel">
                                </div>
                                <div class="form-group col-lg-6 col-md-8 col-sm-12">
                                    <label class="form-control-label">Password</label>
                                    <input name="password" class="form-control  @error('name') is-invalid @enderror" type="password">
                                </div>
                                <div class="form-group col-lg-6 col-md-8 col-sm-12">
                                    <label class="form-control-label">Confirm Password</label>
                                    <input name="password_confirm" class="form-control  @error('name') is-invalid @enderror" type="password">
                                </div>
                            </div>
                            <div class="form-group col-lg-6 col-md-8 col-sm-12 mb-0 mx-auto">
                                <button class="btn btn-lg btn-block btn-primary w-100 mx-auto" type="submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
        $(document).ready(function() {
            $(".sticky-wrapper").addClass('is-sticky');
        });

    </script>
</body>

</html>
