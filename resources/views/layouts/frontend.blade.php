<!DOCTYPE html>
<html class="no-js" lang="tr">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="@yield('author', $settings['author'])">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/frontend/media/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/vendor/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/vendor/sal.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/vendor/green-audio-player.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/vendor/odometer-theme-default.css') }}">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/app.css') }}">
    @stack('customCss')

</head>

<body class="sticky-header">
    <a href="#main-wrapper" id="backto-top" class="back-to-top">
        <i class="far fa-angle-double-up"></i>
    </a>

    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->


    <div id="main-wrapper" class="main-wrapper">

        <!--=====================================-->
        <!--=        Header Area Start       	=-->
        <!--=====================================-->
        <header class="header axil-header header-style-2">
            <div id="axil-sticky-placeholder"></div>
            <div class="axil-mainmenu">
                <div class="container-fluid">
                    <div class="header-navbar">
                        <div class="header-main-nav">
                            <!-- Start Mainmanu Nav -->
                            <nav class="mainmenu-nav" id="mobilemenu-popup">
                                <div class="d-block d-lg-none">
                                    <div class="mobile-nav-header">
                                        <div class="mobile-nav-logo">
                                            <a href="/anasayfa">
                                                <img class="light-mode"
                                                    src="{{ asset('assets/frontend/media/logo-.svg') }}"
                                                    alt="Site Logo">
                                                <img class="dark-mode"
                                                    src="{{ asset('assets/frontend/media/logo-.svg') }}"
                                                    alt="Site Logo">
                                            </a>
                                        </div>
                                        <button class="mobile-menu-close" data-bs-dismiss="offcanvas"><i
                                                class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                <ul class="mainmenu">
                                    @foreach ($menus as $menu)
                                        <li><a href="{{ $menu->route }}">{{ $menu->name }}</a></li>
                                    @endforeach
                                </ul>
                            </nav>
                            <!-- End Mainmanu Nav -->
                        </div>
                        <div class="header-action">
                            <ul class="list-unstyled">
                                <li class="sidemenu-btn d-lg-none">
                                    <button class="btn-wrap" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasMenuRight">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')
        <!--=====================================-->
        <!--=        Banner Area Start          =-->
        <!--=====================================-->

        <!--=====================================-->
        <!--=        Project Area Start         =-->
        <!--=====================================-->

        <!--=====================================-->
        <!--=        Brand Area Start       	=-->
        <!--=====================================-->

        <!--=====================================-->
        <!--=        Blog Area Start       	    =-->
        <!--=====================================-->

        <!--=====================================-->
        <!--=====================================-->
        <!--=       Testimonial Area Start      =-->
        <!--=====================================-->

        <!--=====================================-->
        <!--=        Footer Area Start       	=-->
        <!--=====================================-->
        <footer class="footer-area">
            <div class="container">
                <div class="footer-bottom" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-copyright">
                                <span class="copyright-text">© 2021. All rights reserved by <a
                                        href="@yield('websiteurl', $settings['websiteurl'])">zehrasenakgul</a>.</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-bottom-link">
                                <ul class="social-share " style="list-style: none">
                                    <li><a href="@yield('github', $settings['github'])"><i class="fab fa-github"></i></a></li>
                                    <li><a href="@yield('linkedin', $settings['linkedin'])"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="@yield('instagram', $settings['instagram'])"><i class="fab fa-instagram"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <!--=====================================-->
        <!--=       Offcanvas Menu Area       	=-->
        <!--=====================================-->
        <div class="offcanvas offcanvas-end header-offcanvasmenu " tabindex="-1" id="offcanvasMenuRight" role="dialog">
            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="row ">
                    <div class="col-lg-5 col-xl-6">
                        <ul class="main-navigation list-unstyled">
                            @foreach ($menus as $menu)
                                <li><a href="{{ $menu->route }}">{{ $menu->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery Js -->
    <script src="{{ asset('assets/frontend/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/jquery-appear.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/sal.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/js.cookie.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/jquery.style.switcher.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/tilt.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/green-audio-player.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/vendor/jquery.nav.js') }}"></script>

    <!-- Site Scripts -->
    <script src="{{ asset('assets/frontend/js/app.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('customJs')

</body>


</html>
