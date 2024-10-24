@extends('frontend.layout.master')

@section('content')

<div class="page-wrapper">
    <!-- start preloader -->
    <!-- <div class="preloader">
            <div class="vertical-centered-box">
                <div class="content">
                    <div class="loader-circle"></div>
                    <div class="loader-line-mask">
                        <div clfyyass="loader-line"></div>
                    </div>
                    <img src="{{ asset('assets/user/images/preloader.png')}}" alt="">
                </div>
            </div>
        </div> -->
    <!-- end preloader -->

    <!-- start header -->

    <!-- end of header --><!-- start of wpo-hero-section -->

    <div class="wpo-hero-slider">
        <div class="container container-fluid-sm">
            <div class="hero-slider">
                <div class="hero-slider-item">
                    <div class="slider-bg">
                        <img src="{{ asset('assets/user/images/slider/slide-1.jpg')}}" alt="">
                    </div>
                    <div class="slider-content">
                        <div class="slide-title">
                            <h2>Trendy & Unique
                                Collection</h2>
                        </div>
                        <a class="theme-btn" href="{{ route('product') }}">Shop Now</a>
                    </div>
                </div>
                <div class="hero-slider-item">
                    <div class="slider-bg">
                        <img src="{{ asset('assets/user/images/slider/slide-2.jpg')}}" alt="">
                    </div>
                    <div class="slider-content">
                        <div class="slide-title">
                            <h2>Trendy & Unique
                                Collection</h2>
                        </div>
                        <a class="theme-btn" href="{{ route('product') }}">Shop Now</a>
                    </div>
                </div>
                <div class="hero-slider-item">
                    <div class="slider-bg">
                        <img src="{{ asset('assets/user/images/slider/slide-3.jpg')}}" alt="">
                    </div>
                    <div class="slider-content">
                        <div class="slide-title">
                            <h2>Trendy & Unique
                                Collection</h2>
                        </div>
                        <a class="theme-btn" href="{{ route('product') }}">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        <ul class="hero-social">
            <li>
                <a href="#"><i class="ti-facebook"></i></a>
            </li>
            <li>
                <a href="#"><i class="ti-instagram"></i></a>
            </li>
            <li>
                <a href="#"><i class="ti-linkedin"></i></a>
            </li>
            <li>
                <a href="#"><i class="ti-twitter-alt"></i></a>
            </li>
        </ul>
    </div>
    <!-- end of wpo-hero-section -->

    <!-- start of themart-featured-section -->
    <section class="themart-featured-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="wpo-section-title">
                        <h2>Featured Categories</h2>
                    </div>
                </div>
            </div>
            <div class="featured-categorie-slider owl-carousel">
                <div class="featured-item">
                    <div class="images">
                        <img src="{{ asset('assets/user/images/home/1.png')}}" alt="">
                    </div>
                    <div class="text round_img">
                        <h2><a href="{{ route('product') }}">Sarees</a></h2>
                    </div>
                </div>
                <div class="featured-item">
                    <div class="images">
                        <img src="{{ asset('assets/user/images/home/2.png')}}" alt="">
                    </div>
                    <div class="text round_img">
                        <h2><a href="{{ route('product') }}">Salwar Kameez Set</a></h2>
                    </div>
                </div>
                <div class="featured-item">
                    <div class="images">
                        <img src="{{ asset('assets/user/images/home/3.png')}}" alt="">
                    </div>
                    <div class="text round_img">
                        <h2><a href="{{ route('product') }}">Kurtis</a></h2>
                    </div>
                </div>
                <div class="featured-item">
                    <div class="images">
                        <img src="{{ asset('assets/user/images/home/4.png')}}" alt="">
                    </div>
                    <div class="text round_img">
                        <h2><a href="{{ route('product') }}">Salwar Kameez</a></h2>
                    </div>
                </div>
                <div class="featured-item">
                    <div class="images">
                        <img src="{{ asset('assets/user/images/home/5.png')}}" alt="">
                    </div>
                    <div class="text round_img">
                        <h2><a href="{{ route('product') }}">Dupotta</a></h2>
                    </div>
                </div>
                <div class="featured-item">
                    <div class="images">
                        <img src="{{ asset('assets/user/images/home/6.png')}}" alt="">
                    </div>
                    <div class="text round_img">
                        <h2><a href="{{ route('product') }}">Straight Pants</a></h2>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end of themart-featured-section -->

    <!-- start of themart-offer-section -->
    <section class="themart-offer-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="wpo-section-title">
                        <h2>Exciting Offers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="offer-wrap">
                        <div class="content">
                            <h2>Stylish Coat</h2>
                            <span class="offer-price">$80</span>
                            <del>$150</del>

                            <div class="count-up">
                                <div id="clock"></div>
                            </div>
                            <a class="theme-btn-s2" href="{{ route('product') }}">Shop Now</a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="banner-two-wrap">
                        <div class="text">
                            <h2>New Year Sale</h2>
                            <h4>Up To 70% Off</h4>
                            <a class="theme-btn-s2" href="{{ route('product') }}">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of themart-offer-section -->

    <!-- start of themart-interestproduct-section -->
    <section class="themart-interestproduct-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="wpo-section-title">
                        <h2>Products Of Your Interest</h2>
                    </div>
                </div>
            </div>
            <div class="product-wrap">
                <div class="row">

                    @if(isset($response))
                    @foreach(json_decode($response)->data as $product)
                    @foreach($product->productdetail as $detail)


                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="product-item">
                            <div class="image">
                                <div id="owl-demo" class="owl-carousel owl-theme">

                                    <div class="item">
                                        <img src="{{ !is_null($detail->image_path) ? $detail->image_path : asset('assets/user/images/cart/img-4.jpg')}}" alt="{{ ucfirst(strtolower($detail->product)) }}">
                                    </div>
                                    @if(!is_null($detail->image_path2))
                                    <div class="item"><img src="{{ $detail->image_path2 }}" alt="{{ ucfirst(strtolower($detail->product)) }}"></div>
                                    @endif

                                    @if(!is_null($detail->image_path3))
                                    <div class="item"><img src="{{ $detail->image_path3 }}" alt="{{ ucfirst(strtolower($detail->product)) }}"></div>
                                    @endif
                                    @if(!is_null($detail->image_path4))
                                    <div class="item"><img src="{{ $detail->image_path4 }}" alt="{{ ucfirst(strtolower($detail->product)) }}"></div>
                                    @endif
                                </div>
                                @if($detail->outofstk)
                                <div class="tag new">Out of stock</div>
                                @endif
                                <ul class="cart-wrap">
                                    @if(!$detail->outofstk)
                                    <li data-bs-toggle="modal">
                                        <button data-bs-toggle="tooltip" data-recno="{{ $detail->recno }}" onclick="addCart(this)" title="Add To Cart"><i class="fi flaticon-add-to-cart"></i></button>
                                    </li>
                                    @endif
                                    <li>
                                        <a title="Product Details" href="{{ route('product_single', $detail->recno)}}"><i class="fi flaticon-eye"></i></a>
                                    </li>
                                    <li>
                                        <button data-bs-toggle="tooltip" data-recno="{{ $detail->recno }}" onclick="addWishlist(this)" title="Add To Wishlist"><i class="fi flaticon-heart"></i></button>
                                    </li>
                                </ul>
                            </div>
                            <div class="text">
                                <h2><a href="{{ route('product_single', $detail->recno)}}">{{ ucfirst(strtolower($detail->product)) }}</a></h2>
                                <div class="rating-product">
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <span>{{ $detail->markupmargin }}%</span>
                                </div>
                                <div class="price">
                                    <span class="present-price">₹{{ number_format($detail->salesrate, 2)}}</span>
                                    <del class="old-price">₹{{ number_format($detail->mrp, 2) }}</del>
                                </div>
                                <!-- <div class="shop-btn">
                                    <a class="theme-btn-s2" href="{{ route('product_single', $detail->recno)}}">Shop Now</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endforeach
                    @endif


                    <!--<div class="more-btn">
                        <a class="theme-btn-s2" href="{{ route('product') }}">Load More</a>
                    </div>-->

                </div>
            </div>
        </div>
    </section>
    <!-- end of themart-interestproduct-section -->

    <!-- start of themart-interestproduct-section -->

    <!-- start of themart-upcoming-offer-section -->
    <section class="themart-upcoming-offer-section section-padding">
        <div class="container">
            <div class="upcoming-offer">
                <div class="left-shape">
                    <svg width="448" height="448" viewBox="0 0 448 448" fill="none">
                        <path d="M448 224C448 347.712 347.712 448 224 448C100.288 448 0 347.712 0 224C0 100.288 100.288 0 224 0C347.712 0 448 100.288 448 224ZM13.8949 224C13.8949 340.038 107.962 434.105 224 434.105C340.038 434.105 434.105 340.038 434.105 224C434.105 107.962 340.038 13.8949 224 13.8949C107.962 13.8949 13.8949 107.962 13.8949 224Z" fill="#F1E2CC" />
                        <path d="M405 224C405 323.964 323.964 405 224 405C124.036 405 43 323.964 43 224C43 124.036 124.036 43 224 43C323.964 43 405 124.036 405 224ZM56.2246 224C56.2246 316.66 131.34 391.775 224 391.775C316.66 391.775 391.775 316.66 391.775 224C391.775 131.34 316.66 56.2246 224 56.2246C131.34 56.2246 56.2246 131.34 56.2246 224Z" fill="#F1E2CC" />
                        <path d="M360 224C360 299.111 299.111 360 224 360C148.889 360 88 299.111 88 224C88 148.889 148.889 88 224 88C299.111 88 360 148.889 360 224ZM100.433 224C100.433 292.244 155.756 347.567 224 347.567C292.244 347.567 347.567 292.244 347.567 224C347.567 155.756 292.244 100.433 224 100.433C155.756 100.433 100.433 155.756 100.433 224Z" fill="#F1E2CC" />
                    </svg>
                </div>
                <div class="left-image">
                    <img src="{{ asset('assets/user/images/upcomming-left.png')}}" alt="">
                </div>
                <div class="right-shape">
                    <svg width="448" height="448" viewBox="0 0 448 448" fill="none">
                        <path d="M448 224C448 347.712 347.712 448 224 448C100.288 448 0 347.712 0 224C0 100.288 100.288 0 224 0C347.712 0 448 100.288 448 224ZM13.8949 224C13.8949 340.038 107.962 434.105 224 434.105C340.038 434.105 434.105 340.038 434.105 224C434.105 107.962 340.038 13.8949 224 13.8949C107.962 13.8949 13.8949 107.962 13.8949 224Z" fill="#F1E2CC" />
                        <path d="M405 224C405 323.964 323.964 405 224 405C124.036 405 43 323.964 43 224C43 124.036 124.036 43 224 43C323.964 43 405 124.036 405 224ZM56.2246 224C56.2246 316.66 131.34 391.775 224 391.775C316.66 391.775 391.775 316.66 391.775 224C391.775 131.34 316.66 56.2246 224 56.2246C131.34 56.2246 56.2246 131.34 56.2246 224Z" fill="#F1E2CC" />
                        <path d="M360 224C360 299.111 299.111 360 224 360C148.889 360 88 299.111 88 224C88 148.889 148.889 88 224 88C299.111 88 360 148.889 360 224ZM100.433 224C100.433 292.244 155.756 347.567 224 347.567C292.244 347.567 347.567 292.244 347.567 224C347.567 155.756 292.244 100.433 224 100.433C155.756 100.433 100.433 155.756 100.433 224Z" fill="#F1E2CC" />
                    </svg>
                </div>
                <div class="right-image">
                    <img src="{{ asset('assets/user/images/upcomming-right.png')}}" alt="">
                </div>
                <div class="section-title-text">
                    <h2>New Year Sale</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text">
                            <div class="shape-text">Up To <div class="shape-single">
                                    <div class="shape">
                                        <svg width="158" height="159" viewBox="0 0 158 159" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M156.059 58C146.681 24.5386 115.956 0 79.5 0C35.5934 0 0 35.5934 0 79.5C0 123.407 35.5934 159 79.5 159C117.749 159 149.689 131.988 157.285 96H147.228C139.817 126.526 112.306 149.193 79.5 149.193C41.0096 149.193 9.80698 117.99 9.80698 79.5C9.80698 41.0096 41.0096 9.80698 79.5 9.80698C110.488 9.80698 136.752 30.031 145.814 58H156.059Z" fill="url(#paint0_linear_62_180)" />

                                            <defs>
                                                <linearGradient id="paint0_linear_62_180" x1="78.6428" y1="0" x2="78.6428" y2="159" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#95CD2F" />
                                                    <stop offset="1" stop-color="#63911F" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    50
                                </div>% Off</div>
                            <a class="upcoming-btn" href="{{ route('product') }}">Shop Now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end of themart-upcoming-offer-section -->



    <!-- start of themart-trendingproduct-section -->
    <section class="themart-trendingproduct-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="wpo-section-title">
                        <h2>Trending Products</h2>
                    </div>
                </div>
            </div>

            <div class="trendin-slider owl-carousel">

                @if(isset($response))
                @foreach(json_decode($response)->data as $product)
                @foreach($product->productdetail as $detail)
                <div class="product-item">
                    <div class="image">
                        <img src="{{ !is_null($detail->image_path) ? $detail->image_path : asset('assets/user/images/cart/img-4.jpg')}}" alt="">

                        @if($detail->outofstk)
                        <div class="tag new">Out of stock</div>
                        @endif
                        <ul class="cart-wrap">
                            @if(!$detail->outofstk)
                            <li data-bs-toggle="modal">
                                <button data-bs-toggle="tooltip" data-recno="{{ $detail->recno }}" onclick="addCart(this)" title="Add To Cart"><i class="fi flaticon-add-to-cart"></i></button>
                            </li>
                            @endif
                            <li>
                                <a title="Product Details" href="{{ route('product_single', $detail->recno)}}"><i class="fi flaticon-eye"></i></a>
                            </li>
                            <li>
                                <button data-bs-toggle="tooltip" data-recno="{{ $detail->recno }}" onclick="addWishlist(this)" title="Add To Wishlist"><i class="fi flaticon-heart"></i></button>
                            </li>
                        </ul>
                    </div>
                    <div class="text">
                        <h2><a href="{{ route('product_single', $detail->recno)}}">{{ ucfirst(strtolower($detail->product)) }}</a></h2>
                        <div class="rating-product">
                            <i class="fi flaticon-star"></i>
                            <i class="fi flaticon-star"></i>
                            <i class="fi flaticon-star"></i>
                            <i class="fi flaticon-star"></i>
                            <i class="fi flaticon-star"></i>
                            <span>130</span>
                        </div>
                        <div class="price">
                            <span class="present-price">₹{{ number_format($detail->salesrate, 2)}}</span>
                            <del class="old-price">₹{{ number_format($detail->mrp, 2) }}</del>
                        </div>
                        <!--  <div class="shop-btn">
                            <a class="theme-btn-s2" href="{{ route('product_single', $detail->recno)}}">Shop Now</a>
                        </div> -->
                    </div>
                </div>
                @endforeach
                @endforeach
                @endif
            </div>
        </div>
    </section>
    <!-- end of themart-trendingproduct-section -->

    <!-- start of themart-highlight-product-section -->
    <section class="themart-highlight-product-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="highlight-wrap">
                        <h2>Top Selling</h2>

                        @if(isset($topproduct))
                        @foreach(json_decode($topproduct)->data as $product_top)
                        @foreach($product_top->productdetail as $detail_top)
                        <div class="product-card">
                            <div class="card-image">
                                <div class="image">
                                    <img src="{{ !is_null($detail->image_path) ? $detail_top->image_path : asset('assets/user/images/cart/img-4.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="content">
                                <h3><a href="{{ route('product_single', $detail->recno)}}">{{ $detail->product }}</a></h3>
                                <div class="rating-product">
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <span>{{ $detail_top->markupmargin }}%</span>
                                </div>
                                <div class="price">


                                    <span class="present-price">₹{{ number_format($detail_top->salesrate, 2)}}</span>
                                    <del class="old-price">₹{{ number_format($detail_top->mrp, 2) }}</del>

                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="highlight-wrap">
                        <h2>Recently added</h2>

                        @if(isset($recentproduct))
                        @foreach(json_decode($recentproduct)->data as $product)
                        @foreach($product->productdetail as $detail)
                        <div class="product-card">
                            <div class="card-image">
                                <div class="image">
                                    <img src="{{ !is_null($detail->image_path) ? $detail->image_path : asset('assets/user/images/cart/img-4.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="content">
                                <h3><a href="{{ route('product_single', $detail->recno)}}">{{ ucfirst(strtolower($detail->product)) }}</a></h3>
                                <div class="rating-product">
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <span>{{ $detail->markupmargin }}%</span>
                                </div>
                                <div class="price">
                                    <span class="present-price">₹{{ number_format($detail->salesrate, 2)}}</span>
                                    <del class="old-price">₹{{ number_format($detail->mrp, 2) }}</del>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="highlight-wrap">
                        <h2>Top Rated</h2>
                        @if(isset($fastmoving))
                        @foreach(json_decode($fastmoving)->data as $product_fastmoving)
                        @foreach($product_fastmoving->productdetail as $detail_fastmoving)
                        <div class="product-card">
                            <div class="card-image">
                                <div class="image">
                                <img src="{{ !is_null($detail->image_path) ? $detail->image_path : asset('assets/user/images/cart/img-4.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="content">
                                <h3><a href="{{ route('product_single', $detail->recno)}}">{{ ucfirst(strtolower($detail->product)) }}</a></h3>
                                <div class="rating-product">
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <span>{{ $detail_fastmoving->markupmargin }}%</span>
                                </div>
                                <div class="price">



                                    <span class="present-price">₹{{ number_format($detail_fastmoving->salesrate, 2)}}</span>
                                    <del class="old-price">₹{{ number_format($detail_fastmoving->mrp, 2) }}</del>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of themart-highlight-product-section -->

    <!-- start of themart-cta-section -->
    <section class="themart-cta-section section-padding">
        <div class="container">
            <div class="cta-wrap">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-12">
                        <div class="cta-content">
                            <h2>Subscribe Our Newsletter & <br>
                                Get 30% Discounts For Next Order</h2>
                            <form>
                                <div class="input-1">
                                    <input type="email" class="form-control" placeholder="Your Email..." required="">
                                    <div class="submit clearfix">
                                        <button class="theme-btn-s2" type="submit">Subscribe</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of themart-cta-section -->

    <!-- start wpo-service-section -->
    <section class="wpo-service-section mb-10">
        <div class="container">
            <div class="service-wrap">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="service-item">
                            <div class="service-item-img">
                                <img src="{{ asset('assets/user/images/service/1.png')}}" alt="">
                            </div>
                            <div class="service-item-text">
                                <h2>Free Shipping</h2>
                                <p>Free Shipping World Wide.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="service-item">
                            <div class="service-item-img">
                                <img src="{{ asset('assets/user/images/service/2.png')}}" alt="">
                            </div>
                            <div class="service-item-text">
                                <h2>24 X 7 Service</h2>
                                <p>Online Service For New Customer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="service-item">
                            <div class="service-item-img">
                                <img src="{{ asset('assets/user/images/service/3.png')}}" alt="">
                            </div>
                            <div class="service-item-text">
                                <h2>Festival Offer</h2>
                                <p>New Online Special Festival Offer.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- end wpo-service-section -->

    <!-- start wpo-newsletter-popup-area-section -->
    <section class="wpo-newsletter-popup-area-section">
        <div class="wpo-newsletter-popup-area">
            <div class="wpo-newsletter-popup-ineer">
                <button class="btn newsletter-close-btn"><i class="ti-close"></i></button>
                <div class="img-holder">
                    <img src="{{ asset('assets/user/images/newsletter.jpg')}}" alt>
                </div>
                <div class="details">
                    <h4>Get 30% discount shipped to your inbox</h4>
                    <p>Subscribe to the Themart eCommerce newsletter to receive timely updates to your favorite
                        products</p>
                    <form>
                        <div>
                            <input type="email" placeholder="Enter your email">
                            <button type="submit">Subscribe</button>
                        </div>
                        <div>
                            <label class="checkbox-holder"> Don't show this popup again!
                                <input type="checkbox" class="show-message">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end wpo-newsletter-popup-area-section -->




    @stop