<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>YUSUF ADE FURNITURE || @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('frontend/assets/images/New.jpg') }}" type="img/x-icon" rel="shortcut icon">
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
                        <div class="col-xl-6 col-lg-6 col-md-6 d-none d-lg-block col-12">
                            <!--Header Menu Area Start-->
                            <div class="header-menu-area text-center">
                                <nav class="main-menu">
                                    <ul>
                                        <li><a href="/">YUSUF ADE FURNITURE</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="/"></a>
                                                </li>
                                            </ul>
                                        </li>
                                </nav>
                            </div>
                            <!--Header Menu Area End-->
                        </div>
                        {{-- <div class="col-xl-6 col-lg-6 col-md-6 col-12">
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
                                                    <li class="active"><a href="#"><img src="assets/images/icons/en-gb.png" alt="">English</a></li>
                                                    <li><a href="#"><img src="assets/images/icons/de-de.png" alt="">French</a></li>
                                                </ul>
                                            </li>
                                            <!--Language Currency End-->
                                            <!--USD Currency Start-->
                                            <li><a href="#">Currency</a>
                                                <ul>
                                                    <li><a href="#"> € Euro</a></li>
                                                    <li><a href="#"> $ US Dollar</a></li>
                                                </ul>
                                            </li>
                                            <!--USD Currency End-->
                                            <!--Account Currency Start-->
                                            <li><a href="my-account.html">My account</a>
                                                <ul>
                                                    <li><a href="login-register.html">Login</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="my-account.html">My account</a></li>
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                </ul>
                                            </li>
                                            <!--Account Currency End-->
                                        </ul>
                                        <!--Crunccy dropdown-->
                                    </li>
                                    <li class="mini-cart"><a href="#"><i class="flaticon-shopping-cart"></i> <span class="mini-cart-total">$300.00(2)</span></a>
                                        <!--Mini Cart Dropdown Start-->
                                        <div class="header-cart">
                                            <ul class="cart-items">
                                                <li class="single-cart-item">
                                                    <div class="cart-img">
                                                        <a href="cart.html"><img src="assets/images/cart/cart1.jpg" alt=""></a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <h5 class="product-name"><a href="single-product.html">Dell Inspiron 24</a></h5>
                                                        <span class="product-quantity">1 ×</span>
                                                        <span class="product-price">$278.00</span>
                                                    </div>
                                                    <div class="cart-item-remove">
                                                        <a title="Remove" href="#"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </li>
                                                <li class="single-cart-item">
                                                    <div class="cart-img">
                                                        <a href="cart.html"><img src="assets/images/cart/cart2.jpg" alt=""></a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <h5 class="product-name"><a href="single-product.html">Lenovo Ideacentre 300</a></h5>
                                                        <span class="product-quantity">1 ×</span>
                                                        <span class="product-price">$23.39</span>
                                                    </div>
                                                    <div class="cart-item-remove">
                                                        <a title="Remove" href="#"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="cart-total">
                                                <h5>Subtotal :<span class="float-right">$39.79</span></h5>
                                                <h5>Eco Tax (-2.00) :<span class="float-right">$7.00</span></h5>
                                                <h5>VAT (20%) : <span class="float-right">$0.00</span></h5>
                                                <h5>Total : <span class="float-right">$46.79</span></h5>
                                            </div>
                                            <div class="cart-btn">
                                                <a href="cart.html">View Cart</a>
                                                <a href="checkout.html">checkout</a>
                                            </div>
                                        </div>
                                        <!--Mini Cart Dropdown End-->
                                    </li>
                                </ul>
                            </div>
                            <!--Header Search And Mini Cart Area End-->
                        </div> --}}
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
                                    {{-- <div class="col-6 col-md-6">
                                        <div class="header-logo">
                                            <a href="index.html">
                                                <img src="assets/images/logo.png" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="col-6 col-md-6">
                                        <div class="mobile-navigation text-right">
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
                                    </div> --}}
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

        {{-- <!-- Offcanvas Menu Start -->
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
                            </li>
                            <li class="menu-item-has-children"><a href="#">Shop</a>
                                <ul class="submenu2">
                                    <li class="menu-item-has-children"><a href="#">Pages</a>
                                        <ul class="submenu2">
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="compare.html">Compare</a></li>
                                            <li><a href="cart.html">Shopping Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="login-register.html">Login Register</a></li>
                                            <li><a href="faq.html">Frequently Questions</a></li>
                                            <li><a href="404.html">Error 404</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Shop Layout</a>
                                        <ul class="submenu2">
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="shop-three-column.html">Shop Three Column</a></li>
                                            <li><a href="shop-four-column.html">Shop Four Column</a></li>
                                            <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                            <li><a href="shop-list-nosidebar.html">Shop List No Sidebar</a></li>
                                            <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a>
                                            </li>
                                            <li><a href="shop-list-right-sidebar.html">Shop List Right
                                                    Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Product Details</a>
                                        <ul class="submenu2">
                                            <li><a href="single-product.html">Single Product</a></li>
                                            <li><a href="single-product-variable.html">Variable Product</a></li>
                                            <li><a href="single-product-affiliate.html">Affiliate Product</a>
                                            </li>
                                            <li><a href="single-product-group.html">Group Product</a></li>
                                            <li><a href="single-product-tabstyle-2.html">Product Left Tab</a>
                                            </li>
                                            <li><a href="single-product-tabstyle-3.html">Product Right Tab</a>
                                            </li>
                                            <li><a href="single-product-gallery-left.html">Product Gallery
                                                    Left</a></li>
                                            <li><a href="single-product-gallery-right.html">Product Gallery
                                                    Right</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Product Details</a>
                                        <ul class="submenu2">
                                            <li><a href="single-product-sticky-left.html">Product Sticky
                                                    Left</a></li>
                                            <li><a href="single-product-sticky-right.html">Product Sticky
                                                    Right</a></li>
                                            <li><a href="single-product-slider-box.html">Product Box Slider</a>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>
                            <li><a href="shop.html">New Arrivals</a></li>
                            <li class="menu-item-has-children"><a href="#">Pages</a>
                                <ul class="submenu2">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-two-column.html">Blog Two Column</a></li>
                                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                    <li><a href="blog-details-gallery.html">Blog Details Gallery</a></li>
                                    <li><a href="blog-details-audio.html">Blog Details Audio</a></li>
                                    <li><a href="blog-details-video.html">Blog Details Video</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="contact.html">Contact</a>
                            </li>

                        </ul>
                    </nav>

                    <div class="offcanvas-settings">
                        <nav class="offcanvas-navigation">
                            <ul>
                                <li class="menu-item-has-children"><a href="#">MY ACCOUNT </a>
                                    <ul class="submenu2">
                                        <li><a href="login-register.html">Login</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="my-account.html">My account</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">CURRENCY: USD </a>
                                    <ul class="submenu2">
                                        <li><a href="javascript:void(0)">€ Euro</a></li>
                                        <li><a href="javascript:void(0)">$ US Dollar</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">LANGUAGE: EN-GB </a>
                                    <ul class="submenu2">
                                        <li><a href="javascript:void(0)"><img src="assets/images/icons/en-gb.png" alt=""> English</a></li>
                                        <li><a href="javascript:void(0)"><img src="assets/images/icons/de-de.png" alt=""> Germany</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="offcanvas-widget-area">
                        <div class="off-canvas-contact-widget">
                            <div class="header-contact-info">
                                <ul class="header-contact-info-list">
                                    <li><i class="ion-android-phone-portrait"></i> <a href="tel://+234-80-2307-8661">(+234-80-2307-8661) </a></li>
                                    <li><i class="ion-android-mail"></i> <a href="mailto:info@yourdomain.com">yusufadefurniture@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--Off Canvas Widget Social Start-->
                        <div class="off-canvas-widget-social">
                            <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a
                            
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
        <!-- main-search start --> --}}

        @yield('content')

        <!-- Newsletter Section Start -->
        <div class="newsletter-section section bg-gray-two pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-95 pb-lg-75 pb-md-65 pb-sm-60 pb-xs-50">
            <div class="container">
                <!-- <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="newsletter-content"> -->
                            <h2>About Us</h2>
                            <p> Y.A Furniture is a reputable company committed to providing high-quality, functional, and aesthetically ppealing furniture for residential and commercial spaces. We take pride in our craftsmanship, attention to detail, and use of premium materials to ensure durability and comfort. Our goal is to enhance living and working environments through innovative designs that reflect style, elegance, and practicality.</p>
                        <!-- </div> -->
                    <!-- </div> -->
                    {{-- <div class="col-lg-6">
                        <div class="newsletter-wrap">
                            <div class="newsletter-form">
                                <form id="mc-form" class="mc-form">
                                    <input type="email" placeholder="Enter Your Email Address Here..." required>
                                    <button type="submit" value="submit">SUBSCRIBE!</button>
                                </form>

                            </div>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div> --}}
                <!-- </div> -->
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
                            <p class="mb-15">Mon – Fri: 9AM – 5PM</p>
                            <p class="mb-15">Sat: 9AM-4PM</p>
                            <p class="mb-15">Sun: Closed</p>
                            <h4 class="opeaning-title">We Work All The Holidays</h4>
                        </div>
                        <!--Footer Widget end-->


                        <!--Footer Widget start-->
                        <!-- <div class="footer-widget col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                            <h4 class="title"><span class="text">Quick Link</span></h4>
                            <ul class="ft-menu">
                                <li><a href="#">Shipping Information</a></li>
                            </ul>
                        </div> -->
                        <!--Footer Widget end-->

                        <!--Footer Widget start-->
                        <div class="footer-widget col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                            <h4 class="title"><span class="text">Information</span></h4>
                            <ul class="ft-menu">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <!-- <li><a href="#">Privacy Policy</a></li> -->
                                <li><a href="{{route('shop')}}">Our Store</a></li>
                            </ul>
                        </div>
                        <!--Footer Widget end-->

                        <!--Footer Widget start-->
                        <div class="footer-widget text-lg-right text-left col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                            <h4 class="title"><span class="text">Address</span></h4>
                            <h5>Redemption Camp, Mowe. Ogun State.</h5>
                            <h5>Work Of Housing, Yaba. Lagos State. </h5>
                        </div>
                        <!--Footer Widget end-->

                        <div class="footer-widget text-lg-right text-left col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                            <h4 class="title"><span class="text">Contact</span></h4>
                            <h5>sundayyusufadekoya@gmail.com</h5>
                            <h5>+234-80-2307-8661</h5>
                            <h5>+234-81-3737-9072</h5>
                        </div>
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
                                    <div class="copyright text-left">
                                        <a class="social-icon" href="https://instagram.com/yusuf_ade_furniture" target="_blank">
                                            <ion-icon name="logo-instagram"></ion-icon>
                                        </a>

                                        <a class="social-icon" href="https://wa.me/+2348023078661" target="blank">
                                            <ion-icon name="logo-whatsapp"></ion-icon>
                                        </a>
                                        <p class="copyright">&copy;<strong> Y.A Furniture </strong><a href="https://emmydev10.vercel.app/" target="_blank"><strong> Made by Emmytech10 </strong></a></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="payment-getway text-lg-right text-center">
                                        <img src="assets/images/payment.png" alt="">
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
        <!-- Modal Area End -->
    </div>

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
