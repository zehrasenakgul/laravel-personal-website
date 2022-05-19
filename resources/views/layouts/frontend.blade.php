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
                        <div class="header-logo">
                            <a href="/anasayfa"><img class="light-version-logo"
                                    src="{{ asset('assets/frontend/media/logo-2.svg') }}" alt="logo"></a>
                            <a href="/anasayfa"><img class="dark-version-logo"
                                    src="{{ asset('assets/frontend/media/logo-3.svg') }}" alt="logo"></a>
                        </div>
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
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Digital Agency</a>
                                        <ul class="axil-submenu">
                                            <li><a href="anasayfa">Digital Agency</a></li>
                                            <li><a href="index-2.html">Creative Agency</a></li>
                                            <li><a href="index-3.html">Personal Portfolio</a></li>
                                            <li><a href="index-4.html">Home Startup</a></li>
                                            <li><a href="index-5.html">Corporate Agency</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Services</a>
                                        <ul class="axil-submenu">
                                            <li><a href="service.html">Service</a></li>
                                            <li><a href="service-2.html">Service Two</a></li>
                                            <li><a href="service-design.html">Service Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Portfolio</a>
                                        <ul class="axil-submenu">
                                            <li><a href="portfolio.html">Two Column</a></li>
                                            <li><a href="portfolio-2.html">Three Column</a></li>
                                            <li><a href="portfolio-3.html">Four Column</a></li>
                                            <li><a href="portfolio-4.html">Three Column Width</a></li>
                                            <li><a href="portfolio-5.html">Four Column Width</a></li>
                                            <li><a href="single-portfolio.html">Portfolio Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Pages</a>
                                        <ul class="axil-submenu">
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="our-office.html">Our Office</a></li>
                                            <li><a href="case-study.html">Case Study</a></li>
                                            <li><a href="single-case-study.html">Case Study Details</a></li>
                                            <li><a href="team.html">Team</a></li>
                                            <li><a href="single-team.html">Team Details</a></li>
                                            <li><a href="our-clients.html">Our Clients</a></li>
                                            <li><a href="testimonial.html">Testimonial</a></li>
                                            <li><a href="pricing-table.html">Pricing Table</a></li>
                                            <li><a href="typography.html">Typography</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Blog</a>
                                        <ul class="axil-submenu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="single-blog.html">Standard Post</a></li>
                                            <li><a href="single-blog-gallery.html">Gallery Post</a></li>
                                            <li><a href="single-blog-video.html">Video Post</a></li>
                                            <li><a href="single-blog-audio.html">Audio Post</a></li>
                                            <li><a href="single-blog-quote.html">Quote Post</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
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
                <div class="footer-top">
                    <div class="footer-social-link">
                        <ul class="list-unstyled">
                            <li><a href="https://facebook.com/" data-sal="slide-up" data-sal-duration="500"
                                    data-sal-delay="100"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/" data-sal="slide-up" data-sal-duration="500"
                                    data-sal-delay="200"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.pinterest.com/" data-sal="slide-up" data-sal-duration="500"
                                    data-sal-delay="300"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="https://www.linkedin.com/" data-sal="slide-up" data-sal-duration="500"
                                    data-sal-delay="400"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="https://www.instagram.com/" data-sal="slide-up" data-sal-duration="500"
                                    data-sal-delay="500"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://vimeo.com/" data-sal="slide-up" data-sal-duration="500"
                                    data-sal-delay="600"><i class="fab fa-vimeo-v"></i></a></li>
                            <li><a href="https://dribbble.com/" data-sal="slide-up" data-sal-duration="500"
                                    data-sal-delay="700"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="https://www.behance.net/" data-sal="slide-up" data-sal-duration="500"
                                    data-sal-delay="800"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-main">
                    <div class="row">
                        <div class="col-xl-6 col-lg-5" data-sal="slide-right" data-sal-duration="800"
                            data-sal-delay="100">
                            <div class="footer-widget border-end">
                                <div class="footer-newsletter">
                                    <h2 class="title">Get in touch!</h2>
                                    <p>Fusce varius, dolor tempor interdum tristique, dui urna bib endum magna, ut
                                        ullamcorper purus</p>
                                    <form>
                                        <div class="input-group">
                                            <input type="email" class="form-control" placeholder="Email address">
                                            <button class="subscribe-btn" type="submit">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7" data-sal="slide-left" data-sal-duration="800"
                            data-sal-delay="100">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="footer-widget">
                                        <h6 class="widget-title">Services</h6>
                                        <div class="footer-menu-link">
                                            <ul class="list-unstyled">
                                                <li><a href="service-design.html">Logo &amp; Branding</a></li>
                                                <li><a href="service-development.html">Website Development</a></li>
                                                <li><a href="service-development.html">Mobile App Development</a></li>
                                                <li><a href="service-marketing.html">Search Engine Optimization</a></li>
                                                <li><a href="service-marketing.html">Pay-Per-Click</a></li>
                                                <li><a href="service-marketing.html">Social Media Marketing</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="footer-widget">
                                        <h6 class="widget-title">Resourses</h6>
                                        <div class="footer-menu-link">
                                            <ul class="list-unstyled">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="case-study.html">Case Studies</a></li>
                                                <li><a href="portfolio.html">Portfolio</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="footer-widget">
                                        <h6 class="widget-title">Support</h6>
                                        <div class="footer-menu-link">
                                            <ul class="list-unstyled">
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                                <li><a href="terms-of-use.html">Terms of Use</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-copyright">
                                <span class="copyright-text">© 2021. All rights reserved by <a
                                        href="https://axilthemes.com/">Axilthemes</a>.</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-bottom-link">
                                <ul class="list-unstyled">
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="terms-of-use.html">Terms of Use</a></li>
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
        <div class="offcanvas offcanvas-end header-offcanvasmenu " tabindex="-1" id="offcanvasMenuRight"role="dialog">
            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="row ">
                    <div class="col-lg-5 col-xl-6">
                        <ul class="main-navigation list-unstyled">
                            <li><a href="index-1.html">Digital Agency</a></li>
                            <li><a href="index-2.html">Creative Agency</a></li>
                            <li><a href="index-3.html" class="active">Personal Portfolio</a></li>
                            <li><a href="index-4.html">Home Startup</a></li>
                            <li><a href="index-5.html">Corporate Agency</a></li>
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
