<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>YUSUF ADE FURNITURE</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('frontend/assets/images/favicon.ico') }}" type="img/x-icon" rel="shortcut icon">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/iconfont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/helper.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <script src="{{ asset('frontend/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>
<body>

    <div id="main-wrapper">

        <!--Header section start-->
        <header class="header header-transparent header-sticky  d-lg-block d-none">
            <div class="header-deafult-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2 col-md-4 col-4">
                            <img src="frontend/assets/images/payment.png" alt="">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-4 d-none d-lg-block col-12">
                            <!--Header Menu Area Start-->
                            <div class="header-menu-area text-center">
                                <nav class="main-menu">
                                    <ul>
                                        <li><a href="index.html">YUSUF ADE FURNITURE</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="index.html"></a>
                                                </li>
                                            </ul>
                                        </li>
                                </nav>
                            </div>
                            <!--Header Menu Area End-->
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-5 col-12">
                            <!--Header Search And Mini Cart Area Start-->
                            <div class="header-search-cart-area">
                                <ul>
                                    <li><a class="header-search-toggle" href="#"><i class="flaticon-magnifying-glass"></i></a></li>
                                    <li class="currency-menu"><a href="#"><i class="flaticon-user"></i></a>
                                        <!--Crunccy dropdown-->
                                        <ul class="currency-dropdown">
                                            <!--Language Currency Start-->
                                            <li><a href="#">language</a>
                                                <ul>
                                                    <li class="active">
                                                        <a href="#"><img src="frontend/assets/images/icons/en-gb.png" alt="">English</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!--Language Currency End-->
                                            <!--USD Currency Start-->
                                            <li><a href="#">Currency</a>
                                                <ul>
                                                    <li><a href="#"># NAIRA</a></li>
                                                </ul>
                                            </li>
                                            <!--USD Currency End-->
                                            <!--Account Currency Start-->
                                        </ul>
                                    </li>
                                    <!--Account Currency End-->
                                </ul>
                                <!--Crunccy dropdown-->
                                </li>
                                <!--Mini Cart Dropdown End-->
                                </li>
                                </ul>
                            </div>
                            <!--Header Search And Mini Cart Area End-->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--Header section end-->

        <!--Header Mobile section start-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-bottom menu-right">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="header-mobile-navigation d-block d-lg-none">
                                <div class="row align-items-center">
                                    <div class="col-6 col-md-6">
                                        <div class="header-logo">
                                            <a href="index.html">
                                                <img src="frontend/assets/images/HR.png." class="img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <div class="mobile-navigation text-end">
                                            <div class="header-icon-wrapper">
                                                <ul class="icon-list justify-content-end">
                                                    <li>
                                                        <div class="header-cart-icon">
                                                            <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="mobile-menu-icon" id="mobile-menu-trigger"><i class="fa fa-bars"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Mobile Menu start-->
                    <div class="row">
                        <div class="col-12 d-flex d-lg-none">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                    <!--Mobile Menu end-->

                </div>
            </div>
        </header>
        <!--Header Mobile section end-->

        <!-- Offcanvas Menu Start -->
        <div class="offcanvas-mobile-menu d-block d-lg-none" id="offcanvas-mobile-menu">
            <a href="javascript:void(0)" class="offcanvas-menu-close" id="offcanvas-menu-close-trigger">
                <i class="fa fa-times"></i>
            </a>

            <div class="offcanvas-wrapper">

                <div class="offcanvas-inner-content">
                    <div class="offcanvas-mobile-search-area">
                        <form action="#">
                            <input type="search" placeholder="Search ...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <nav class="offcanvas-navigation">
                        <ul>
                            <li class="menu-item-has-children"><a href="#">Home</a>
                                <ul class="submenu2">
                                    <li><a href="index.html">Home 01</a></li>
                                    <li><a href="index-2.html">Home 02</a></li>
                                </ul>
                    </nav>
                    </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#">CURRENCY: NAIRA </a>
                        <ul class="submenu2">
                            <li><a href="javascript:void(0)"># NAIRA</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#">LANGUAGE: ENG</a>
                        <ul class="submenu2">
                            <li>
                                <a href="javascript:void(0)"><img src="frontend/assets/images/icons/en-gb.png" alt=""> English</a>
                            </li>
                        </ul>
                    </li>
                    </ul>
                    </nav>
                </div>

                <div class="offcanvas-widget-area">
                    <div class="off-canvas-contact-widget">
                        <div class="header-contact-info">
                            <ul class="header-contact-info-list">
                                <li><i class="ion-android-phone-portrait"></i> <a href="tel://12452456012">{+234} 8023078661 </a></li>
                                <li><i class="ion-android-mail"></i> <a href="mailto:info@yourdomain.com">sundayyusufadekoya@gmail.com.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Off Canvas Widget Social Start-->
                    <div class="off-canvas-widget-social">
                        <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                    </div>
                    <!--Off Canvas Widget Social End-->
                </div>
            </div>
        </div>

    </div>
    <!-- Offcanvas Menu End -->

    <!-- main-search start -->
    <div class="main-search-active">
        <div class="sidebar-search-icon">
            <button class="search-close"><i class="fa fa-times"></i></button>
        </div>
        <div class="sidebar-search-input">
            <form action="#">
                <div class="form-search">
                    <input id="search" class="input-text" value="" placeholder="" type="search">
                    <button>
                            <i class="fa fa-search"></i>
                        </button>
                </div>
            </form>
            <p class="form-description">Hit enter to search or ESC to close</p>
        </div>
    </div>
    <!-- main-search start -->

    <!--slider section start-->
    <div class="hero-section section position-relative">
        <div class="hero-slider section">

            <!--Hero Item start-->
            <div class="hero-item  bg-image" data-bg="frontend/assets/images/hero/hero1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">

                            <!--Hero Content start-->
                            <div class="hero-content-2 center">

                                <h2>Creative Design <br> Modern & Exclusive Furniture</h2>
                                <a href="shop.html" class="btn">Y.A FURNITURE</a>

                            </div>
                            <!--Hero Content end-->

                        </div>
                    </div>
                </div>
            </div>
            <!--Hero Item end-->
            <div class="hero-content-2 center">

                <h2>Creative Design <br> Modern & Exclusive Furniture</h2>
                <a href="shop.html" class="btn">SHOP NOW</a>

            </div>
            <!--Hero Content end-->

        </div>
    </div>
    <!--Hero Item end-->

    </div>
    </div>
    <!--slider section end-->

    <!-- Banner section start -->
    <div class="banner-section section pt-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-14">
                    <!-- Single Banner Start -->
                    <div class="single-banner-item mb-30">
                        <div class="banner-image">
                            <a href="shop.html">
                                <img src="frontend/assets/images/banner/banner16.jpg" alt="">
                            </a>
                        </div>
                        <div class="banner-content">
                            <h3 class="title">OFFICE <br> FURNITURE</h3>
                        </div>
                    </div>
                    <!-- Single Banner End -->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <!-- Single Banner Start -->
                    <div class="single-banner-item mb-30">
                        <div class="banner-image">
                            <a href="shop-left-sidebar.html">
                                <img src="frontend/assets/images/banner/banner11.jpg" alt="">
                            </a>
                        </div>
                        <div class="banner-content tr-right">
                            <h3 class="title">HOME <br> FURNITURE</h3>
                        </div>
                    </div>
                    <!-- Single Banner End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Banner section End -->

    <!--Product section start-->
    <div class="product-section section pt-70 pt-lg-50 pt-md-40 pt-sm-30 pt-xs-20 pb-55 pb-lg-35 pb-md-25 pb-sm-15 pb-xs-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-title text-center mb-15">
                        <h2>Popular Furniture</h2>
                    </div>
                    <div class="product-tab mb-50 mb-sm-30 mb-xs-20">
                        <ul class="nav" role="tablist">
                            <li role="presentation">
                                <button class="active show" type="button" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" role="tab" aria-controls="home" aria-selected="true">
                                    OUR PROUCT
                                    </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div id="home" class="tab-pane fade active show" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-8">
                            <!--  Single Grid product Start -->
                            <div class="single-grid-product mb-40">
                                <div class="product-image">
                                    <div class="product-label">

                                    </div>
                                    <a href="single-product.html">
                                        <img src="frontend/assets/images/product/product2 (2).jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title">
                                        <a href="single-product.html">KITCHEN CABINET</a>
                                    </h3>
                                    <p class="product-price"><span class="discounted-price"></span>
                                </div>
                            </div>
                            <!--  Single Grid product End -->
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-8">
                            <!--  Single Grid product Start -->
                            <div class="single-grid-product mb-40">
                                <div class="product-image">
                                    <div class="product-label">
                                    </div>
                                    <a href="single-product.html">
                                        <img src="frontend/assets/images/product/product6.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"> <a href="single-product.html">DINNING TABLE</a></h3>
                                </div>
                            </div>
                            <!--  Single Grid product End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!--  Single Grid product Start -->
                            <div class="single-grid-product mb-40">
                                <div class="product-image">
                                    <div class="product-label">
                                    </div>
                                    <a href="single-product.html">
                                        <img src="frontend/assets/images/product/product-7.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title">
                                        <a href="single-product.html">CUSHION</a>
                                    </h3>
                                    <p class="product-price"><span class="discounted-price"></span> <span class="main-price discounted"></span></p>
                                </div>
                            </div>
                            <!--  Single Grid product End -->
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-7">
                            <!--  Single Grid product Start -->
                            <div class="single-grid-product mb-40">
                                <div class="product-image">
                                    <a href="single-product.html">
                                        <img src="frontend/assets/images/product/product8.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title">
                                        <a href="single-product.html">TV STAND</a>
                                    </h3>
                                    <p class="product-price"><span class="discounted-price"></span> <span class="main-price discounted"></span></p>
                                </div>
                            </div>
                            <!--  Single Grid product End -->
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-7">
                            <!--  Single Grid product Start -->
                            <div class="single-grid-product mb-40">
                                <div class="product-image">
                                    <div class="product-label">
                                        <span class="sale"></span>
                                    </div>
                                    <a href="single-product.html">
                                        <img src="frontend/assets/images/product/product4.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title">
                                        <a href="single-product.html">DOOR</a>
                                    </h3>
                                    <p class="product-price"><span class="discounted-price"></span></p>
                                </div>
                            </div>
                            <!--  Single Grid product End -->
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <!--  Single Grid product Start -->
                            <div class="single-grid-product mb-40">
                                <div class="product-image">
                                    <div class="product-label">
                                        <span class="sale"></span>
                                    </div>
                                    <a href="single-product.html">
                                        <img src="frontend/assets/images/product/product9.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title">
                                        <a href="single-product.html">WARDRROBE</a>
                                    </h3>
                                    <p class="product-price"><span class="discounted-price"></span> <span class="main-price discounted"></span></p>
                                </div>
                            </div>
                            <!--  Single Grid product End -->
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <!--  Single Grid product Start -->
                            <div class="single-grid-product mb-40">
                                <div class="product-image">
                                    <a href="single-product.html">
                                        <img src="frontend/assets/images/product/product10.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title">
                                        <a href="single-product.html">DRESSING MIRROR</a>
                                    </h3>
                                    <p class="product-price"><span class="discounted-price"></span> <span class="main-price discounted"></span></p>
                                </div>
                            </div>
                            <!--  Single Grid product End -->
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <!--  Single Grid product Start -->
                            <div class="single-grid-product mb-40">
                                <div class="product-image">
                                    <a href="single-product.html">
                                        <img src="frontend/assets/images/product/product14.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title">
                                        <a href="single-product.html">CLASSIC BED</a>
                                    </h3>
                                    <p class="product-price"><span class="discounted-price"></span></p>
                                </div>
                            </div>
                            <!--  Single Grid product End -->
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <!--  Single Grid product Start -->
                            <div class="single-grid-product mb-40">
                                <div class="product-image">
                                    <div class="product-label">
                                        <span class="sale"></span>
                                    </div>
                                    <a href="single-product.html">
                                        <img src="frontend/assets/images/product/product.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-content">
                                    <h3 class="title">
                                        <a href="single-product.html">OFFICE TABLE</a>
                                    </h3>
                                    <p class="product-price"><span class="discounted-price"></span> </p>
                                </div>
                            </div>
                            <!--  Single Grid product End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Product section end-->

    <!-- Banner section start -->
    <div class="banner-section section pb-40 pb-sm-30 pb-xs-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Single Banner Start -->
                </div>
                <!-- Single Banner End -->
            </div>
        </div>
    </div>
    </div>
    <!-- Banner section End -->

    <!--Features section start-->
    <div class="features-section section pt-30 pt-lg-15 pt-md-0 pt-sm-0 pt-xs-15">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6">
                    <!-- Single Feature Start -->
                    <div class="single-feature mb-30">
                        <div class="feature-image">
                            <img src="frontend/assets/images/icons/feature-1.png" class="img-fluid" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Home delivery</h4>
                            <p class="short-desc">Delivery Worldwide</p>
                        </div>
                    </div><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>YUSUF ADE FURNITURE</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('frontend/assets/images/favicon.ico') }}" type="img/x-icon" rel="shortcut icon">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/iconfont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/helper.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <script src="{{ asset('frontend/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>
<body>

    <div id="main-wrapper">

        <!--Header section start-->
        <header class="header header-transparent header-sticky  d-lg-block d-none">
            <div class="header-deafult-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2 col-md-4 col-4">
                            <img src="frontend/assets/images/payment.png" alt="">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-4 d-none d-lg-block col-12">
                            <!--Header Menu Area Start-->
                            <div class="header-menu-area text-center">
                                <nav class="main-menu">
                                    <ul>
                                        <li><a href="index.html">YUSUF ADE FURNITURE</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="index.html"></a>
                                                </li>
                                            </ul>
                                        </li>
                                </nav>
                            </div>
                            <!--Header Menu Area End-->
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-5 col-12">
                            <!--Header Search And Mini Cart Area Start-->
                            <div class="header-search-cart-area">
                                <ul>
                                    <li><a class="header-search-toggle" href="#"><i class="flaticon-magnifying-glass"></i></a></li>
                                    <li class="currency-menu"><a href="#"><i class="flaticon-user"></i></a>
                                        <!--Crunccy dropdown-->
                                        <ul class="currency-dropdown">
                                            <!--Language Currency Start-->
                                            <li><a href="#">language</a>
                                                <ul>
                                                    <li class="active">
                                                        <a href="#"><img src="frontend/assets/images/icons/en-gb.png" alt="">English</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!--Language Currency End-->
                                            <!--USD Currency Start-->
                                            <li><a href="#">Currency</a>
                                                <ul>
                                                    <li><a href="#"># NAIRA</a></li>
                                                </ul>
                                            </li>
                                            <!--USD Currency End-->
                                            <!--Account Currency Start-->
                                        </ul>
                                    </li>
                                    <!--Account Currency End-->
                                </ul>
                                <!--Crunccy dropdown-->
                                </li>
                                <!--Mini Cart Dropdown End-->
                                </li>
                                </ul>
                            </div>
                            <!--Header Search And Mini Cart Area End-->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--Header section end-->

        <!--Header Mobile section start-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-bottom menu-right">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="header-mobile-navigation d-block d-lg-none">
                                <div class="row align-items-center">
                                    <div class="col-6 col-md-6">
                                        <div class="header-logo">
                                            <a href="index.html">
                                                <img src="frontend/assets/images/HR.png." class="img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <div class="mobile-navigation text-end">
                                            <div class="header-icon-wrapper">
                                                <ul class="icon-list justify-content-end">
                                                    <li>
                                                        <div class="header-cart-icon">
                                                            <a href="cart.html"><i class="flaticon-shopping-cart"></i></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="mobile-menu-icon" id="mobile-menu-trigger"><i class="fa fa-bars"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Mobile Menu start-->
                    <div class="row">
                        <div class="col-12 d-flex d-lg-none">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                    <!--Mobile Menu end-->

                </div>
            </div>
        </header>
        <!--Header Mobile section end-->

        <!-- Offcanvas Menu Start -->
        <div class="offcanvas-mobile-menu d-block d-lg-none" id="offcanvas-mobile-menu">
            <a href="javascript:void(0)" class="offcanvas-menu-close" id="offcanvas-menu-close-trigger">
                <i class="fa fa-times"></i>
            </a>

            <div class="offcanvas-wrapper">

                <div class="offcanvas-inner-content">
                    <div class="offcanvas-mobile-search-area">
                        <form action="#">
                            <input type="search" placeholder="Search ...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <nav class="offcanvas-navigation">
                        <ul>
                            <li class="menu-item-has-children"><a href="#">Home</a>
                                <ul class="submenu2">
                                    <li><a href="index.html">Home 01</a></li>
                                    <li><a href="index-2.html">Home 02</a></li>
                                </ul>
                    </nav>
                    </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#">CURRENCY: NAIRA </a>
                        <ul class="submenu2">
                            <li><a href="javascript:void(0)"># NAIRA</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#">LANGUAGE: ENG</a>
                        <ul class="submenu2">
                            <li>
                                <a href="javascript:void(0)"><img src="frontend/assets/images/icons/en-gb.png" alt=""> English</a>
                            </li>
                        </ul>
                    </li>
                    </ul>
                    </nav>
                </div>

                <div class="offcanvas-widget-area">
                    <div class="off-canvas-contact-widget">
                        <div class="header-contact-info">
                            <ul class="header-contact-info-list">
                                <li><i class="ion-android-phone-portrait"></i> <a href="tel://12452456012">{+234} 8023078661 </a></li>
                                <li><i class="ion-android-mail"></i> <a href="mailto:info@yourdomain.com">sundayyusufadekoya@gmail.com.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Off Canvas Widget Social Start-->
                    <div class="off-canvas-widget-social">
                        <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                    </div>
                    <!--Off Canvas Widget Social End-->
                </div>
            </div>
        </div>

    </div>
    <!-- Offcanvas Menu End -->

    <!-- main-search start -->
    <div class="main-search-active">
        <div class="sidebar-search-icon">
            <button class="search-close"><i class="fa fa-times"></i></button>
        </div>
        <div class="sidebar-search-input">
            <form action="#">
                <div class="form-search">
                    <input id="search" class="input-text" value="" placeholder="" type="search">
                    <button>
                            <i class="fa fa-search"></i>
                        </button>
                </div>
            </form>
            <p class="form-description">Hit enter to search or ESC to close</p>
        </div>
    </div>
    <!-- main-search start -->

    <!--slider section start-->
    <div class="hero-section section position-relative">
        <div class="hero-slider section">

            <!--Hero Item start-->
            <div class="hero-item  bg-image" data-bg="frontend/assets/images/hero/hero1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">

                            <!--Hero Content start-->
                            <div class="hero-content-2 center">

                                <h2>Creative Design <br> Modern & Exclusive Furniture</h2>
                                <a href="shop.html" class="btn">Y.A FURNITURE</a>

                            </div>
                            <!--Hero Content end-->

                        </div>
                    </div>
                </div>
            </div>
            <!--Hero Item end-->
            <div class="hero-content-2 center">

                <h2>Creative Design <br> Modern & Exclusive Furniture</h2>
                <a href="shop.html" class="btn">SHOP NOW</a>

            </div>
            <!--Hero Content end-->

        </div>
    </div>
    <!--Hero Item end-->

    </div>
    </div>
    <!--slider section end-->

    <!-- Banner section start -->
    <div class="banner-section section pt-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-14">
                    <!-- Single Banner Start -->
                    <div class="single-banner-item mb-30">
                        <div class="banner-image">
                            <a href="shop.html">
                                <img src="frontend/assets/images/banner/banner16.jpg" alt="">
                            </a>
                        </div>
                        <div class="banner-content">
                            <h3 class="title">OFFICE <br> FURNITURE</h3>
                        </div>
                    </div>
                    <!-- Single Banner End -->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <!-- Single Banner Start -->
                    <div class="single-banner-item mb-30">
                        <div class="banner-image">
                            <a href="shop-left-sidebar.html">
                                <img src="frontend/assets/images/banner/banner11.jpg" alt="">
                            </a>
                        </div>
                        <div class="banner-content tr-right">
                            <h3 class="title">HOME <br> FURNITURE</h3>
                        </div>
                    </div>
                    <!-- Single Banner End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Banner section End -->

    <!--Product section start-->
    <div class="product-section section pt-70 pt-lg-50 pt-md-40 pt-sm-30 pt-xs-20 pb-55 pb-lg-35 pb-md-25 pb-sm-15 pb-xs-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-title text-center mb-15">
                        <h2>Popular Furniture</h2>
                    </div>
                    <div class="product-tab mb-50 mb-sm-30 mb-xs-20">
                        <ul class="nav" role="tablist">
                            <li role="presentation">
                                <button class="active show" type="button" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" role="tab" aria-controls="home" aria-selected="true">
                                    OUR PROUCT
                                    </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div id="home" class="tab-pane fade active show" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-8">
                            <!--  Single Grid product Start -->
                            <div class="single-grid-product mb-40">
                                <div class="product-image">
                                    <div class="product-label">

                                    </div>
                                    <a href="single-product.html">
                                        <img src="frontend/assets/images/product/product2 (2).jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title">
                                        <a href="single-product.html">KITCHEN CABINET</a>
                                    </h3>
                                    <p class="product-price"><span class="discounted-price"></span>
                                </div>
                            </div>
                            <!--  Single Grid product End -->
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-8">
                            <!--  Single Grid product Start -->
                            <div class="single-grid-product mb-40">
                                <div class="product-image">
                                    <div class="product-label">
                                    </div>
                                    <a href="single-product.html">
                                        <img src="frontend/assets/images/product/product6.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"> <a href="single-product.html">DINNING TABLE</a></h3>
                                </div>
                            </div>
                            <!--  Single Grid product End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!--  Single Grid product Start -->
                            <div class="single-grid-product mb-40">
                                <div class="product-image">
                                    <div class="product-label">
                                    </div>
                                    <a href="single-product.html">
                                        <img src="frontend/assets/images/product/product-7.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title">
                                        <a href="single-product.html">CUSHION</a>
                                    </h3>
                                    <p class="product-price"><span class="discounted-price"></span> <span class="main-price discounted"></span></p>
                                </div>
                            </div>
                            <!--  Single Grid product End -->
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-7">
                            <!--  Single Grid product Start -->
                            <div class="single-grid-product mb-40">
                                <div class="product-image">
                                    <a href="single-product.html">
                                        <img src="frontend/assets/images/product/product8.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title">
                                        <a href="single-product.html">TV STAND</a>
                                    </h3>
                                    <p class="product-price"><span class="discounted-price"></span> <span class="main-price discounted"></span></p>
                                </div>
                            </div>
                            <!--  Single Grid product End -->
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-7">
                            <!--  Single Grid product Start -->
                            <div class="single-grid-product mb-40">
                                <div class="product-image">
                                    <div class="product-label">
                                        <span class="sale"></span>
                                    </div>
                                    <a href="single-product.html">
                                        <img src="frontend/assets/images/product/product4.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title">
                                        <a href="single-product.html">DOOR</a>
                                    </h3>
                                    <p class="product-price"><span class="discounted-price"></span></p>
                                </div>
                            </div>
                            <!--  Single Grid product End -->
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <!--  Single Grid product Start -->
                            <div class="single-grid-product mb-40">
                                <div class="product-image">
                                    <div class="product-label">
                                        <span class="sale"></span>
                                    </div>
                                    <a href="single-product.html">
                                        <img src="frontend/assets/images/product/product9.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title">
                                        <a href="single-product.html">WARDRROBE</a>
                                    </h3>
                                    <p class="product-price"><span class="discounted-price"></span> <span class="main-price discounted"></span></p>
                                </div>
                            </div>
                            <!--  Single Grid product End -->
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <!--  Single Grid product Start -->
                            <div class="single-grid-product mb-40">
                                <div class="product-image">
                                    <a href="single-product.html">
                                        <img src="frontend/assets/images/product/product10.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title">
                                        <a href="single-product.html">DRESSING MIRROR</a>
                                    </h3>
                                    <p class="product-price"><span class="discounted-price"></span> <span class="main-price discounted"></span></p>
                                </div>
                            </div>
                            <!--  Single Grid product End -->
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <!--  Single Grid product Start -->
                            <div class="single-grid-product mb-40">
                                <div class="product-image">
                                    <a href="single-product.html">
                                        <img src="frontend/assets/images/product/product14.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title">
                                        <a href="single-product.html">CLASSIC BED</a>
                                    </h3>
                                    <p class="product-price"><span class="discounted-price"></span></p>
                                </div>
                            </div>
                            <!--  Single Grid product End -->
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <!--  Single Grid product Start -->
                            <div class="single-grid-product mb-40">
                                <div class="product-image">
                                    <div class="product-label">
                                        <span class="sale"></span>
                                    </div>
                                    <a href="single-product.html">
                                        <img src="frontend/assets/images/product/product.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="product-content">
                                    <h3 class="title">
                                        <a href="single-product.html">OFFICE TABLE</a>
                                    </h3>
                                    <p class="product-price"><span class="discounted-price"></span> </p>
                                </div>
                            </div>
                            <!--  Single Grid product End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Product section end-->

    <!-- Banner section start -->
    <div class="banner-section section pb-40 pb-sm-30 pb-xs-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Single Banner Start -->
                </div>
                <!-- Single Banner End -->
            </div>
        </div>
    </div>
    </div>
    <!-- Banner section End -->

    <!--Features section start-->
    <div class="features-section section pt-30 pt-lg-15 pt-md-0 pt-sm-0 pt-xs-15">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6">
                    <!-- Single Feature Start -->
                    <div class="single-feature mb-30">
                        <div class="feature-image">
                            <img src="frontend/assets/images/icons/feature-1.png" class="img-fluid" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Home delivery</h4>
                            <p class="short-desc">Delivery Worldwide</p>
                        </div>
                    </div>
                    <!-- Single Feature End -->
                </div>
                <div class="col-lg-6 col-md-6">
                    <!-- Single Feature Start -->
                    <div class="single-feature mb-30">
                        <div class="feature-image">
                            <img src="frontend/assets/images/icons/feature-2.png" class="img-fluid" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Quality Products</h4>
                            <p class="short-desc">We ensure the product quality that is our main goal </p>
                        </div>
                    </div>
                    <!-- Single Feature End -->
                </div>
            </div>
        </div>
        <!--Features section end-->

        <!--Blog section start-->
        <div class="blog-section section pt-65 pt-lg-45 pt-md-35 pt-sm-20 pt-xs-15 pb-65 pb-lg-45 pb-md-35 pb-sm-25 pb-xs-15">
            <div class="container">

                <div class="row mb-50 mb-xs-20">
                    <div class="col">
                        <div class="section-title text-center">
                            <span>OTHER FURNITURE WORKS</span>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="blog col-lg-4 col-md-6">
                        <div class="blog-inner mb-30">
                            <div class="blog-media">
                                <a href="blog-details.html" class="image"><img src="frontend/assets/images/blog/blog-1.jpg" alt=""></a>
                            </div>
                            <div class="content">
                                <ul class="meta">
                                </ul>
                                <h3 class="title">
                                    <a href="blog-details.html"></a>DINNING SET</h3>
                                <a class="read-more" href="blog-details.html"></a>
                            </div>
                        </div>
                    </div>

                    <div class="blog col-lg-4 col-md-6">
                        <div class="blog-inner mb-30">
                            <div class="blog-media">
                                <a href="blog-details.html" class="image"><img src="frontend/assets/images/blog/blog-2.jpg" alt=""></a>
                            </div>
                            <div class="content">
                                <ul class="meta">
                                </ul>
                                <h3 class="title">
                                    <a href="blog-details.html"></a>CUSHION</h3>
                                <a class="read-more" href="blog-details.html"></a>
                            </div>
                        </div>
                    </div>

                    <div class="blog col-lg-4 col-md-6">
                        <div class="blog-inner mb-30">
                            <div class="blog-media">
                                <a href="blog-details.html" class="image"><img src="frontend/assets/images/blog/blog-6.jpg" alt=""></a>
                            </div>
                            <div class="content">
                                <ul class="meta">
                                </ul>
                                <h3 class="title"><a href="blog-details.html">BED</a></h3>
                                <a class="read-more" href="blog-details.html"></a>
                            </div>
                        </div>
                    </div>

                    <div class="blog col-lg-4 col-md-6">
                        <div class="blog-inner mb-30">
                            <div class="blog-media">
                                <a href="blog-details.html" class="image"><img src="frontend/assets/images/blog/banner9.jpg" alt=""></a>
                            </div>
                            <div class="content">
                                <ul class="meta">
                                </ul>
                                <h3 class="title">
                                    <a href="blog-details.html"></a>TV STAND</h3>
                                <a class="read-more" href="blog-details.html"></a>
                            </div>
                        </div>
                    </div>

                    <div class="blog col-lg-4 col-md-6">
                        <div class="blog-inner mb-30">
                            <div class="blog-media">
                                <a href="blog-details.html" class="image"><img src="frontend/assets/images/blog/banner5.jpg" alt=""></a>
                            </div>
                            <div class="content">
                                <ul class="meta">
                                </ul>
                                <h3 class="title">
                                    <a href="blog-details.html"></a>RELAXER</h3>
                                <a class="read-more" href="blog-details.html"></a>
                            </div>
                        </div>
                    </div>


                    <div class="blog col-lg-4 col-md-6">
                        <div class="blog-inner mb-30">
                            <div class="blog-media">
                                <a href="blog-details.html" class="image"><img src="frontend/assets/images/blog/testimonial-1.png" alt=""></a>
                            </div>
                            <div class="content">
                                <ul class="meta">
                                </ul>
                                <h3 class="title">
                                    <a href="blog-details.html"></a>CHESTDRAWER</h3>
                                <a class="read-more" href="blog-details.html"></a>
                            </div>
                        </div>
                    </div>

                </div>
                <!--Blog section end-->

                <!-- Testimonial Area Start -->
                <div class="testimonial-section section pb-80 pb-lg-60 pb-md-50 pb-sm-40 pb-xs-40">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="testimonial-wrap bg-gray-two pt-45 pb-30">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12">
                                            <div class="testimonial-wrapper section-space--inner">
                                                <div class="testimonial-slider-content">
                                                    <div class="item">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-2">
                                                                <!-- <div class="testimonial-image"> -->
                                                                <!-- <img src="frontend/assets/images/testimonial/team/team1.jpg" alt="">
                                                            </div> -->
                                                            </div>
                                                            <div class="col-md-7">
                                                                <div class="testimonial testimonial-style-2 gutter-item">
                                                                    <div class="testimonial-inner">
                                                                        <div class="testimonial-author">
                                                                            <!-- <div class="author-thumb">
                                                                            <img src="frontend/assets/images/author/EMMA.png.jpg" alt="">
                                                                        </div> -->
                                                                            <div class="author-info">
                                                                                <h4>E. Adekoya</h4>
                                                                            </div>
                                                                        </div>
                                                                        <div class="testimonial-description">
                                                                            <blockquote class="testimonials-text">
                                                                                <p>“They provide the best quality of product. Product quality is very satisfactory.”</p>
                                                                            </blockquote>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-2">
                                                                <!-- <div class="testimonial-image">
                                                                    <img src="frontend/assets/images/testimonial/team/team2.jpg   " alt="">
                                                                </div> -->
                                                            </div>
                                                            <div class="col-md-7">
                                                                <div class="testimonial testimonial-style-2 gutter-item">
                                                                    <div class="testimonial-inner">
                                                                        <div class="testimonial-author">
                                                                            <!-- <div class="author-thumb">
                                                                            <img src="frontend/assets/images/author/author4.jpg" alt="">
                                                                        </div> -->
                                                                            <div class="author-info">
                                                                                <h4>S. OLUWOLE</h4>
                                                                            </div>
                                                                        </div>
                                                                        <div class="testimonial-description">
                                                                            <blockquote class="testimonials-text">
                                                                                <p>“Product quality is very satisfactory. Also the creative design of their Furniture makes me happy.”</p>
                                                                            </blockquote>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Testimonial Area End -->
                                                            </div>
                                                            <!--Brand section end-->

                                                            <!-- Newsletter Section Start -->
                                                            <!-- <div class="newsletter-section section bg-gray-two pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-95 pb-lg-75 pb-md-65 pb-sm-60 pb-xs-50">
                                                                <div class="container">
                                                                    <div class="row align-items-center">
                                                                    </div>

                                                                </div>
                                                                <!-- mailchimp-alerts Start -->
                                                            <div class="mailchimp-alerts">
                                                                <div class="mailchimp-submitting"></div>
                                                                <!-- mailchimp-submitting end -->
                                                                <div class="mailchimp-success"></div>
                                                                <!-- mailchimp-success end -->
                                                                <div class="mailchimp-error"></div>
                                                                <!-- mailchimp-error end -->
                                                            </div>
                                                            <!-- mailchimp-alerts end -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Newsletter Section End -->
                                        <!--Footer section start-->
                                        <footer class="footer-section section bg-gray">

                                            <!--Footer Top start-->
                                            <div class="footer-top section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-55 pb-lg-35 pb-md-25 pb-sm-15 pb-xs-10">
                                                <div class="container">
                                                    <div class="row">

                                                        <!--Footer Widget start-->
                                                        <div class="footer-widget col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                                                            <h4 class="title"><span class="text">Opening Time</span></h4>
                                                            <p class="mb-15">Mon – Fri: 10AM – 5PM</p>
                                                        </div>
                                                        <!--Footer Widget end-->


                                                        <!--Footer Widget start-->
                                                        <!--Footer Widget end-->

                                                        <!--Footer Widget start-->
                                                        <div class="footer-widget col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                                                            <h4 class="title"><span class="text">Information</span></h4>
                                                            <ul class="ft-menu">
                                                                <li><a href="#">About Us</a></li>
                                                                <li><a href="#">Delivery Information</a></li>
                                                            </ul>
                                                        </div>
                                                        <!--Footer Widget end-->

                                                        <!--Footer Widget start-->
                                                        <div class="footer-widget col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                                                            <h4 class="title"><span class="text">Address</span></h4>
                                                            <ul class="ft-menu">
                                                                <li><a href="#">Work and Housing,Yaba. LAGOS STATE.</a></li>
                                                                <li><a href="#">Redemption Camp, OGUN STATE.</a></li>
                                                            </ul>
                                                        </div>

                                                        <!--Footer Widget start-->
                                                        <div class="footer-widget col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                                                            <h4 class="title"><span class="text">Contact</span></h4>
                                                            <ul class="ft-menu">
                                                                <li><a href="#">sundayyusufadekoya@gmail.com</a></li>
                                                                <li><a href="#">+234 8023078661</a></li>
                                                                <li><a href="#">+234 8137379072</a></li>
                                                            </ul>
                                                        </div>
                                                        <!--Footer Widget end-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Footer Top end-->

                                            <!--Footer bottom start-->
                                            <div class="footer-bottom section">
                                                <div class="container">
                                                    <div class="row no-gutters">
                                                        <div class="col-12 ft-border pt-25 pb-25">
                                                            <div class="row justify-content-between align-items-center">
                                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                                    <div class="copyright text-start">
                                                                        <a class="social-icon" href="https://instagram.com/yusuf_ade_furniture" target="_blank">
                                                                            <ion-icon name="logo-instagram"></ion-icon>
                                                                        </a>

                                                                        <a class="social-icon" href="https://wa.me/+2348023078661" target="blank">
                                                                            <ion-icon name="logo-whatsapp"></ion-icon>
                                                                        </a>

                                                                        <p class="copyright">&copy;<strong>Yusuf Ade Furniture</strong><i class="fa fa-heart text-danger" aria-hidden="true"></i><a href="https://hasthemes.com/"><strong></strong></a></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                                    <div class="payment-getway text-lg-end text-center">
                                                                        <img src="frontend/assets/images/payment.png" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Footer bottom end-->

                                        </footer>
                                        <!--Footer section end-->
                                        <!-- Modal Area Strat -->
                                        <div class="modal fade quick-view-modal-container" id="quick-view-modal-container" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="col-xl-12 col-lg-12">
                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-6">
                                                                    <!-- Product Details Left -->
                                                                    <div class="product-details-left">
                                                                        <div class="product-details-images">
                                                                            <div class="lg-image">
                                                                                <img src="frontend/assets/images/product/large-product/l-product-1.jpg" alt="">
                                                                            </div>
                                                                            <div class="lg-image">
                                                                                <img src="frontend/assets/images/product/large-product/l-product-2.jpg" alt="">
                                                                            </div>
                                                                            <div class="lg-image">
                                                                                <img src="frontend/assets/images/product/large-product/l-product-3.jpg" alt="">
                                                                            </div>
                                                                            <div class="lg-image">
                                                                                <img src="frontend/assets/images/product/large-product/l-product-4.jpg" alt="">
                                                                            </div>
                                                                            <div class="lg-image">
                                                                                <img src="frontend/assets/images/product/large-product/l-product-5.jpg" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-details-thumbs">
                                                                            <div class="sm-image"><img src="frontend/assets/images/product/small-product/s-product-1.jpg" alt="product image thumb"></div>
                                                                            <div class="sm-image"><img src="frontend/assets/images/product/small-product/s-product-2.jpg" alt="product image thumb"></div>
                                                                            <div class="sm-image"><img src="frontend/assets/images/product/small-product/s-product-3.jpg" alt="product image thumb"></div>
                                                                            <div class="sm-image"><img src="frontend/assets/images/product/small-product/s-product-4.jpg" alt="product image thumb"></div>
                                                                            <div class="sm-image"><img src="frontend/assets/images/product/small-product/s-product-5.jpg" alt="product image thumb"></div>
                                                                        </div>
                                                                    </div>
                                                                    <a class="social-icon" href="https://twitter.com/@Adekoya52906792" target="_blank">
                                                                        <ion-icon name="logo-twitter"></ion-icon>
                                                                    </a>
                                                                    <!--Product Details Content End-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Modal Area End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Area End -->
            </div>
        </div>
    </div>
    <!--Features section end-->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- All jquery file included here -->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;v=3.22&amp;key=AIzaSyDAq7MrCR1A2qIShmjbtLHSKjcEIEBEEwM"></script>
    <script src="{{ asset('frontend/assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/plugins.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>
</html>

                    <!-- Single Feature End -->
                </div>
                <div class="col-lg-6 col-md-6">
                    <!-- Single Feature Start -->
                    <div class="single-feature mb-30">
                        <div class="feature-image">
                            <img src="frontend/assets/images/icons/feature-2.png" class="img-fluid" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Quality Products</h4>
                            <p class="short-desc">We ensure the product quality that is our main goal </p>
                        </div>
                    </div>
                    <!-- Single Feature End -->
                </div>
            </div>
        </div>
        <!--Features section end-->

        <!--Blog section start-->
        <div class="blog-section section pt-65 pt-lg-45 pt-md-35 pt-sm-20 pt-xs-15 pb-65 pb-lg-45 pb-md-35 pb-sm-25 pb-xs-15">
            <div class="container">

                <div class="row mb-50 mb-xs-20">
                    <div class="col">
                        <div class="section-title text-center">
                            <span>OTHER FURNITURE WORKS</span>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="blog col-lg-4 col-md-6">
                        <div class="blog-inner mb-30">
                            <div class="blog-media">
                                <a href="blog-details.html" class="image"><img src="frontend/assets/images/blog/blog-1.jpg" alt=""></a>
                            </div>
                            <div class="content">
                                <ul class="meta">
                                </ul>
                                <h3 class="title">
                                    <a href="blog-details.html"></a>DINNING SET</h3>
                                <a class="read-more" href="blog-details.html"></a>
                            </div>
                        </div>
                    </div>

                    <div class="blog col-lg-4 col-md-6">
                        <div class="blog-inner mb-30">
                            <div class="blog-media">
                                <a href="blog-details.html" class="image"><img src="frontend/assets/images/blog/blog-2.jpg" alt=""></a>
                            </div>
                            <div class="content">
                                <ul class="meta">
                                </ul>
                                <h3 class="title">
                                    <a href="blog-details.html"></a>CUSHION</h3>
                                <a class="read-more" href="blog-details.html"></a>
                            </div>
                        </div>
                    </div>

                    <div class="blog col-lg-4 col-md-6">
                        <div class="blog-inner mb-30">
                            <div class="blog-media">
                                <a href="blog-details.html" class="image"><img src="frontend/assets/images/blog/blog-6.jpg" alt=""></a>
                            </div>
                            <div class="content">
                                <ul class="meta">
                                </ul>
                                <h3 class="title"><a href="blog-details.html">BED</a></h3>
                                <a class="read-more" href="blog-details.html"></a>
                            </div>
                        </div>
                    </div>

                    <div class="blog col-lg-4 col-md-6">
                        <div class="blog-inner mb-30">
                            <div class="blog-media">
                                <a href="blog-details.html" class="image"><img src="frontend/assets/images/blog/banner9.jpg" alt=""></a>
                            </div>
                            <div class="content">
                                <ul class="meta">
                                </ul>
                                <h3 class="title">
                                    <a href="blog-details.html"></a>TV STAND</h3>
                                <a class="read-more" href="blog-details.html"></a>
                            </div>
                        </div>
                    </div>

                    <div class="blog col-lg-4 col-md-6">
                        <div class="blog-inner mb-30">
                            <div class="blog-media">
                                <a href="blog-details.html" class="image"><img src="frontend/assets/images/blog/banner5.jpg" alt=""></a>
                            </div>
                            <div class="content">
                                <ul class="meta">
                                </ul>
                                <h3 class="title">
                                    <a href="blog-details.html"></a>RELAXER</h3>
                                <a class="read-more" href="blog-details.html"></a>
                            </div>
                        </div>
                    </div>


                    <div class="blog col-lg-4 col-md-6">
                        <div class="blog-inner mb-30">
                            <div class="blog-media">
                                <a href="blog-details.html" class="image"><img src="frontend/assets/images/blog/testimonial-1.png" alt=""></a>
                            </div>
                            <div class="content">
                                <ul class="meta">
                                </ul>
                                <h3 class="title">
                                    <a href="blog-details.html"></a>CHESTDRAWER</h3>
                                <a class="read-more" href="blog-details.html"></a>
                            </div>
                        </div>
                    </div>

                </div>
                <!--Blog section end-->

                <!-- Testimonial Area Start -->
                <div class="testimonial-section section pb-80 pb-lg-60 pb-md-50 pb-sm-40 pb-xs-40">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="testimonial-wrap bg-gray-two pt-45 pb-30">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12">
                                            <div class="testimonial-wrapper section-space--inner">
                                                <div class="testimonial-slider-content">
                                                    <div class="item">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-2">
                                                                <!-- <div class="testimonial-image"> -->
                                                                <!-- <img src="frontend/assets/images/testimonial/team/team1.jpg" alt="">
                                                            </div> -->
                                                            </div>
                                                            <div class="col-md-7">
                                                                <div class="testimonial testimonial-style-2 gutter-item">
                                                                    <div class="testimonial-inner">
                                                                        <div class="testimonial-author">
                                                                            <!-- <div class="author-thumb">
                                                                            <img src="frontend/assets/images/author/EMMA.png.jpg" alt="">
                                                                        </div> -->
                                                                            <div class="author-info">
                                                                                <h4>E. Adekoya</h4>
                                                                            </div>
                                                                        </div>
                                                                        <div class="testimonial-description">
                                                                            <blockquote class="testimonials-text">
                                                                                <p>“They provide the best quality of product. Product quality is very satisfactory.”</p>
                                                                            </blockquote>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-2">
                                                                <!-- <div class="testimonial-image">
                                                                    <img src="frontend/assets/images/testimonial/team/team2.jpg   " alt="">
                                                                </div> -->
                                                            </div>
                                                            <div class="col-md-7">
                                                                <div class="testimonial testimonial-style-2 gutter-item">
                                                                    <div class="testimonial-inner">
                                                                        <div class="testimonial-author">
                                                                            <!-- <div class="author-thumb">
                                                                            <img src="frontend/assets/images/author/author4.jpg" alt="">
                                                                        </div> -->
                                                                            <div class="author-info">
                                                                                <h4>S. OLUWOLE</h4>
                                                                            </div>
                                                                        </div>
                                                                        <div class="testimonial-description">
                                                                            <blockquote class="testimonials-text">
                                                                                <p>“Product quality is very satisfactory. Also the creative design of their Furniture makes me happy.”</p>
                                                                            </blockquote>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Testimonial Area End -->
                                                            </div>
                                                            <!--Brand section end-->

                                                            <!-- Newsletter Section Start -->
                                                            <!-- <div class="newsletter-section section bg-gray-two pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-95 pb-lg-75 pb-md-65 pb-sm-60 pb-xs-50">
                                                                <div class="container">
                                                                    <div class="row align-items-center">
                                                                    </div>

                                                                </div>
                                                                <!-- mailchimp-alerts Start -->
                                                            <div class="mailchimp-alerts">
                                                                <div class="mailchimp-submitting"></div>
                                                                <!-- mailchimp-submitting end -->
                                                                <div class="mailchimp-success"></div>
                                                                <!-- mailchimp-success end -->
                                                                <div class="mailchimp-error"></div>
                                                                <!-- mailchimp-error end -->
                                                            </div>
                                                            <!-- mailchimp-alerts end -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Newsletter Section End -->
                                        <!--Footer section start-->
                                        <footer class="footer-section section bg-gray">

                                            <!--Footer Top start-->
                                            <div class="footer-top section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-55 pb-lg-35 pb-md-25 pb-sm-15 pb-xs-10">
                                                <div class="container">
                                                    <div class="row">

                                                        <!--Footer Widget start-->
                                                        <div class="footer-widget col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                                                            <h4 class="title"><span class="text">Opening Time</span></h4>
                                                            <p class="mb-15">Mon – Fri: 10AM – 5PM</p>
                                                        </div>
                                                        <!--Footer Widget end-->


                                                        <!--Footer Widget start-->
                                                        <!--Footer Widget end-->

                                                        <!--Footer Widget start-->
                                                        <div class="footer-widget col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                                                            <h4 class="title"><span class="text">Information</span></h4>
                                                            <ul class="ft-menu">
                                                                <li><a href="#">About Us</a></li>
                                                                <li><a href="#">Delivery Information</a></li>
                                                            </ul>
                                                        </div>
                                                        <!--Footer Widget end-->

                                                        <!--Footer Widget start-->
                                                        <div class="footer-widget col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                                                            <h4 class="title"><span class="text">Address</span></h4>
                                                            <ul class="ft-menu">
                                                                <li><a href="#">Work and Housing,Yaba. LAGOS STATE.</a></li>
                                                                <li><a href="#">Redemption Camp, OGUN STATE.</a></li>
                                                            </ul>
                                                        </div>

                                                        <!--Footer Widget start-->
                                                        <div class="footer-widget col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                                                            <h4 class="title"><span class="text">Contact</span></h4>
                                                            <ul class="ft-menu">
                                                                <li><a href="#">sundayyusufadekoya@gmail.com</a></li>
                                                                <li><a href="#">+234 8023078661</a></li>
                                                                <li><a href="#">+234 8137379072</a></li>
                                                            </ul>
                                                        </div>
                                                        <!--Footer Widget end-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Footer Top end-->

                                            <!--Footer bottom start-->
                                            <div class="footer-bottom section">
                                                <div class="container">
                                                    <div class="row no-gutters">
                                                        <div class="col-12 ft-border pt-25 pb-25">
                                                            <div class="row justify-content-between align-items-center">
                                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                                    <div class="copyright text-start">
                                                                        <a class="social-icon" href="https://instagram.com/yusuf_ade_furniture" target="_blank">
                                                                            <ion-icon name="logo-instagram"></ion-icon>
                                                                        </a>

                                                                        <a class="social-icon" href="https://wa.me/+2348023078661" target="blank">
                                                                            <ion-icon name="logo-whatsapp"></ion-icon>
                                                                        </a>

                                                                        <p class="copyright">&copy;<strong>Yusuf Ade Furniture</strong><i class="fa fa-heart text-danger" aria-hidden="true"></i><a href="https://hasthemes.com/"><strong></strong></a></p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                                    <div class="payment-getway text-lg-end text-center">
                                                                        <img src="frontend/assets/images/payment.png" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Footer bottom end-->

                                        </footer>
                                        <!--Footer section end-->
                                        <!-- Modal Area Strat -->
                                        <div class="modal fade quick-view-modal-container" id="quick-view-modal-container" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="col-xl-12 col-lg-12">
                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-6">
                                                                    <!-- Product Details Left -->
                                                                    <div class="product-details-left">
                                                                        <div class="product-details-images">
                                                                            <div class="lg-image">
                                                                                <img src="frontend/assets/images/product/large-product/l-product-1.jpg" alt="">
                                                                            </div>
                                                                            <div class="lg-image">
                                                                                <img src="frontend/assets/images/product/large-product/l-product-2.jpg" alt="">
                                                                            </div>
                                                                            <div class="lg-image">
                                                                                <img src="frontend/assets/images/product/large-product/l-product-3.jpg" alt="">
                                                                            </div>
                                                                            <div class="lg-image">
                                                                                <img src="frontend/assets/images/product/large-product/l-product-4.jpg" alt="">
                                                                            </div>
                                                                            <div class="lg-image">
                                                                                <img src="frontend/assets/images/product/large-product/l-product-5.jpg" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-details-thumbs">
                                                                            <div class="sm-image"><img src="frontend/assets/images/product/small-product/s-product-1.jpg" alt="product image thumb"></div>
                                                                            <div class="sm-image"><img src="frontend/assets/images/product/small-product/s-product-2.jpg" alt="product image thumb"></div>
                                                                            <div class="sm-image"><img src="frontend/assets/images/product/small-product/s-product-3.jpg" alt="product image thumb"></div>
                                                                            <div class="sm-image"><img src="frontend/assets/images/product/small-product/s-product-4.jpg" alt="product image thumb"></div>
                                                                            <div class="sm-image"><img src="frontend/assets/images/product/small-product/s-product-5.jpg" alt="product image thumb"></div>
                                                                        </div>
                                                                    </div>
                                                                    <a class="social-icon" href="https://twitter.com/@Adekoya52906792" target="_blank">
                                                                        <ion-icon name="logo-twitter"></ion-icon>
                                                                    </a>
                                                                    <!--Product Details Content End-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Modal Area End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial Area End -->
            </div>
        </div>
    </div>
    <!--Features section end-->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- All jquery file included here -->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;v=3.22&amp;key=AIzaSyDAq7MrCR1A2qIShmjbtLHSKjcEIEBEEwM"></script>
    <script src="{{ asset('frontend/assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins/plugins.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>
</html>
