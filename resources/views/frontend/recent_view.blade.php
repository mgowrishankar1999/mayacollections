@extends('frontend.layout.master')

@section('content')

<!-- start wpo-page-title -->
<section class="wpo-page-title">
    <h2 class="d-none">Hide</h2>
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="wpo-breadcumb-wrap">
                    <ol class="wpo-breadcumb-wrap">
                        <li><a href="index.php">Home</a></li>
                        <li>Recently Viewed</li>
                    </ol>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end page-title -->

<!-- start of themart-interestproduct-section -->
<section class="themart-interestproduct-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="wpo-section-title">
                    <h2>Recently Viewed Product</h2>
                </div>
            </div>
        </div>
        <div class="product-wrap">
            <div class="row">

                @if(isset($recentProduct))
                @foreach(json_decode($recentProduct)->data as $product)
                    @foreach($product->productdetail as $detail)
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="product-item">
                        <div class="image">
                            <img src="{{ asset('assets/user/images/interest-product/1.png')}}" alt="">
                            <div class="tag new">New</div>
                            <ul class="cart-wrap">
                                <li data-bs-toggle="modal">
                                    <button data-bs-toggle="tooltip" data-recno="{{ $detail->recno }}" onclick="addCart(this)" title="Add To Cart"><i class="fi flaticon-add-to-cart"></i></button>
                                </li>
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
                         
                        </div>
                    </div>
                </div>
                @endforeach
                @endforeach
                @endif
               <!--  <div class="more-btn">
                    <a class="theme-btn-s2" href="product.php">Load More</a>
                </div> -->
            </div>
        </div>
    </div>
</section>
<!-- end of themart-interestproduct-section -->
@stop