<header class="site-navbar js-sticky-header site-navbar-target" role="banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-3 col-xl-3">
                <h1 class="mb-0 site-logo"><a href="/" class="h2 mb-0"><img
                            src="{{ asset('frontend/images/logo/logod.png') }}" height="40px" alt="logo head.png"></a>
                </h1>
            </div>
            <div class="col-9 col-md-9 d-none d-xl-block">
                <nav class="site-navigation position-relative text-right" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                        {{-- <li><a href="#home-section" class="nav-link">Home</a></li>  --}}
                        <li class="has-children">
                            <a href="#about-section" class="nav-link">About Us</a>
                            <ul class="dropdown">
                                <li><a href="#team-section" class="nav-link">Team</a></li>
                                @guest('admin')
                                    <li><a href="{{ route('admin.login') }}" class="nav-link">Administrator</a></li>
                                @endguest
                                @auth('admin')
                                    <li><a href="{{ route('admin.dashboard') }}" class="nav-link">My Dashboard</a></li>
                                @endauth
                            </ul>
                        </li>
                        <li><a href="#blog-section" class="nav-link">Internal Communiation</a></li>
                        <li class="has-children">
                            <a href="#" class="nav-link callto-action">Staff</a>
                            <ul class="dropdown">
                                @guest('staff')
                                    <li><a href="{{ route('staff.login') }}" class="nav-link">Sign In</a></li>
                                    <li><a href="{{ route('staff.register') }}" class="nav-link">Register</a></li>
                                @endguest
                                @auth('staff')
                                    <li><a href="#" class="nav-link">Dashbaord</a></li>
                                @endauth
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#" class="nav-link callto-action">Tenants</a>
                            <ul class="dropdown">
                                @guest
                                    <li><a href="{{ route('residents.login') }}" class="nav-link">Sign In</a></li>
                                    <li><a href="{{ route('residents.register-form') }}" class="nav-link">Sign Up</a></li>

                                @endguest
                                @auth
                                    <li><a href="#" class="nav-link">Dashbaord</a></li>
                                @endauth
                            </ul>
                        </li>
                        <li><a href="#contact-section" class="nav-link">Support</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-9 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a
                    href="#" class="site-menu-toggle js-menu-toggle float-right"><span
                        class="icon-menu h3"></span></a></div>
        </div>
    </div>
</header>
