@extends('layout.app')
@section('title', 'Home')
@section('content')
    <!--slider section start-->
    <div class="hero-section section position-relative">
        <div class="hero-slider section">

            <!--Hero Item start-->
            <div class="hero-item  bg-image" data-bg="{{ asset('frontend/assets/images/hero/hero-1.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-12">

                            <!--Hero Content start-->
                            <div class="hero-content-2 center">

                                <h2>Creative Design <br> Modern & Exclusive Furniture</h2>
                                    <a href="{{ route('shop') }}" class="btn">SHOP NOW</a>

                            </div>
                            <!--Hero Content end-->

                        </div>
                    </div>
                </div>
            </div>
            <!--Hero Item end-->

            <!--Hero Item start-->
            <div class="hero-item bg-image" data-bg="{{ asset('frontend/assets/images/hero/hero-2.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-12">

                            <!--Hero Content start-->
                            <div class="hero-content-2 center">

                                <h2>Creative Design <br> Modern & Exclusive Furniture</h2>
                                    <a href="{{ route('shop') }}" class="btn">SHOP NOW</a>

                            </div>
                            <!--Hero Content end-->

                        </div>
                    </div>
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
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <!-- Single Banner Start -->
                    <div class="single-banner-item mb-30">
                        <div class="banner-image">
                            <a href="{{ route('shop') }}">
                                <img src="{{ asset('frontend/assets/images/banner/banner1.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="banner-content">
                            <h3 class="title">OFFICE <br> FURNITURE</h3>
                                <a href="{{ route('shop') }}">SHOP NOW</a>
                        </div>
                    </div>
                    <!-- Single Banner End -->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <!-- Single Banner Start -->
                    <div class="single-banner-item mb-30">
                        <div class="banner-image">
                            <a href="shop-left-sidebar.html">
                                <img src="{{ asset('frontend/assets/images/banner/banner2.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="banner-content tr-right">
                            <h3 class="title">HOME <br> FURNITURE</h3>
                                <a href="{{ route('shop') }}">SHOP NOW</a>
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
                        <!-- <ul class="nav">
                            <li><a class="active show" data-toggle="tab" href="#home">HOME </a></li>
                            <li><a data-toggle="tab" href="#office"> OFFICE</a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div id="home" class="tab-pane fade active show">
                    <div class="row">
                        @forelse ( $products as $product)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <!--  Single Grid product Start -->
                                <div class="single-grid-product mb-40">
                                    <div class="product-image">
                                        {{-- <div class="product-label">
                                            <span>-20%</span>
                                        </div> --}}
                                        <a href="{{ route('details', $product->id) }}">
                                            <img src="{{ asset('images/products/' . $product->image) }}" class="img-fluid" alt="">
                                            <img src="{{ asset('images/products/' . $product->image) }}" class="img-fluid" alt="">
                                        </a>

                                        {{-- <div class="product-action">
                                            <ul>
                                                <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div> --}}
                                    </div>
                                    <div class="product-content">
                                        <h3 class="title"> <a href="{{ route('details', $product->id) }}">{{ $product->name }}</a></h3>
                                        <p class="product-price">
                                            <span class="discounted-price">NGN 
                                                @if ($product->discount_price > 0)
                                                    {{ number_format($product->discount_price, 2) }}
                                                @else
                                                    {{ number_format($product->price, 2) }}
                                                    
                                                @endif
                                            </span>
                                            @if ($product->discount_price && $product->discount_price < $product->price)
                                                <span class="main-price discounted">NGN {{ number_format($product->price, 2) }}</span>
                                            @endif 
                                            {{-- <span class="main-price discounted">$230.00</span> --}}
                                        </p>
                                    </div>
                                </div>
                                <!--  Single Grid product End -->
                            </div>
                        @empty
                            
                        @endforelse
                    </div>
                </div>
                {{-- <div id="office" class="tab-pane">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!--  Single Grid product Start -->
                            <div class="single-grid-product mb-40">
                                <div class="product-image">
                                    <a href="single-product.html">
                                        <img src="assets/images/product/product-9.jpg" class="img-fluid" alt="">
                                        <img src="assets/images/product/product-10.jpg" class="img-fluid" alt="">
                                    </a>

                                    <div class="product-action">
                                        <ul>
                                            <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                            <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"> <a href="single-product.html">Normal Dining chair</a></h3>
                                    <p class="product-price"><span class="discounted-price">$130.00</span> </p>
                                </div>
                            </div>
                            <!--  Single Grid product End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!--  Single Grid product Start -->
                            <div class="single-grid-product mb-40">
                                <div class="product-image">
                                    <div class="product-label">
                                        <span class="sale">Sale</span>
                                    </div>
                                    <a href="single-product.html">
                                        <img src="assets/images/product/product-11.jpg" class="img-fluid" alt="">
                                        <img src="assets/images/product/product-12.jpg" class="img-fluid" alt="">
                                    </a>

                                    <div class="product-action">
                                        <ul>
                                            <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                            <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"> <a href="single-product.html">Tripod lampshade</a></h3>
                                    <p class="product-price"><span class="discounted-price">$210.00</span> <span class="main-price discounted">$240.00</span></p>
                                </div>
                            </div>
                            <!--  Single Grid product End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!--  Single Grid product Start -->
                            <div class="single-grid-product mb-40">
                                <div class="product-image">
                                    <a href="single-product.html">
                                        <img src="assets/images/product/product-10.jpg" class="img-fluid" alt="">
                                        <img src="assets/images/product/product-13.jpg" class="img-fluid" alt="">
                                    </a>

                                    <div class="product-action">
                                        <ul>
                                            <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                            <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"> <a href="single-product.html">Hot Design Table</a></h3>
                                    <p class="product-price"><span class="discounted-price">$250.00</span> <span class="main-price discounted">$280.00</span></p>
                                </div>
                            </div>
                            <!--  Single Grid product End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!--  Single Grid product Start -->
                            <div class="single-grid-product mb-40">
                                <div class="product-image">
                                    <a href="single-product.html">
                                        <img src="assets/images/product/product-14.jpg" class="img-fluid" alt="">
                                    </a>

                                    <div class="product-action">
                                        <ul>
                                            <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                            <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"> <a href="single-product.html">Outdoor Lock Chair</a></h3>
                                    <p class="product-price"><span class="discounted-price">$180.00</span></p>
                                </div>
                            </div>
                            <!--  Single Grid product End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!--  Single Grid product Start -->
                            <div class="single-grid-product mb-40">
                                <div class="product-image">
                                    <div class="product-label">
                                        <span class="sale">New</span>
                                    </div>
                                    <a href="single-product.html">
                                        <img src="assets/images/product/product-14.jpg" class="img-fluid" alt="">
                                        <img src="assets/images/product/product-13.jpg" class="img-fluid" alt="">
                                    </a>

                                    <div class="product-action">
                                        <ul>
                                            <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                            <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"> <a href="single-product.html">Classic Chair</a></h3>
                                    <p class="product-price"><span class="discounted-price">$60.00</span> </p>
                                </div>
                            </div>
                            <!--  Single Grid product End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!--  Single Grid product Start -->
                            <div class="single-grid-product mb-40">
                                <div class="product-image">
                                    <a href="single-product.html">
                                        <img src="assets/images/product/product-15.jpg" class="img-fluid" alt="">
                                        <img src="assets/images/product/product-16.jpg" class="img-fluid" alt="">
                                    </a>

                                    <div class="product-action">
                                        <ul>
                                            <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                            <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"> <a href="single-product.html">Classic Chair Wodden</a></h3>
                                    <p class="product-price"><span class="discounted-price">$183.00</span> <span class="main-price discounted">$200.00</span></p>
                                </div>
                            </div>
                            <!--  Single Grid product End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!--  Single Grid product Start -->
                            <div class="single-grid-product mb-40">
                                <div class="product-image">
                                    <a href="single-product.html">
                                        <img src="assets/images/product/product-10.jpg" class="img-fluid" alt="">
                                    </a>

                                    <div class="product-action">
                                        <ul>
                                            <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                            <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"> <a href="single-product.html">Classic Table Wodden</a></h3>
                                    <p class="product-price"><span class="discounted-price">$290.00</span></p>
                                </div>
                            </div>
                            <!--  Single Grid product End -->
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!--  Single Grid product Start -->
                            <div class="single-grid-product mb-40">
                                <div class="product-image">
                                    <a href="single-product.html">
                                        <img src="assets/images/product/product-16.jpg" class="img-fluid" alt="">
                                        <img src="{{ asset('frontend/assets/images/product/product-2.jpg') }}" class="img-fluid" alt="">
                                    </a>

                                    <div class="product-action">
                                        <ul>
                                            <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                            <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"> <a href="single-product.html">Miniature Almari</a></h3>
                                    <p class="product-price"><span class="discounted-price">$230.00</span> <span class="main-price discounted">$250.00</span></p>
                                </div>
                            </div>
                            <!--  Single Grid product End -->
                        </div>
                    </div>
                </div> --}}
            </div>


        </div>
    </div>
    <!--Product section end-->

    <!-- Banner section start -->
    {{-- <div class="banner-section section pb-40 pb-sm-30 pb-xs-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Single Banner Start -->
                    <div class="single-banner-item pt-100 pt-md-80 pt-sm-70 pt-xs-50 pb-120 pb-md-100 pb-sm-90 pb-xs-50 mb-30 bg-image" data-bg="{{ asset('frontend/assets/images/banner/banner3.jpg') }}">
                        <div class="sp-banner-content">
                            <span class="normat-text">DISCOUNTED UP TO 50%</span>
                            <h2 class="title">Zigzag King Chair</h2>
                            <span class="normat-text">LIMITED TIME OFEER</span>
                            <div class="countdown-area">
                                <div class="product-countdown" data-countdown="2019/06/01"></div>
                            </div>
                            <a href="{{ route('shop') }}">SHOP NOW</a>
                        </div>
                    </div>
                    <!-- Single Banner End -->
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Banner section End -->

    <!--Features section start-->
    <div class="features-section section pt-30 pt-lg-15 pt-md-0 pt-sm-0 pt-xs-15">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <!-- Single Feature Start -->
                    <div class="single-feature mb-30">
                        <div class="feature-image">
                            <img src="{{ asset('frontend/assets/images/icons/feature-1.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Free home delivery</h4>
                            <p class="short-desc">Provide free home delivery for the all product over $100 </p>
                        </div>
                    </div>
                    <!-- Single Feature End -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Single Feature Start -->
                    <div class="single-feature mb-30">
                        <div class="feature-image">
                            <img src="{{ asset('frontend/assets/images/icons/feature-2.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Quality Products</h4>
                            <p class="short-desc">We ensure the product quality that is our main goal </p>
                        </div>
                    </div>
                    <!-- Single Feature End -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Single Feature Start -->
                    <div class="single-feature mb-30">
                        <div class="feature-image">
                            <img src="{{ asset('frontend/assets/images/icons/feature-3.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">3 Days Return</h4>
                            <p class="short-desc">Provide free home delivery for the all product over $100 </p>
                        </div>
                    </div>
                    <!-- Single Feature End -->
                </div>

            </div>
        </div>
    </div>
    <!--Features section end-->
@endsection