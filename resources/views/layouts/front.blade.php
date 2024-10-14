<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="description" content="Industry - Factory & Industrial HTML Template">
    <meta property="og:title" content="Industry - Factory & Industrial HTML Template">
    <meta property="og:description" content="Industry - Factory & Industrial HTML Template">
    <meta property="og:image" content="https://industry.dexignzone.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="/theme/images/new/icon/hyp-logo.ico" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="/theme/images/new/icon/hyp-logo.ico">

    <!-- PAGE TITLE HERE -->
    <title>H&P Solution Facilitators</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
 <script src="/theme/js/html5shiv.min.js"></script>
 <script src="/theme/js/respond.min.js"></script>
 <![endif]-->

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="/theme/css/plugins.css">
    <link rel="stylesheet" type="text/css" href="/theme/css/style.css">
    <link class="skin" rel="stylesheet" type="text/css" href="/theme/css/skin/skin-2.css">
    <link rel="stylesheet" type="text/css" href="/theme/css/templete.css">
    <!-- Google Font -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Playfair+Display:400,400i,700,700i,900,900i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap');
    </style>

    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="/theme/plugins/revolution/revolution/css/revolution.min.css">

</head>

<body id="bg">
    <div class="page-wraper">
        <div id="loading-area"></div>
        <!-- header -->
        <header class="site-header mo-left header navstyle2">
            <!-- main header -->
            <div class="sticky-header main-bar-wraper header-curve navbar-expand-lg">
                <div class="main-bar clearfix bg-primary">
                    <div class="container clearfix">
                        <!-- website logo -->
                        <div class="logo-header mostion logo-dark">
                            <a href="{{ url('/') }}"><img src="{{ asset('storage/theme/images/logo-03.png') }}"
                                    alt=""></a>
                        </div>
                        <!-- nav toggle button -->
                        <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <!-- extra nav -->
                        {{-- <div class="extra-nav">
                            <div class="extra-cell">
                                <button id="quik-search-btn" type="button" class="site-button-link"><i
                                        class="la la-search"></i></button>
                            </div>
                        </div>
                        <!-- Quik search -->
                        <div class="dlab-quik-search ">
                            <form action="#">
                                <input name="search" value="" type="text" class="form-control"
                                    placeholder="Type to search">
                                <span id="quik-search-remove"><i class="ti-close"></i></span>
                            </form>
                        </div> --}}
                        <!-- main nav -->
                        <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                            <div class="logo-header d-md-block d-lg-none">
                                <a href="{{ url('/') }}"><img
                                        src="{{ 'storage/theme/images/hyp-logo-oscuro.png' }}" alt=""></a>
                            </div>
                            <ul class="nav navbar-nav">
                                <li class="has-mega-menu ">
                                    <a href="{{ url('/') }}">Inicio</a>
                                    <!--<ul class="mega-menu">
                                        <li>
                                            <a href="/theme/index-20.html">
                                                <img src="/theme/demo/pic20.jpg" alt="">
                                                <span>Home - Industry 2 <span class="badge">NEW</span></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/theme/index-19.html">
                                                <img src="/theme/demo/pic19.jpg" alt="">
                                                <span>Home - Industry 3 <span class="badge">NEW</span></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/theme/index-18.html">
                                                <img src="/theme/demo/pic18.jpg" alt="">
                                                <span>Home - Industry 4 <span class="badge">NEW</span></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/theme/index-17.html">
                                                <div class="image-new">
                                                    <img src="/theme/demo/pic17.jpg" alt="">
                                                </div>
                                                <span>Home - Industry 5 <span class="badge">NEW</span></span>
                                            </a>
                                        </li>
                                        <li><a href="/theme/index.html"><img src="/theme/demo/pic1.jpg"
                                                    alt=""><span>Home - Default</span></a></li>
                                        <li><a href="/theme/index-2.html"><img src="/theme/demo/pic2.jpg"
                                                    alt=""><span>Home - Oil/Gas Plant</span></a></li>
                                        <li><a href="/theme/index-3.html"><img src="/theme/demo/pic3.jpg"
                                                    alt=""><span>Home - Steel Plant</span></a></li>
                                        <li><a href="/theme/index-4.html"><img src="/theme/demo/pic4.jpg"
                                                    alt=""><span>Home - Factory</span></a></li>
                                        <li><a href="/theme/index-5.html"><img src="/theme/demo/pic5.jpg"
                                                    alt=""><span>Home - Construct</span></a></li>
                                        <li><a href="/theme/index-6.html"><img src="/theme/demo/pic6.jpg"
                                                    alt=""><span>Home - Solar Plant</span></a></li>
                                        <li><a href="/theme/index-7.html"><img src="/theme/demo/pic7.jpg"
                                                    alt=""><span>Home - Food Industry</span></a></li>
                                        <li><a href="/theme/index-8.html"><img src="/theme/demo/pic8.jpg"
                                                    alt=""><span>Home - Agriculture</span></a></li>
                                        <li><a href="/theme/index-9.html"><img src="/theme/demo/pic9.jpg"
                                                    alt=""><span>Home - Ship Industry</span></a></li>
                                        <li><a href="/theme/index-10.html"><img src="/theme/demo/pic10.jpg"
                                                    alt=""><span>Home - Leather Industry</span></a></li>
                                        <li><a href="/theme/index-11.html"><img src="/theme/demo/pic11.jpg"
                                                    alt=""><span>Home - Nuclear Plant</span></a></li>
                                        <li><a href="/theme/index-12.html"><img src="/theme/demo/pic12.jpg"
                                                    alt=""><span>Home - Beer Factory</span></a></li>
                                        <li><a href="/theme/index-13.html"><img src="/theme/demo/pic13.jpg"
                                                    alt=""><span>Home - Mining Industry</span></a></li>
                                        <li><a href="/theme/index-14.html"><img src="/theme/demo/pic14.jpg"
                                                    alt=""><span>Home - Car Industry</span></a></li>
                                        <li><a href="/theme/index-15.html"><img src="/theme/demo/pic15.jpg"
                                                    alt=""><span>Home - Plastic Industry</span></a></li>
                                        <li><a href="/theme/index-16.html"><img src="/theme/demo/pic16.jpg"
                                                    alt=""><span>Home - Event Industry</span></a></li>
                                    </ul>
                                </li>-->
                                    <!--<li>
                                    <a href="/theme/javascript:;">Features<i class="fas fa-chevron-down"></i></a>
                                    <ul class="sub-menu tab-content">
                                        <li>
                                            <a href="/theme/javascript:;">Header Light <i
                                                    class="fas fa-angle-right"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="/theme/header-style-1.html">Header 1</a></li>
                                                <li><a href="/theme/header-style-2.html">Header 2</a></li>
                                                <li><a href="/theme/header-style-3.html">Header 3</a></li>
                                                <li><a href="/theme/header-style-4.html">Header 4</a></li>
                                                <li><a href="/theme/header-style-5.html">Header 5</a></li>
                                                <li><a href="/theme/header-style-6.html">Header 6</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/theme/javascript:;">Header Dark <i
                                                    class="fas fa-angle-right"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="/theme/header-style-dark-1.html">Header 1</a></li>
                                                <li><a href="/theme/header-style-dark-2.html">Header 2</a></li>
                                                <li><a href="/theme/header-style-dark-3.html">Header 3</a></li>
                                                <li><a href="/theme/header-style-dark-4.html">Header 4</a></li>
                                                <li><a href="/theme/header-style-dark-5.html">Header 5</a></li>
                                                <li><a href="/theme/header-style-dark-6.html">Header 6</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/theme/javascript:;">Footer <i
                                                    class="fas fa-angle-right"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="/theme/footer-1.html">Footer 1 </a></li>
                                                <li><a href="/theme/footer-2.html">Footer 2</a></li>
                                                <li><a href="/theme/footer-3.html">Footer 3</a></li>
                                                <li><a href="/theme/footer-4.html">Footer 4</a></li>
                                                <li><a href="/theme/footer-5.html">Footer 5</a></li>
                                                <li><a href="/theme/footer-6.html">Footer 6</a></li>
                                                <li><a href="/theme/footer-7.html">Footer 7</a></li>
                                                <li><a href="/theme/footer-8.html">Footer 8</a></li>
                                                <li><a href="/theme/footer-9.html">Footer 9</a></li>
                                                <li><a href="/theme/footer-10.html">Footer 10</a></li>
                                                <li><a href="/theme/footer-11.html">Footer 11</a></li>
                                                <li><a href="/theme/footer-12.html">Footer 12</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>-->
                                    <!--<li class="has-mega-menu"> <a href="/theme/javascript:;">Pages<i
                                            class="fas fa-chevron-down"></i></a>
                                    <ul class="mega-menu">
                                        <li>
                                            <a href="/theme/javascript:;">Pages</a>
                                            <ul>
                                                <li><a href="/theme/about-1.html">About us 1</a></li>
                                                <li><a href="/theme/about-2.html">About us 2</a></li>
                                                <li><a href="/theme/services-1.html">Services 1</a></li>
                                                <li><a href="/theme/services-2.html">Services 2</a></li>
                                                <li><a href="/theme/services-agricultural-processing.html">agricultural
                                                        process<span class="badge">NEW</span></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/theme/javascript:;">Pages</a>
                                            <ul>
                                                <li><a href="/theme/services-power-energy.html">Power and energy<span
                                                            class="badge">NEW</span></a></li>
                                                <li><a href="/theme/services-oil-lubricant.html">oil and lubricant<span
                                                            class="badge">NEW</span></a></li>
                                                <li><a href="/theme/services-materials-engineering.html">materials
                                                        engineering<span class="badge">NEW</span></a></li>
                                                <li><a href="/theme/services-chemical-research.html">chemical &
                                                        research<span class="badge">NEW</span></a></li>
                                                <li><a href="/theme/services-alternate-energy.html">alternate
                                                        energy<span class="badge">NEW</span></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/theme/javascript:;">Pages</a>
                                            <ul>
                                                <li><a href="/theme/team-1.html">Team 1</a></li>
                                                <li><a href="/theme/team-2.html">Team 2</a></li>
                                                <li><a href="/theme/faq-1.html">Faqs 1</a></li>
                                                <li><a href="/theme/faq-2.html">Faqs 2</a></li>
                                                <li><a href="/theme/portfolio-grid-2.html">portfolio Grid 2</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/theme/javascript:;">Pages</a>
                                            <ul>
                                                <li><a href="/theme/portfolio-grid-3.html">Portfolio Grid 3</a></li>
                                                <li><a href="/theme/portfolio-grid-4.html">Portfolio Grid 4</a></li>
                                                <li><a href="/theme/portfolio-details.html">Portfolio Details</a></li>
                                                <li><a href="/theme/error-403.html">Error 403</a></li>
                                                <li><a href="/theme/error-404.html">Error 404</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/theme/javascript:;">Pages</a>
                                            <ul>
                                                <li><a href="/theme/error-405.html">Error 405</a></li>
                                                <li><a href="/theme/coming-soon-1.html">Coming Soon 1</a></li>
                                                <li><a href="/theme/coming-soon-2.html">Coming Soon 2</a></li>
                                                <li><a href="/theme/help-desk.html">Help Desk</a></li>
                                                <li><a href="/theme/privacy-policy.html">Privacy Policy</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>-->
                                    <!--<li>
                                    <a href="/theme/javascript:;">Shop<i class="fas fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="/theme/shop.html">Shop</a></li>
                                        <li><a href="/theme/shop-sidebar.html">Shop Sidebar</a></li>
                                        <li><a href="/theme/shop-product-details.html">Product Details</a></li>
                                        <li><a href="/theme/shop-cart.html">Cart</a></li>
                                        <li><a href="/theme/shop-wishlist.html">Wishlist</a></li>
                                        <li><a href="/theme/shop-checkout.html">Checkout</a></li>
                                        <li><a href="/theme/shop-login.html">Login</a></li>
                                        <li><a href="/theme/shop-register.html">Register</a></li>
                                    </ul>
                                </li>
                                <li class="has-mega-menu"> <a href="/theme/javascript:;">Blog<i
                                            class="fas fa-chevron-down"></i></a>
                                    <ul class="mega-menu">
                                        <li> <a href="/theme/javascript:;">Blog</a>
                                            <ul>
                                                <li><a href="/theme/blog-half-img.html">Half image</a></li>
                                                <li><a href="/theme/blog-half-img-sidebar.html">Half image sidebar</a>
                                                </li>
                                                <li><a href="/theme/blog-half-img-left-sidebar.html">Half image sidebar
                                                        left</a></li>
                                                <li><a href="/theme/blog-large-img.html">Large image</a></li>
                                            </ul>
                                        </li>
                                        <li> <a href="/theme/javascript:;">Blog</a>
                                            <ul>
                                                <li><a href="/theme/blog-large-img-sidebar.html">Large image
                                                        sidebar</a></li>
                                                <li><a href="/theme/blog-large-img-left-sidebar.html">Large image
                                                        sidebar left</a></li>
                                                <li><a href="/theme/blog-grid-2.html">Grid 2</a></li>
                                                <li><a href="/theme/blog-grid-2-sidebar.html">Grid 2 sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li> <a href="/theme/javascript:;">Blog</a>
                                            <ul>
                                                <li><a href="/theme/blog-grid-2-sidebar-left.html">Grid 2 sidebar
                                                        left</a></li>
                                                <li><a href="/theme/blog-grid-3.html">Grid 3</a></li>
                                                <li><a href="/theme/blog-grid-3-sidebar.html">Grid 3 sidebar</a></li>
                                                <li><a href="/theme/blog-grid-3-sidebar-left.html">Grid 3 sidebar
                                                        left</a></li>
                                            </ul>
                                        </li>
                                        <li> <a href="/theme/javascript:;">Blog</a>
                                            <ul>
                                                <li><a href="/theme/blog-grid-4.html">Grid 4</a></li>
                                                <li><a href="/theme/blog-single.html">Single</a></li>
                                                <li><a href="/theme/blog-single-sidebar.html">Single sidebar</a></li>
                                                <li><a href="/theme/blog-single-left-sidebar.html">Single sidebar
                                                        left</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>-->
                                    <!--<li class="has-mega-menu"> <a href="/theme/javascript:;">Element<i
                                            class="fas fa-chevron-down"></i></a>
                                    <ul class="mega-menu">
                                        <li><a href="/theme/javascript:;">Element</a>
                                            <ul>
                                                <li><a href="/theme/shortcode-buttons.html"><i class="ti-mouse"></i>
                                                        Buttons</a></li>
                                                <li><a href="/theme/shortcode-icon-box-styles.html"><i
                                                            class="ti-layout-grid2"></i> Icon box styles</a></li>
                                                <li><a href="/theme/shortcode-pricing-table.html"><i
                                                            class="ti-layout-grid2-thumb"></i> Pricing table</a></li>
                                                <li><a href="/theme/shortcode-toggles.html"><i
                                                            class="ti-layout-accordion-separated"></i> Toggles</a></li>
                                                <li><a href="/theme/shortcode-team.html"><i class="ti-user"></i>
                                                        Team</a></li>
                                                <li><a href="/theme/shortcode-animation-effects.html"><i
                                                            class="ti-layers-alt"></i> Animation Effects</a></li>
                                            </ul>
                                        </li>
                                        <li> <a href="/theme/javascript:;">Element</a>
                                            <ul>
                                                <li><a href="/theme/shortcode-carousel-sliders.html"><i
                                                            class="ti-layout-slider"></i> Carousel sliders</a></li>
                                                <li><a href="/theme/shortcode-image-box-content.html"><i
                                                            class="ti-image"></i> Image box content</a></li>
                                                <li><a href="/theme/shortcode-tabs.html"><i
                                                            class="ti-layout-tab-window"></i> Tabs</a></li>
                                                <li><a href="/theme/shortcode-counters.html"><i class="ti-timer"></i>
                                                        Counters</a></li>
                                                <li><a href="/theme/shortcode-shop-widgets.html"><i
                                                            class="ti-shopping-cart"></i> Shop Widgets</a></li>
                                                <li><a href="/theme/shortcode-filters.html"><i
                                                            class="ti-check-box"></i> Gallery Filters</a></li>
                                            </ul>
                                        </li>
                                        <li> <a href="/theme/javascript:;">Element</a>
                                            <ul>
                                                <li><a href="/theme/shortcode-accordians.html"><i
                                                            class="ti-layout-accordion-list"></i> Accordians</a></li>
                                                <li><a href="/theme/shortcode-dividers.html"><i
                                                            class="ti-layout-list-post"></i> Dividers</a></li>
                                                <li><a href="/theme/shortcode-images-effects.html"><i
                                                            class="ti-layout-media-overlay"></i> Images effects</a>
                                                </li>
                                                <li><a href="/theme/shortcode-testimonials.html"><i
                                                            class="ti-comments"></i> Testimonials</a></li>
                                                <li><a href="/theme/shortcode-pagination.html"><i class="ti-more"></i>
                                                        Pagination</a></li>
                                                <li><a href="/theme/shortcode-alert-box.html"><i class="ti-alert"></i>
                                                        Alert box</a></li>
                                            </ul>
                                        </li>
                                        <li> <a href="/theme/javascript:;">Element</a>
                                            <ul>
                                                <li><a href="/theme/shortcode-icon-box.html"><i
                                                            class="ti-layout-media-left-alt"></i> Icon Box</a></li>
                                                <li><a href="/theme/shortcode-list-group.html"><i class="ti-list"></i>
                                                        List group</a></li>
                                                <li><a href="/theme/shortcode-title-separators.html"><i
                                                            class="ti-layout-line-solid"></i> Title Separators</a></li>
                                                <li><a href="/theme/shortcode-all-widgets.html"><i
                                                            class="ti-widgetized"></i> Widgets</a></li>
                                                <li><a href="/theme/shortcode-carousel-sliders.html"><i
                                                            class="ti-layout-slider"></i> Carousel sliders</a></li>
                                                <li><a href="/theme/shortcode-image-box-content.html"><i
                                                            class="ti-image"></i> Image box content</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>-->
                                <li class=" has-mega-menu ">
                                    <a href="{{ url('/contact') }}">Contactanos</a>
                                    {{-- <ul class="sub-menu right">
                                        <li><a href="/theme/contact-1.html">Contact us 1</a></li>
                                        <li><a href="/theme/contact-2.html">Contact us 2</a></li>
                                        <li><a href="/theme/contact-3.html">Contact us 3</a></li>
                                        <li><a href="/theme/contact-4.html">Contact us 4</a></li>
                                    </ul> --}}
                                </li>
                            </ul>
                            <div class="dlab-social-icon ind-social">
                                <ul>
                                    <li><a class="site-button-link facebook fab fa-facebook-f"
                                            href="https://www.facebook.com/hypsolutionfacilitators/"></a>
                                    </li>
                                    <li><a class="site-button-link linkedin fab fa-linkedin-in"
                                            href="https://www.linkedin.com/in/rodrigo-cl-5100702b2/?originalSubdomain=mx"></a>
                                    </li>
                                    {{-- <li><a class="site-button-link twitter fab fa-twitter"
                                            href="/theme/javascript:void(0);"></a></li>
                                    <li><a class="site-button-link instagram fab fa-instagram"
                                            href="/theme/javascript:void(0);"></a></li> --}}
                                </ul>
                                <p>2022 Industry</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main header END -->
        </header>
        <!-- header END -->

        <!-- Content -->
        <div class="page-content bg-white">
            @yield('content')
        </div>
        <!-- Content END -->
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-top"
                style="background-image:url({{ asset('storage/theme/images/bg3.png') }}); background-size: cover;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-5 col-xl-2 col-lg-2 col-sm-6 footer-col-4">
                            <div class="widget widget_services border-0">
                                <h5 class="footer-title text-white">Compañia</h5>
                                <ul>
                                    <li><a href="{{ url('/about') }}">About Us</a></li>
                                    {{-- <li><a href="/theme/blog-grid-2.html">Blog</a></li>
                                    <li><a href="/theme/services-1.html">Services</a></li>
                                    <li><a href="/theme/privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="/theme/portfolio-details.html">Projects </a></li> --}}
                                </ul>
                            </div>
                        </div>
                        {{-- <div class="col-md-3 col-7 col-xl-2 col-lg-3 col-sm-6 footer-col-4">
                            <div class="widget widget_services border-0">
                                <h5 class="footer-title text-white">Useful Link</h5>
                                <ul>
                                    <li><a href="/theme/help-desk.html">Help Desk </a></li>
                                    <li><a href="/theme/shop.html">Shop</a></li>
                                    <li><a href="/theme/contact-1.html">Contact</a></li>
                                    <li><a href="/theme/portfolio-details.html">Portfolio</a></li>
                                    <li><a href="/theme/team-1.html">Team</a></li>
                                </ul>
                            </div>
                        </div> --}}
                        <div class="col-md-6 col-xl-4 col-lg-3 col-sm-6 footer-col-4">
                            <div class="widget widget_getintuch">
                                <h5 class="footer-title text-white">Contactanos</h5>
                                <ul>
                                    <li><i class="ti-location-pin"></i><strong>Direccion</strong> Blvd. Fundadores 3751
                                        Bodega 5 Col. Valle de las Flores C.P. 25150, Saltillo Coahuila, Mexico </li>
                                    <li><i class="ti-mobile"></i><strong>Telefono</strong><a
                                            href="/theme/tel:+4733378901">8446797552 </a></li>
                                    <li><i class="ti-email"></i><strong>E-mail</strong><a
                                            href="/theme/mailto:someone@example.com">heber.gaona@hypsolution.com.mx</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-4 col-lg-4 footer-col-4 ">
                            {{-- <div class="widget">
                                <h5 class="footer-title text-white">Subscribe To Our Newsletter</h5>
                                <p class="text-capitalize m-b20">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry has been the industry's standard dummy text ever since the..
                                </p>
                                <div class="subscribe-form form-white m-b20">
                                    <form class="dzSubscribe" action="script/mailchamp.php" method="post">
                                        <div class="dzSubscribeMsg"></div>
                                        <div class="input-group">
                                            <input name="dzEmail" required="required" class="form-control"
                                                placeholder="Your Email Id" type="email">
                                            <span class="input-group-btn">
                                                <button name="submit" value="Submit" type="submit"
                                                    class="site-button radius-xl btnhover16">Subscribe</button>
                                            </span>
                                        </div>
                                    </form>
                                </div> --}}
                            <h5 class="footer-title text-white">Sigue Nuestras Redes</h5>
                            <ul class="list-inline m-a0">
                                <li><a href="https://www.facebook.com/hypsolutionfacilitators/"
                                        class="site-button facebook circle "><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="https://www.linkedin.com/in/rodrigo-cl-5100702b2/?originalSubdomain=mx"
                                        class="site-button linkedin circle "><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                {{-- <li><a href="/theme/javascript:void(0);" class="site-button google-plus circle "><i
                                            class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="/theme/javascript:void(0);" class="site-button linkedin circle "><i
                                            class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="/theme/javascript:void(0);" class="site-button instagram circle "><i
                                            class="fab fa-instagram"></i></a></li>
                                <li><a href="/theme/javascript:void(0);" class="site-button twitter circle "><i
                                            class="fab fa-twitter"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- footer bottom part -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 text-left "> <span>Copyright © <span class="current-year">2024</span> <a
                            href="/theme/https://dexignzone.com/" target="_blank">DexignZone</a>. all rights
                        reserved.</span> </div>
                <div class="col-md-6 col-sm-6 text-right ">
                    <div class="widget-link ">
                        <ul>
                            <li><a href="{{ url('/about') }}"> About</a></li>
                            {{-- <li><a href="/theme/help-desk.html"> Help Desk</a></li> --}}
                            <li><a href="/theme/privacy-policy.html"> Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </footer>
    <!-- Footer END-->
    <button class="scroltop style1 white icon-up" type="button"><i class="fas fa-arrow-up"></i></button>
    </div>
    <!-- JAVASCRIPT FILES ========================================= -->
    <!-- JAVASCRIPT FILES ========================================= -->
    <script src="/theme/js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
    <script src="/theme/plugins/wow/wow.js"></script><!-- WOW JS -->

    <script src="/theme/plugins/bootstrap/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="/theme/plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
    <script src="/theme/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
    <script src="/theme/plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
    <script src="/theme/plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
    <script src="/theme/plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
    <script src="/theme/plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
    <script src="/theme/plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
    <script src="/theme/plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
    <script src="/theme/plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
    <script src="/theme/plugins/lightgallery/js/lightgallery-all.min.js"></script><!-- Lightgallery -->
    <script src="/theme/plugins/scroll/scrollbar.min.js"></script><!-- scroll -->
    <script src="/theme/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
    <script src="/theme/js/dz.carousel.min.js"></script><!-- SORTCODE FUCTIONS  -->
    <script src="/theme/plugins/countdown/jquery.countdown.js"></script><!-- COUNTDOWN FUCTIONS  -->
    <script src="/theme/js/dz.ajax.js"></script><!-- CONTACT JS  -->


    <script src="/theme/js/jquery.lazy.min.js"></script>
    <!-- REVOLUTION JS FILES -->
    <script src="/theme/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="/theme/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="/theme/plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="/theme/plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="/theme/plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="/theme/plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="/theme/plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="/theme/plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="/theme/plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="/theme/plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="/theme/js/rev.slider.js"></script>
    <script>
        jQuery(document).ready(function() {
            'use strict';
            dz_rev_slider_1();
            $('.lazy').Lazy();
        }); /*ready*/
    </script>
    <script>
        $(document).ready(function() {

            var sync1 = $("#sync1");
            var sync2 = $("#sync2");
            var slidesPerPage = 4; //globaly define number of elements per page
            var syncedSecondary = true;

            sync1.owlCarousel({
                items: 1,
                nav: true,
                autoplaySpeed: 3000,
                navSpeed: 3000,
                paginationSpeed: 3000,
                slideSpeed: 3000,
                smartSpeed: 3000,
                autoplay: 3000,
                dots: false,
                loop: true,
                responsiveRefreshRate: 200,
                navText: ['<i class="la la-angle-left"></i>', '<i class="la la-angle-right"></i>'],
            }).on('changed.owl.carousel', syncPosition);

            sync2.on('initialized.owl.carousel', function() {
                sync2.find(".owl-item").eq(0).addClass("current");
            }).owlCarousel({
                items: slidesPerPage,
                dots: false,
                nav: false,
                margin: 20,
                autoplaySpeed: 3000,
                navSpeed: 3000,
                paginationSpeed: 3000,
                slideSpeed: 3000,
                smartSpeed: 3000,
                autoplay: 3000,
                slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
                responsiveRefreshRate: 100,
                responsive: {
                    0: {
                        items: 2
                    },
                    480: {
                        items: 2
                    },
                    768: {
                        items: 3
                    },
                    1024: {
                        items: 4
                    },
                    1400: {
                        items: 4
                    }
                }
            }).on('changed.owl.carousel', syncPosition2);

            function syncPosition(el) {
                //if you set loop to false, you have to restore this next line
                //var current = el.item.index;

                //if you disable loop you have to comment this block
                var count = el.item.count - 1;
                var current = Math.round(el.item.index - (el.item.count / 2) - .5);

                if (current < 0) {
                    current = count;
                }
                if (current > count) {
                    current = 0;
                }

                //end block

                sync2
                    .find(".owl-item")
                    .removeClass("current")
                    .eq(current)
                    .addClass("current");
                var onscreen = sync2.find('.owl-item.active').length - 1;
                var start = sync2.find('.owl-item.active').first().index();
                var end = sync2.find('.owl-item.active').last().index();

                if (current > end) {
                    sync2.data('owl.carousel').to(current, 100, true);
                }
                if (current < start) {
                    sync2.data('owl.carousel').to(current - onscreen, 100, true);
                }
            }

            function syncPosition2(el) {
                if (syncedSecondary) {
                    var number = el.item.index;
                    sync1.data('owl.carousel').to(number, 100, true);
                }
            }

            sync2.on("click", ".owl-item", function(e) {
                e.preventDefault();
                var number = $(this).index();
                //sync1.data('owl.carousel').to(number, 300, true);

                sync1.data('owl.carousel').to(number, 300, true);

            });
        });
    </script>
</body>

</html>
