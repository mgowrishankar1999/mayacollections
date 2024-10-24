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
                        <li>Product</li>
                    </ol>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end page-title -->

<!-- product-area-start -->
<div class="shop-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="shop-filter-wrap">
                    <div class="filter-item">
                        <div class="shop-filter-item">
                            <div class="shop-filter-search">
                                <form action="" method="GET">
                                    <div>
                                        <input type="text" class="form-control" placeholder="Search..">
                                        <button type="submit"><i class="ti-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="filter-item">
                        <div class="shop-filter-item category-widget">
                            <h2>Categories</h2>
                            <ul>
                                @foreach(json_decode($categoryData)->categories->data as $cData)
                                <li><a href="{{ route('product') }}?product_name={{$cData->dp_name}}" data-catid="{{$cData->dp_recno}}">{{$cData->dp_name}}</a></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <!--  <div class="filter-item">
                        <div class="shop-filter-item">
                            <h2>Filter by price</h2>
                            <div class="shopWidgetWraper">
                                <div class="priceFilterSlider">
                                    <form action="#" method="get" class="clearfix">
                                        <div id="sliderRange"></div>
                                        <div class="pfsWrap">
                                            <label>Price:</label>
                                            <span id="amount"></span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="filter-item">
                        <div class="shop-filter-item">
                            <h2>Color</h2>
                            <ul>
                                <li>
                                    @foreach(json_decode($allColor)->data as $coData)
                                <li><a href="{{ route('product') }}?product_name={{$productName}}&size={{$productsize}}&color={{$coData->color}}" data-catid="{{$coData->color}}">{{$coData->color}}</a>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="filter-item">
                        <div class="shop-filter-item">
                            <h2>Size</h2>
                            <ul>
                                <li>
                                    @foreach(json_decode($allSize)->data as $sData )
                                <li><a href="{{ route('product') }}?product_name={{$productName}}&size={{$sData->psize}}&color={{$productcolor}}" data-catid="{{$sData->psize}}">{{$sData->psize}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>


                    <div class="filter-item">
                        <div class="shop-filter-item">
                            <h2>Brands</h2>
                            <ul>
                                @foreach(json_decode($allBrand)->data as $bData)
                                <li><a href="{{ route('product') }}?product_name={{$productName}}&size={{$productsize}}&color={{$productcolor}}&brand={{$bData->brandname}}" data-catid="{{$bData->brandname}}">{{$bData->brandname}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!--   <div class="filter-item">
                                <div class="shop-filter-item new-product">
                                    <h2>New Products</h2>
                                    <ul>
                                        <li>
                                            <div class="product-card">
                                                <div class="card-image">
                                                    <div class="image">
                                                        <img src="assets/images/new-product/1.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h3><a href="product.php">Stylish Pink Coat</a></h3>
                                                    <div class="rating-product">
                                                        <i class="fi flaticon-star"></i>
                                                        <i class="fi flaticon-star"></i>
                                                        <i class="fi flaticon-star"></i>
                                                        <i class="fi flaticon-star"></i>
                                                        <i class="fi flaticon-star"></i>
                                                        <span>30</span>
                                                    </div>
                                                    <div class="price">
                                                        <span class="present-price">$120.00</span>
                                                        <del class="old-price">$200.00</del>
                                                    </div>
                                                </div>
                                            </div> 
                                        </li>
                                        <li>
                                            <div class="product-card">
                                                <div class="card-image">
                                                    <div class="image">
                                                        <img src="assets/images/new-product/2.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h3><a href="product.php">Blue Bag</a></h3>
                                                    <div class="rating-product">
                                                        <i class="fi flaticon-star"></i>
                                                        <i class="fi flaticon-star"></i>
                                                        <i class="fi flaticon-star"></i>
                                                        <i class="fi flaticon-star"></i>
                                                        <i class="fi flaticon-star"></i>
                                                        <span>30</span>
                                                    </div>
                                                    <div class="price">
                                                        <span class="present-price">$120.00</span>
                                                        <del class="old-price">$200.00</del>
                                                    </div>
                                                </div>
                                            </div> 
                                        </li>
                                        <li>
                                            <div class="product-card">
                                                <div class="card-image">
                                                    <div class="image">
                                                        <img src="assets/images/new-product/3.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h3><a href="product.php">Kids Blue Shoes</a></h3>
                                                    <div class="rating-product">
                                                        <i class="fi flaticon-star"></i>
                                                        <i class="fi flaticon-star"></i>
                                                        <i class="fi flaticon-star"></i>
                                                        <i class="fi flaticon-star"></i>
                                                        <i class="fi flaticon-star"></i>
                                                        <span>30</span>
                                                    </div>
                                                    <div class="price">
                                                        <span class="present-price">$120.00</span>
                                                        <del class="old-price">$200.00</del>
                                                    </div>
                                                </div>
                                            </div> 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="filter-item">
                                <div class="shop-filter-item tag-widget">
                                    <h2>Popular Tags</h2>
                                    <ul>
                                        <li><a href="#">Fashion</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Kids</a></li>
                                        <li><a href="#">Theme</a></li>
                                        <li><a href="#">Stylish</a></li>
                                        <li><a href="#">Women</a></li>
                                        <li><a href="#">Shop</a></li>
                                        <li><a href="#">Men</a></li>
                                        <li><a href="#">Blog</a></li>
                                    </ul>
                                </div>
                            </div> -->
                </div>
            </div>
            <div class="col-lg-8">
                <div class="shop-section-top-inner">
                    <div class="shoping-product">
                        <p>We found <span>10 items</span> for you!</p>
                    </div>
                    <!-- <div class="shoping-list">
                        <ul class="nav nav-mb-3 main-tab" id="tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="grid-tab" data-bs-toggle="pill" data-bs-target="#grid" type="button" role="tab" aria-controls="grid" aria-selected="true"><i class="fa fa-th "></i></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="list-tab" data-bs-toggle="pill" data-bs-target="#list" type="button" role="tab" aria-controls="list" aria-selected="false"><i class="fa fa-list "></i></button>
                            </li>
                        </ul>
                    </div> -->
                    <div class="short-by">
                        <ul class="cart-wrap">
                            <li data-bs-toggle="modal" data-bs-target="#popup-category">
                                <!-- <button data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"><i
                                                                    class=""></i>fgnjh</button> -->
                                <button class="button-75" role="button"><span class="text">Category</span></button>
                            </li>
                            <li data-bs-toggle="modal" data-bs-target="#popup-size">
                                <!--  <button data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"><i
                                                                    class=""></i>fgnjh</button> -->
                                <button class="button-75" role="button"><span class="text">Size</span></button>
                            </li>
                            <li data-bs-toggle="modal" data-bs-target="#popup-color">
                                <!-- <button data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"><i
                                                                    class=""></i>fgnjh</button> -->
                                <button class="button-75" role="button"><span class="text">Color</span></button>

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                        <div class="product-wrap">
                            <div class="row align-items-center">

                                @if(isset($response))
                                @foreach(json_decode($response)->data as $product)
                                @foreach($product->productdetail as $detail)
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
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
                            </div>
                        </div>
                    </div>
                    <!--  <div class="tab-pane fade product-list" id="list" role="tabpanel" aria-labelledby="list-tab">
                        <div class="product-row">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-12">
                                    <div class="product-item">
                                        <div class="image">
                                            <img src="assets/images/interest-product/1.png" alt="">
                                            <div class="tag new">New</div>
                                            <ul class="cart-wrap">
                                                <li>
                                                    <a href="cart.php" data-bs-toggle="tooltip" data-bs-html="true" title="Add To Cart"><i class="fi flaticon-add-to-cart"></i></a>
                                                </li>
                                                <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                    <button data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"><i class="fi flaticon-eye"></i></button>
                                                </li>
                                                <li>
                                                    <a href="wishlist.php" data-bs-toggle="tooltip" data-bs-html="true" title="Wish List"><i class="fi flaticon-heart" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <h2><a href="product-single.php">Wireless Headphones</a></h2>
                                            <div class="rating-product">
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <span>130</span>
                                            </div>
                                            <div class="price">
                                                <span class="present-price">$120.00</span>
                                                <del class="old-price">$200.00</del>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur,
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-12">
                                    <div class="product-item">
                                        <div class="image">
                                            <img src="assets/images/interest-product/2.png" alt="">
                                            <div class="tag sale">Sale</div>
                                            <ul class="cart-wrap">
                                                <li>
                                                    <a href="cart.php" data-bs-toggle="tooltip" data-bs-html="true" title="Add To Cart"><i class="fi flaticon-add-to-cart"></i></a>
                                                </li>
                                                <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                    <button data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"><i class="fi flaticon-eye"></i></button>
                                                </li>
                                                <li>
                                                    <a href="wishlist.php" data-bs-toggle="tooltip" data-bs-html="true" title="Wish List"><i class="fi flaticon-heart" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <h2><a href="product-single.php">Blue Bag with Lock</a></h2>
                                            <div class="rating-product">
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <span>130</span>
                                            </div>
                                            <div class="price">
                                                <span class="present-price">$120.00</span>
                                                <del class="old-price">$200.00</del>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur,
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-12">
                                    <div class="product-item">
                                        <div class="image">
                                            <img src="assets/images/interest-product/3.png" alt="">
                                            <div class="tag new">New</div>
                                            <ul class="cart-wrap">
                                                <li>
                                                    <a href="cart.php" data-bs-toggle="tooltip" data-bs-html="true" title="Add To Cart"><i class="fi flaticon-add-to-cart"></i></a>
                                                </li>
                                                <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                    <button data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"><i class="fi flaticon-eye"></i></button>
                                                </li>
                                                <li>
                                                    <a href="wishlist.php" data-bs-toggle="tooltip" data-bs-html="true" title="Wish List"><i class="fi flaticon-heart" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <h2><a href="product-single.php">Stylish Pink Top</a></h2>
                                            <div class="rating-product">
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <span>120</span>
                                            </div>
                                            <div class="price">
                                                <span class="present-price">$150.00</span>
                                                <del class="old-price">$180.00</del>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur,
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-12">
                                    <div class="product-item">
                                        <div class="image">
                                            <img src="assets/images/interest-product/4.png" alt="">
                                            <div class="tag new">New</div>
                                            <ul class="cart-wrap">
                                                <li>
                                                    <a href="cart.php" data-bs-toggle="tooltip" data-bs-html="true" title="Add To Cart"><i class="fi flaticon-add-to-cart"></i></a>
                                                </li>
                                                <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                    <button data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"><i class="fi flaticon-eye"></i></button>
                                                </li>
                                                <li>
                                                    <a href="wishlist.php" data-bs-toggle="tooltip" data-bs-html="true" title="Wish List"><i class="fi flaticon-heart" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <h2><a href="product-single.php">Brown Com Boots</a></h2>
                                            <div class="rating-product">
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <span>190</span>
                                            </div>
                                            <div class="price">
                                                <span class="present-price">$180.00</span>
                                                <del class="old-price">$200.00</del>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur,
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-12">
                                    <div class="product-item">
                                        <div class="image">
                                            <img src="assets/images/interest-product/5.png" alt="">
                                            <div class="tag sale">Sale</div>
                                            <ul class="cart-wrap">
                                                <li>
                                                    <a href="cart.php" data-bs-toggle="tooltip" data-bs-html="true" title="Add To Cart"><i class="fi flaticon-add-to-cart"></i></a>
                                                </li>
                                                <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                    <button data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"><i class="fi flaticon-eye"></i></button>
                                                </li>
                                                <li>
                                                    <a href="wishlist.php" data-bs-toggle="tooltip" data-bs-html="true" title="Wish List"><i class="fi flaticon-heart" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <h2><a href="product-single.php">Winter Sweter</a></h2>
                                            <div class="rating-product">
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <span>130</span>
                                            </div>
                                            <div class="price">
                                                <span class="present-price">$120.00</span>
                                                <del class="old-price">$200.00</del>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur,
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-12">
                                    <div class="product-item">
                                        <div class="image">
                                            <img src="assets/images/interest-product/6.png" alt="">
                                            <div class="tag new">New</div>
                                            <ul class="cart-wrap">
                                                <li>
                                                    <a href="cart.php" data-bs-toggle="tooltip" data-bs-html="true" title="Add To Cart"><i class="fi flaticon-add-to-cart"></i></a>
                                                </li>
                                                <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                    <button data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"><i class="fi flaticon-eye"></i></button>
                                                </li>
                                                <li>
                                                    <a href="wishlist.php" data-bs-toggle="tooltip" data-bs-html="true" title="Wish List"><i class="fi flaticon-heart" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <h2><a href="product-single.php">Blue Kids Shoes</a></h2>
                                            <div class="rating-product">
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <span>130</span>
                                            </div>
                                            <div class="price">
                                                <span class="present-price">$120.00</span>
                                                <del class="old-price">$200.00</del>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur,
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-12">
                                    <div class="product-item">
                                        <div class="image">
                                            <img src="assets/images/interest-product/7.png" alt="">
                                            <div class="tag new">New</div>
                                            <ul class="cart-wrap">
                                                <li>
                                                    <a href="cart.php" data-bs-toggle="tooltip" data-bs-html="true" title="Add To Cart"><i class="fi flaticon-add-to-cart"></i></a>
                                                </li>
                                                <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                    <button data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"><i class="fi flaticon-eye"></i></button>
                                                </li>
                                                <li>
                                                    <a href="wishlist.php" data-bs-toggle="tooltip" data-bs-html="true" title="Wish List"><i class="fi flaticon-heart" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <h2><a href="product-single.php">Stylish Bag</a></h2>
                                            <div class="rating-product">
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <span>140</span>
                                            </div>
                                            <div class="price">
                                                <span class="present-price">$130.00</span>
                                                <del class="old-price">$180.00</del>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur,
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-12">
                                    <div class="product-item">
                                        <div class="image">
                                            <img src="assets/images/interest-product/8.png" alt="">
                                            <div class="tag new">New</div>
                                            <ul class="cart-wrap">
                                                <li>
                                                    <a href="cart.php" data-bs-toggle="tooltip" data-bs-html="true" title="Add To Cart"><i class="fi flaticon-add-to-cart"></i></a>
                                                </li>
                                                <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                    <button data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"><i class="fi flaticon-eye"></i></button>
                                                </li>
                                                <li>
                                                    <a href="wishlist.php" data-bs-toggle="tooltip" data-bs-html="true" title="Wish List"><i class="fi flaticon-heart" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <h2><a href="product-single.php">Finger Rings</a></h2>
                                            <div class="rating-product">
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <span>130</span>
                                            </div>
                                            <div class="price">
                                                <span class="present-price">$120.00</span>
                                                <del class="old-price">$200.00</del>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur,
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-12">
                                    <div class="product-item">
                                        <div class="image">
                                            <img src="assets/images/interest-product/1.png" alt="">
                                            <div class="tag new">New</div>
                                            <ul class="cart-wrap">
                                                <li>
                                                    <a href="cart.php" data-bs-toggle="tooltip" data-bs-html="true" title="Add To Cart"><i class="fi flaticon-add-to-cart"></i></a>
                                                </li>
                                                <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                    <button data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"><i class="fi flaticon-eye"></i></button>
                                                </li>
                                                <li>
                                                    <a href="wishlist.php" data-bs-toggle="tooltip" data-bs-html="true" title="Wish List"><i class="fi flaticon-heart" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <h2><a href="product-single.php">Wireless Headphones</a></h2>
                                            <div class="rating-product">
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <span>130</span>
                                            </div>
                                            <div class="price">
                                                <span class="present-price">$120.00</span>
                                                <del class="old-price">$200.00</del>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur,
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-12">
                                    <div class="product-item">
                                        <div class="image">
                                            <img src="assets/images/interest-product/2.png" alt="">
                                            <div class="tag sale">Sale</div>
                                            <ul class="cart-wrap">
                                                <li>
                                                    <a href="cart.php" data-bs-toggle="tooltip" data-bs-html="true" title="Add To Cart"><i class="fi flaticon-add-to-cart"></i></a>
                                                </li>
                                                <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                    <button data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"><i class="fi flaticon-eye"></i></button>
                                                </li>
                                                <li>
                                                    <a href="wishlist.php" data-bs-toggle="tooltip" data-bs-html="true" title="Wish List"><i class="fi flaticon-heart" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <h2><a href="product-single.php">Blue Bag with Lock</a></h2>
                                            <div class="rating-product">
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <span>130</span>
                                            </div>
                                            <div class="price">
                                                <span class="present-price">$120.00</span>
                                                <del class="old-price">$200.00</del>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur,
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-12">
                                    <div class="product-item">
                                        <div class="image">
                                            <img src="assets/images/interest-product/3.png" alt="">
                                            <div class="tag new">New</div>
                                            <ul class="cart-wrap">
                                                <li>
                                                    <a href="cart.php" data-bs-toggle="tooltip" data-bs-html="true" title="Add To Cart"><i class="fi flaticon-add-to-cart"></i></a>
                                                </li>
                                                <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                    <button data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"><i class="fi flaticon-eye"></i></button>
                                                </li>
                                                <li>
                                                    <a href="wishlist.php" data-bs-toggle="tooltip" data-bs-html="true" title="Wish List"><i class="fi flaticon-heart" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <h2><a href="product-single.php">Stylish Pink Top</a></h2>
                                            <div class="rating-product">
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <span>120</span>
                                            </div>
                                            <div class="price">
                                                <span class="present-price">$150.00</span>
                                                <del class="old-price">$180.00</del>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur,
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-12">
                                    <div class="product-item">
                                        <div class="image">
                                            <img src="assets/images/interest-product/4.png" alt="">
                                            <div class="tag new">New</div>
                                            <ul class="cart-wrap">
                                                <li>
                                                    <a href="cart.php" data-bs-toggle="tooltip" data-bs-html="true" title="Add To Cart"><i class="fi flaticon-add-to-cart"></i></a>
                                                </li>
                                                <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                    <button data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"><i class="fi flaticon-eye"></i></button>
                                                </li>
                                                <li>
                                                    <a href="wishlist.php" data-bs-toggle="tooltip" data-bs-html="true" title="Wish List"><i class="fi flaticon-heart" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <h2><a href="product-single.php">Brown Com Boots</a></h2>
                                            <div class="rating-product">
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <span>190</span>
                                            </div>
                                            <div class="price">
                                                <span class="present-price">$180.00</span>
                                                <del class="old-price">$200.00</del>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur,
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-12">
                                    <div class="product-item">
                                        <div class="image">
                                            <img src="assets/images/interest-product/5.png" alt="">
                                            <div class="tag sale">Sale</div>
                                            <ul class="cart-wrap">
                                                <li>
                                                    <a href="cart.php" data-bs-toggle="tooltip" data-bs-html="true" title="Add To Cart"><i class="fi flaticon-add-to-cart"></i></a>
                                                </li>
                                                <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                    <button data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"><i class="fi flaticon-eye"></i></button>
                                                </li>
                                                <li>
                                                    <a href="wishlist.php" data-bs-toggle="tooltip" data-bs-html="true" title="Wish List"><i class="fi flaticon-heart" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <h2><a href="product-single.php">Winter Sweter</a></h2>
                                            <div class="rating-product">
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <span>130</span>
                                            </div>
                                            <div class="price">
                                                <span class="present-price">$120.00</span>
                                                <del class="old-price">$200.00</del>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur,
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-12">
                                    <div class="product-item">
                                        <div class="image">
                                            <img src="assets/images/interest-product/6.png" alt="">
                                            <div class="tag new">New</div>
                                            <ul class="cart-wrap">
                                                <li>
                                                    <a href="cart.php" data-bs-toggle="tooltip" data-bs-html="true" title="Add To Cart"><i class="fi flaticon-add-to-cart"></i></a>
                                                </li>
                                                <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                    <button data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"><i class="fi flaticon-eye"></i></button>
                                                </li>
                                                <li>
                                                    <a href="wishlist.php" data-bs-toggle="tooltip" data-bs-html="true" title="Wish List"><i class="fi flaticon-heart" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <h2><a href="product-single.php">Blue Kids Shoes</a></h2>
                                            <div class="rating-product">
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <span>130</span>
                                            </div>
                                            <div class="price">
                                                <span class="present-price">$120.00</span>
                                                <del class="old-price">$200.00</del>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur,
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-12">
                                    <div class="product-item">
                                        <div class="image">
                                            <img src="assets/images/interest-product/7.png" alt="">
                                            <div class="tag new">New</div>
                                            <ul class="cart-wrap">
                                                <li>
                                                    <a href="cart.php" data-bs-toggle="tooltip" data-bs-html="true" title="Add To Cart"><i class="fi flaticon-add-to-cart"></i></a>
                                                </li>
                                                <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                    <button data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"><i class="fi flaticon-eye"></i></button>
                                                </li>
                                                <li>
                                                    <a href="wishlist.php" data-bs-toggle="tooltip" data-bs-html="true" title="Wish List"><i class="fi flaticon-heart" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <h2><a href="product-single.php">Stylish Bag</a></h2>
                                            <div class="rating-product">
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <span>140</span>
                                            </div>
                                            <div class="price">
                                                <span class="present-price">$130.00</span>
                                                <del class="old-price">$180.00</del>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur,
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-12">
                                    <div class="product-item">
                                        <div class="image">
                                            <img src="assets/images/interest-product/8.png" alt="">
                                            <div class="tag new">New</div>
                                            <ul class="cart-wrap">
                                                <li>
                                                    <a href="cart.php" data-bs-toggle="tooltip" data-bs-html="true" title="Add To Cart"><i class="fi flaticon-add-to-cart"></i></a>
                                                </li>
                                                <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                    <button data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"><i class="fi flaticon-eye"></i></button>
                                                </li>
                                                <li>
                                                    <a href="wishlist.php" data-bs-toggle="tooltip" data-bs-html="true" title="Wish List"><i class="fi flaticon-heart" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <h2><a href="product-single.php">Finger Rings</a></h2>
                                            <div class="rating-product">
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <span>130</span>
                                            </div>
                                            <div class="price">
                                                <span class="present-price">$120.00</span>
                                                <del class="old-price">$200.00</del>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur,
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-12">
                                    <div class="product-item">
                                        <div class="image">
                                            <img src="assets/images/interest-product/2.png" alt="">
                                            <div class="tag new">New</div>
                                            <ul class="cart-wrap">
                                                <li>
                                                    <a href="cart.php" data-bs-toggle="tooltip" data-bs-html="true" title="Add To Cart"><i class="fi flaticon-add-to-cart"></i></a>
                                                </li>
                                                <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                    <button data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"><i class="fi flaticon-eye"></i></button>
                                                </li>
                                                <li>
                                                    <a href="wishlist.php" data-bs-toggle="tooltip" data-bs-html="true" title="Wish List"><i class="fi flaticon-heart" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <h2><a href="product-single.php">Blue Bag with Lock</a></h2>
                                            <div class="rating-product">
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <span>130</span>
                                            </div>
                                            <div class="price">
                                                <span class="present-price">$120.00</span>
                                                <del class="old-price">$200.00</del>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur,
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-12">
                                    <div class="product-item">
                                        <div class="image">
                                            <img src="assets/images/interest-product/5.png" alt="">
                                            <div class="tag new">New</div>
                                            <ul class="cart-wrap">
                                                <li>
                                                    <a href="cart.php" data-bs-toggle="tooltip" data-bs-html="true" title="Add To Cart"><i class="fi flaticon-add-to-cart"></i></a>
                                                </li>
                                                <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                    <button data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"><i class="fi flaticon-eye"></i></button>
                                                </li>
                                                <li>
                                                    <a href="wishlist.php" data-bs-toggle="tooltip" data-bs-html="true" title="Wish List"><i class="fi flaticon-heart" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <h2><a href="product-single.php">Stylish Bag</a></h2>
                                            <div class="rating-product">
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <span>130</span>
                                            </div>
                                            <div class="price">
                                                <span class="present-price">$120.00</span>
                                                <del class="old-price">$200.00</del>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur,
                                                adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-area-end -->






@stop