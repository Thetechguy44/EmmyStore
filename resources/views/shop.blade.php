@extends('layout.app')
@section('title', 'All products')
@section('content')
    <!-- Page Banner Section Start -->
    <div class="page-banner-section section bg-image" data-bg="{{ asset('frontend/assets/images/bg/breadcrumb.png') }}">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-banner text-left">
                        <h2>Shop</h2>
                        <ul class="page-breadcrumb">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Shop</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->
    <!-- Shop Section Start -->
    <div class="shop-section section pt-60 pt-lg-40 pt-md-30 pt-sm-20 pt-xs-30  pb-70 pb-lg-50 pb-md-40 pb-sm-20 pb-xs-20">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="shop-area">
                        <div class="row">
                            <div class="col-12">
                                <!-- Grid & List View Start -->
                                <div class="shop-topbar-wrapper d-flex justify-content-between align-items-center">
                                    <div class="grid-list-option d-flex">
                                        <ul class="nav">
                                            <li>
                                                <a class="active show" data-toggle="tab" href="#grid"><i class="fa fa-th"></i></a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#list" class=""><i class="fa fa-th-list"></i></a>
                                            </li>
                                        </ul>
                                        <p>Showing 1–9 of 41 results</p>
                                    </div>
                                    <!--Toolbar Short Area Start-->
                                    <div class="toolbar-short-area d-md-flex align-items-center">
                                        <div class="toolbar-shorter ">
                                            <label>Sort By:</label>
                                            <select class="wide">
                                                <option data-display="Select">Nothing</option>
                                                <option value="Relevance">Relevance</option>
                                                <option value="Name, A to Z">Name, A to Z</option>
                                                <option value="Name, Z to A">Name, Z to A</option>
                                                <option value="Price, low to high">Price, low to high</option>
                                                <option value="Price, high to low">Price, high to low</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--Toolbar Short Area End-->
                                </div>
                                <!-- Grid & List View End -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="shop-product">
                                            <div id="myTabContent-2" class="tab-content">
                                                <div id="grid" class="tab-pane fade active show">
                                                    <div class="product-grid-view">
                                                        <div class="row">
                                                            @forelse ($shopProducts as $product)
                                                                <div class="col-lg-3 col-md-6 col-sm-6">
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
                                                                <div class="col-12">
                                                                    <p>No products found.</p>
                                                                </div>
                                                            @endforelse
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <div id="list" class="tab-pane fade">
                                                    <div class="product-list-view">
                                                        <!-- Single List Product Start -->
                                                        <div class="product-list-item mb-40">
                                                            <div class="row">
                                                                <div class="col-md-4 col-sm-6">
                                                                    <div class="single-grid-product">
                                                                        <div class="product-image">
                                                                            <div class="product-label">
                                                                                <span class="sale">New</span>
                                                                            </div>
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/product/product-3.jpg" class="img-fluid" alt="">
                                                                                <img src="assets/images/product/product-4.jpg" class="img-fluid" alt="">
                                                                            </a>

                                                                            <div class="product-action">
                                                                                <ul>
                                                                                    <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                    <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                    <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-sm-6">
                                                                    <div class="product-content-shop-list">
                                                                        <div class="product-content">
                                                                            <h3 class="title"> <a href="single-product.html">Miro Dining Table</a></h3>
                                                                            <div class="product-category-rating">
                                                                                <span class="rating">
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                        </span>
                                                                                <span class="review"><a href="#">(1 review)</a></span>
                                                                            </div>
                                                                            <p class="product-price"><span class="discounted-price">$170.00</span> <span class="main-price discounted">$210.00</span></p>
                                                                            <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single List Product Start -->
                                                        <!-- Single List Product Start -->
                                                        <div class="product-list-item mb-40">
                                                            <div class="row">
                                                                <div class="col-md-4 col-sm-6">
                                                                    <div class="single-grid-product">
                                                                        <div class="product-image">
                                                                            <div class="product-label">
                                                                                <span class="sale">New</span>
                                                                            </div>
                                                                            <a href="single-product.html">
                                                                                <img src="{{ asset('frontend/assets/images/product/product-1.jpg') }}" class="img-fluid" alt="">
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
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-sm-6">
                                                                    <div class="product-content-shop-list">
                                                                        <div class="product-content">
                                                                            <h3 class="title"> <a href="single-product.html">Stylish Design Chair</a></h3>
                                                                            <div class="product-category-rating">
                                                                                <span class="rating">
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                        </span>
                                                                                <span class="review"><a href="#">(1 review)</a></span>
                                                                            </div>
                                                                            <p class="product-price"><span class="discounted-price">$190.00</span> <span class="main-price discounted">$230.00</span></p>
                                                                            <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single List Product Start -->
                                                        <!-- Single List Product Start -->
                                                        <div class="product-list-item mb-40">
                                                            <div class="row">
                                                                <div class="col-md-4 col-sm-6">
                                                                    <div class="single-grid-product">
                                                                        <div class="product-image">
                                                                            <div class="product-label">
                                                                                <span class="sale">New</span>
                                                                            </div>
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/product/product-3.jpg" class="img-fluid" alt="">
                                                                                <img src="assets/images/product/product-4.jpg" class="img-fluid" alt="">
                                                                            </a>

                                                                            <div class="product-action">
                                                                                <ul>
                                                                                    <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                    <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                    <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-sm-6">
                                                                    <div class="product-content-shop-list">
                                                                        <div class="product-content">
                                                                            <h3 class="title"> <a href="single-product.html">Janus Table Lamp</a></h3>
                                                                            <div class="product-category-rating">
                                                                                <span class="rating">
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                        </span>
                                                                                <span class="review"><a href="#">(1 review)</a></span>
                                                                            </div>
                                                                            <p class="product-price"><span class="discounted-price">$130.00</span> <span class="main-price discounted">$150.00</span></p>
                                                                            <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single List Product Start -->
                                                        <!-- Single List Product Start -->
                                                        <div class="product-list-item mb-40">
                                                            <div class="row">
                                                                <div class="col-md-4 col-sm-6">
                                                                    <div class="single-grid-product">
                                                                        <div class="product-image">
                                                                            <div class="product-label">
                                                                                <span class="sale">New</span>
                                                                            </div>
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/product/product-5.jpg" class="img-fluid" alt="">
                                                                                <img src="{{ asset('frontend/assets/images/product/product-6.jpg') }}" class="img-fluid" alt="">
                                                                            </a>

                                                                            <div class="product-action">
                                                                                <ul>
                                                                                    <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                    <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                    <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-sm-6">
                                                                    <div class="product-content-shop-list">
                                                                        <div class="product-content">
                                                                            <h3 class="title"> <a href="single-product.html">Normal Dining chair</a></h3>
                                                                            <div class="product-category-rating">
                                                                                <span class="rating">
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                        </span>
                                                                                <span class="review"><a href="#">(1 review)</a></span>
                                                                            </div>
                                                                            <p class="product-price"><span class="discounted-price">$190.00</span></p>
                                                                            <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single List Product Start -->
                                                        <!-- Single List Product Start -->
                                                        <div class="product-list-item mb-40">
                                                            <div class="row">
                                                                <div class="col-md-4 col-sm-6">
                                                                    <div class="single-grid-product">
                                                                        <div class="product-image">
                                                                            <div class="product-label">
                                                                                <span class="sale">Sale</span>
                                                                            </div>
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/product/product-7.jpg" class="img-fluid" alt="">
                                                                                <img src="assets/images/product/product-8.jpg" class="img-fluid" alt="">
                                                                            </a>

                                                                            <div class="product-action">
                                                                                <ul>
                                                                                    <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                    <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                    <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-sm-6">
                                                                    <div class="product-content-shop-list">
                                                                        <div class="product-content">
                                                                            <h3 class="title"> <a href="single-product.html">Affordances Side Table</a></h3>
                                                                            <div class="product-category-rating">
                                                                                <span class="rating">
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                        </span>
                                                                                <span class="review"><a href="#">(1 review)</a></span>
                                                                            </div>
                                                                            <p class="product-price"><span class="discounted-price">$130.00</span> </p>
                                                                            <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single List Product Start -->
                                                        <!-- Single List Product Start -->
                                                        <div class="product-list-item mb-40">
                                                            <div class="row">
                                                                <div class="col-md-4 col-sm-6">
                                                                    <div class="single-grid-product">
                                                                        <div class="product-image">
                                                                            <div class="product-label">
                                                                                <span>-20%</span>
                                                                            </div>
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/product/product-10.jpg" class="img-fluid" alt="">
                                                                                <img src="assets/images/product/product-11.jpg" class="img-fluid" alt="">
                                                                            </a>

                                                                            <div class="product-action">
                                                                                <ul>
                                                                                    <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                    <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                    <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-sm-6">
                                                                    <div class="product-content-shop-list">
                                                                        <div class="product-content">
                                                                            <h3 class="title"> <a href="single-product.html">Hot Design Table</a></h3>
                                                                            <div class="product-category-rating">
                                                                                <span class="rating">
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                        </span>
                                                                                <span class="review"><a href="#">(1 review)</a></span>
                                                                            </div>
                                                                            <p class="product-price"><span class="discounted-price">$153.00</span> </p>
                                                                            <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single List Product Start -->
                                                        <!-- Single List Product Start -->
                                                        <div class="product-list-item mb-40">
                                                            <div class="row">
                                                                <div class="col-md-4 col-sm-6">
                                                                    <div class="single-grid-product">
                                                                        <div class="product-image">
                                                                            <div class="product-label">
                                                                                <span>-29%</span>
                                                                            </div>
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/product/product-12.jpg" class="img-fluid" alt="">
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
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-sm-6">
                                                                    <div class="product-content-shop-list">
                                                                        <div class="product-content">
                                                                            <h3 class="title"> <a href="single-product.html">Outdoor Lock Chair</a></h3>
                                                                            <div class="product-category-rating">
                                                                                <span class="rating">
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                        </span>
                                                                                <span class="review"><a href="#">(1 review)</a></span>
                                                                            </div>
                                                                            <p class="product-price"><span class="discounted-price">$190.00</span> <span class="main-price discounted">$230.00</span></p>
                                                                            <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single List Product Start -->
                                                        <!-- Single List Product Start -->
                                                        <div class="product-list-item mb-40">
                                                            <div class="row">
                                                                <div class="col-md-4 col-sm-6">
                                                                    <div class="single-grid-product">
                                                                        <div class="product-image">
                                                                            <a href="single-product.html">
                                                                                <img src="assets/images/product/product-16.jpg" class="img-fluid" alt="">
                                                                                <img src="assets/images/product/product-15.jpg" class="img-fluid" alt="">
                                                                            </a>

                                                                            <div class="product-action">
                                                                                <ul>
                                                                                    <li><a href="cart.html"><i class="fa fa-cart-plus"></i></a></li>
                                                                                    <li><a href="#quick-view-modal-container" data-toggle="modal" title="Quick View"><i class="fa fa-eye"></i></a></li>
                                                                                    <li><a href="wishlit.html"><i class="fa fa-heart-o"></i></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 col-sm-6">
                                                                    <div class="product-content-shop-list">
                                                                        <div class="product-content">
                                                                            <h3 class="title"> <a href="single-product.html">Normal Dining chair</a></h3>
                                                                            <div class="product-category-rating">
                                                                                <span class="rating">
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star active"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                        </span>
                                                                                <span class="review"><a href="#">(1 review)</a></span>
                                                                            </div>
                                                                            <p class="product-price"><span class="discounted-price">$287.00</span></p>
                                                                            <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Single List Product Start -->
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-30 mb-sm-40 mb-xs-30">
                                    <div class="col">
                                        <ul class="page-pagination">
                                            {{ $shopProducts->links() }}
                                            {{-- <li class="active"><a href="#">01</a></li>
                                            <li><a href="#">02</a></li>
                                            <li><a href="#">03</a></li>
                                            <li><a href="#">04</a></li>
                                            <li><a href="#">05</a></li>
                                            <li><a href="#">Next</a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Section End -->
@endsection