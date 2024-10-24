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
                                <li>Deals</li>
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
                    <div class="col-lg-8">
                        <div class="shop-section-top-inner">
                            <div class="shoping-product">
                                <p>We found <span>10 items</span> for you!</p>
                            </div>
                            <div class="shoping-list">
                                <ul class="nav nav-mb-3 main-tab" id="tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="grid-tab" data-bs-toggle="pill"
                                            data-bs-target="#grid" type="button" role="tab" aria-controls="grid"
                                            aria-selected="true"><i class="fa fa-th "></i></button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="list-tab" data-bs-toggle="pill"
                                            data-bs-target="#list" type="button" role="tab" aria-controls="list"
                                            aria-selected="false"><i class="fa fa-list "></i></button>
                                    </li>
                                </ul>
                            </div>
                            <div class="short-by">
                                <ul>
                                    <li>
                                        Sort by:
                                    </li>
                                    <li>
                                        <select name="show">
                                            <option value="">Default Sorting</option>
                                            <option value="">Popularity</option>
                                            <option value="">Average Rating</option>
                                            <option value="">Newness</option>
                                            <option value="">Low To High</option>
                                            <option value="">High To Low</option>
                                        </select>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                                <div class="product-wrap">
                                    <div class="row align-items-center">
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="product-item">
                                                <div class="image">
                                                    <img src="assets/images/interest-product/1.png" alt="">
                                                    <div class="tag new">New</div>
                                                    <ul class="cart-wrap">
                                                        <li>
                                                            <a href="{{ route('cart') }}" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Add To Cart"><i
                                                                    class="fi flaticon-add-to-cart"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                            <button data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Quick View"><i
                                                                    class="fi flaticon-eye"></i></button>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.php" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Wish List"><i
                                                                    class="fi flaticon-heart"
                                                                    aria-hidden="true"></i></a>
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
                                                    <div class="shop-btn">
                                                        <a class="theme-btn-s2" href="product.php">Shop Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="product-item">
                                                <div class="image">
                                                    <img src="assets/images/interest-product/2.png" alt="">
                                                    <div class="tag sale">Sale</div>
                                                    <ul class="cart-wrap">
                                                        <li>
                                                            <a href="{{ route('cart') }}" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Add To Cart"><i
                                                                    class="fi flaticon-add-to-cart"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                            <button data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Quick View"><i
                                                                    class="fi flaticon-eye"></i></button>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.php" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Wish List"><i
                                                                    class="fi flaticon-heart"
                                                                    aria-hidden="true"></i></a>
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
                                                        <span>120</span>
                                                    </div>
                                                    <div class="price">
                                                        <span class="present-price">$160.00</span>
                                                        <del class="old-price">$190.00</del>
                                                    </div>
                                                    <div class="shop-btn">
                                                        <a class="theme-btn-s2" href="product.php">Shop Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="product-item">
                                                <div class="image">
                                                    <img src="assets/images/interest-product/3.png" alt="">
                                                    <div class="tag new">New</div>
                                                    <ul class="cart-wrap">
                                                        <li>
                                                            <a href="{{ route('cart') }}" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Add To Cart"><i
                                                                    class="fi flaticon-add-to-cart"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                            <button data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Quick View"><i
                                                                    class="fi flaticon-eye"></i></button>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.php" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Wish List"><i
                                                                    class="fi flaticon-heart"
                                                                    aria-hidden="true"></i></a>
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
                                                        <span>150</span>
                                                    </div>
                                                    <div class="price">
                                                        <span class="present-price">$150.00</span>
                                                        <del class="old-price">$200.00</del>
                                                    </div>
                                                    <div class="shop-btn">
                                                        <a class="theme-btn-s2" href="product.php">Shop Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="product-item">
                                                <div class="image">
                                                    <img src="assets/images/interest-product/4.png" alt="">
                                                    <div class="tag sale">Sale</div>
                                                    <ul class="cart-wrap">
                                                        <li>
                                                            <a href="{{ route('cart') }}" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Add To Cart"><i
                                                                    class="fi flaticon-add-to-cart"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                            <button data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Quick View"><i
                                                                    class="fi flaticon-eye"></i></button>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.php" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Wish List"><i
                                                                    class="fi flaticon-heart"
                                                                    aria-hidden="true"></i></a>
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
                                                        <span>120</span>
                                                    </div>
                                                    <div class="price">
                                                        <span class="present-price">$120.00</span>
                                                        <del class="old-price">$150.00</del>
                                                    </div>
                                                    <div class="shop-btn">
                                                        <a class="theme-btn-s2" href="product.php">Shop Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="product-item">
                                                <div class="image">
                                                    <img src="assets/images/interest-product/5.png" alt="">
                                                    <div class="tag new">New</div>
                                                    <ul class="cart-wrap">
                                                        <li>
                                                            <a href="{{ route('cart') }}" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Add To Cart"><i
                                                                    class="fi flaticon-add-to-cart"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                            <button data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Quick View"><i
                                                                    class="fi flaticon-eye"></i></button>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.php" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Wish List"><i
                                                                    class="fi flaticon-heart"
                                                                    aria-hidden="true"></i></a>
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
                                                        <span>160</span>
                                                    </div>
                                                    <div class="price">
                                                        <span class="present-price">$110.00</span>
                                                        <del class="old-price">$130.00</del>
                                                    </div>
                                                    <div class="shop-btn">
                                                        <a class="theme-btn-s2" href="product.php">Shop Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="product-item">
                                                <div class="image">
                                                    <img src="assets/images/interest-product/6.png" alt="">
                                                    <div class="tag sale">Sale</div>
                                                    <ul class="cart-wrap">
                                                        <li>
                                                            <a href="{{ route('cart') }}" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Add To Cart"><i
                                                                    class="fi flaticon-add-to-cart"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                            <button data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Quick View"><i
                                                                    class="fi flaticon-eye"></i></button>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.php" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Wish List"><i
                                                                    class="fi flaticon-heart"
                                                                    aria-hidden="true"></i></a>
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
                                                        <span class="present-price">$180.00</span>
                                                        <del class="old-price">$200.00</del>
                                                    </div>
                                                    <div class="shop-btn">
                                                        <a class="theme-btn-s2" href="product.php">Shop Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="product-item">
                                                <div class="image">
                                                    <img src="assets/images/interest-product/7.png" alt="">
                                                    <div class="tag new">New</div>
                                                    <ul class="cart-wrap">
                                                        <li>
                                                            <a href="{{ route('cart') }}" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Add To Cart"><i
                                                                    class="fi flaticon-add-to-cart"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                            <button data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Quick View"><i
                                                                    class="fi flaticon-eye"></i></button>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.php" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Wish List"><i
                                                                    class="fi flaticon-heart"
                                                                    aria-hidden="true"></i></a>
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
                                                        <span>120</span>
                                                    </div>
                                                    <div class="price">
                                                        <span class="present-price">$170.00</span>
                                                        <del class="old-price">$200.00</del>
                                                    </div>
                                                    <div class="shop-btn">
                                                        <a class="theme-btn-s2" href="product.php">Shop Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="product-item">
                                                <div class="image">
                                                    <img src="assets/images/interest-product/8.png" alt="">
                                                    <div class="tag sale">Sale</div>
                                                    <ul class="cart-wrap">
                                                        <li>
                                                            <a href="{{ route('cart') }}" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Add To Cart"><i
                                                                    class="fi flaticon-add-to-cart"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                            <button data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Quick View"><i
                                                                    class="fi flaticon-eye"></i></button>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.php" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Wish List"><i
                                                                    class="fi flaticon-heart"
                                                                    aria-hidden="true"></i></a>
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
                                                        <span>120</span>
                                                    </div>
                                                    <div class="price">
                                                        <span class="present-price">$100.00</span>
                                                        <del class="old-price">$130.00</del>
                                                    </div>
                                                    <div class="shop-btn">
                                                        <a class="theme-btn-s2" href="product.php">Shop Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="product-item">
                                                <div class="image">
                                                    <img src="assets/images/trending-product/1.png" alt="">
                                                    <div class="tag new">New</div>
                                                    <ul class="cart-wrap">
                                                        <li>
                                                            <a href="{{ route('cart') }}" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Add To Cart"><i
                                                                    class="fi flaticon-add-to-cart"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                            <button data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Quick View"><i
                                                                    class="fi flaticon-eye"></i></button>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.php" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Wish List"><i
                                                                    class="fi flaticon-heart"
                                                                    aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="text">
                                                    <h2><a href="product-single.php">Pink Baby Shoes</a></h2>
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
                                                    <div class="shop-btn">
                                                        <a class="theme-btn-s2" href="product.php">Shop Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="product-item">
                                                <div class="image">
                                                    <img src="assets/images/interest-product/1.png" alt="">
                                                    <div class="tag new">New</div>
                                                    <ul class="cart-wrap">
                                                        <li>
                                                            <a href="{{ route('cart') }}" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Add To Cart"><i
                                                                    class="fi flaticon-add-to-cart"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                            <button data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Quick View"><i
                                                                    class="fi flaticon-eye"></i></button>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.php" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Wish List"><i
                                                                    class="fi flaticon-heart"
                                                                    aria-hidden="true"></i></a>
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
                                                    <div class="shop-btn">
                                                        <a class="theme-btn-s2" href="product.php">Shop Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="product-item">
                                                <div class="image">
                                                    <img src="assets/images/interest-product/2.png" alt="">
                                                    <div class="tag sale">Sale</div>
                                                    <ul class="cart-wrap">
                                                        <li>
                                                            <a href="{{ route('cart') }}" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Add To Cart"><i
                                                                    class="fi flaticon-add-to-cart"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                            <button data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Quick View"><i
                                                                    class="fi flaticon-eye"></i></button>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.php" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Wish List"><i
                                                                    class="fi flaticon-heart"
                                                                    aria-hidden="true"></i></a>
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
                                                        <span>120</span>
                                                    </div>
                                                    <div class="price">
                                                        <span class="present-price">$160.00</span>
                                                        <del class="old-price">$190.00</del>
                                                    </div>
                                                    <div class="shop-btn">
                                                        <a class="theme-btn-s2" href="product.php">Shop Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="product-item">
                                                <div class="image">
                                                    <img src="assets/images/interest-product/3.png" alt="">
                                                    <div class="tag new">New</div>
                                                    <ul class="cart-wrap">
                                                        <li>
                                                            <a href="{{ route('cart') }}" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Add To Cart"><i
                                                                    class="fi flaticon-add-to-cart"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                            <button data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Quick View"><i
                                                                    class="fi flaticon-eye"></i></button>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.php" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Wish List"><i
                                                                    class="fi flaticon-heart"
                                                                    aria-hidden="true"></i></a>
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
                                                        <span>150</span>
                                                    </div>
                                                    <div class="price">
                                                        <span class="present-price">$150.00</span>
                                                        <del class="old-price">$200.00</del>
                                                    </div>
                                                    <div class="shop-btn">
                                                        <a class="theme-btn-s2" href="product.php">Shop Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="product-item">
                                                <div class="image">
                                                    <img src="assets/images/interest-product/4.png" alt="">
                                                    <div class="tag sale">Sale</div>
                                                    <ul class="cart-wrap">
                                                        <li>
                                                            <a href="{{ route('cart') }}" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Add To Cart"><i
                                                                    class="fi flaticon-add-to-cart"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                            <button data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Quick View"><i
                                                                    class="fi flaticon-eye"></i></button>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.php" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Wish List"><i
                                                                    class="fi flaticon-heart"
                                                                    aria-hidden="true"></i></a>
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
                                                        <span>120</span>
                                                    </div>
                                                    <div class="price">
                                                        <span class="present-price">$120.00</span>
                                                        <del class="old-price">$150.00</del>
                                                    </div>
                                                    <div class="shop-btn">
                                                        <a class="theme-btn-s2" href="product.php">Shop Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="product-item">
                                                <div class="image">
                                                    <img src="assets/images/interest-product/5.png" alt="">
                                                    <div class="tag new">New</div>
                                                    <ul class="cart-wrap">
                                                        <li>
                                                            <a href="{{ route('cart') }}" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Add To Cart"><i
                                                                    class="fi flaticon-add-to-cart"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                            <button data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Quick View"><i
                                                                    class="fi flaticon-eye"></i></button>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.php" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Wish List"><i
                                                                    class="fi flaticon-heart"
                                                                    aria-hidden="true"></i></a>
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
                                                        <span>160</span>
                                                    </div>
                                                    <div class="price">
                                                        <span class="present-price">$110.00</span>
                                                        <del class="old-price">$130.00</del>
                                                    </div>
                                                    <div class="shop-btn">
                                                        <a class="theme-btn-s2" href="product.php">Shop Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="product-item">
                                                <div class="image">
                                                    <img src="assets/images/interest-product/6.png" alt="">
                                                    <div class="tag sale">Sale</div>
                                                    <ul class="cart-wrap">
                                                        <li>
                                                            <a href="{{ route('cart') }}" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Add To Cart"><i
                                                                    class="fi flaticon-add-to-cart"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                            <button data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Quick View"><i
                                                                    class="fi flaticon-eye"></i></button>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.php" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Wish List"><i
                                                                    class="fi flaticon-heart"
                                                                    aria-hidden="true"></i></a>
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
                                                        <span class="present-price">$180.00</span>
                                                        <del class="old-price">$200.00</del>
                                                    </div>
                                                    <div class="shop-btn">
                                                        <a class="theme-btn-s2" href="product.php">Shop Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade product-list" id="list" role="tabpanel"
                                aria-labelledby="list-tab">
                                <div class="product-row">
                                    <div class="row align-items-center">
                                        <div class="col-xl-6 col-12">
                                            <div class="product-item">
                                                <div class="image">
                                                    <img src="assets/images/interest-product/1.png" alt="">
                                                    <div class="tag new">New</div>
                                                    <ul class="cart-wrap">
                                                        <li>
                                                            <a href="{{ route('cart') }}" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Add To Cart"><i
                                                                    class="fi flaticon-add-to-cart"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                            <button data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Quick View"><i
                                                                    class="fi flaticon-eye"></i></button>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.php" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Wish List"><i
                                                                    class="fi flaticon-heart"
                                                                    aria-hidden="true"></i></a>
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
                                                            <a href="{{ route('cart') }}" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Add To Cart"><i
                                                                    class="fi flaticon-add-to-cart"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                            <button data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Quick View"><i
                                                                    class="fi flaticon-eye"></i></button>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.php" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Wish List"><i
                                                                    class="fi flaticon-heart"
                                                                    aria-hidden="true"></i></a>
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
                                                            <a href="{{ route('cart') }}" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Add To Cart"><i
                                                                    class="fi flaticon-add-to-cart"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                            <button data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Quick View"><i
                                                                    class="fi flaticon-eye"></i></button>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.php" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Wish List"><i
                                                                    class="fi flaticon-heart"
                                                                    aria-hidden="true"></i></a>
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
                                                            <a href="{{ route('cart') }}" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Add To Cart"><i
                                                                    class="fi flaticon-add-to-cart"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                            <button data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Quick View"><i
                                                                    class="fi flaticon-eye"></i></button>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.php" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Wish List"><i
                                                                    class="fi flaticon-heart"
                                                                    aria-hidden="true"></i></a>
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
                                                            <a href="{{ route('cart') }}" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Add To Cart"><i
                                                                    class="fi flaticon-add-to-cart"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                            <button data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Quick View"><i
                                                                    class="fi flaticon-eye"></i></button>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.php" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Wish List"><i
                                                                    class="fi flaticon-heart"
                                                                    aria-hidden="true"></i></a>
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
                                                            <a href="{{ route('cart') }}" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Add To Cart"><i
                                                                    class="fi flaticon-add-to-cart"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                            <button data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Quick View"><i
                                                                    class="fi flaticon-eye"></i></button>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.php" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Wish List"><i
                                                                    class="fi flaticon-heart"
                                                                    aria-hidden="true"></i></a>
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
                                                            <a href="{{ route('cart') }}" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Add To Cart"><i
                                                                    class="fi flaticon-add-to-cart"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                            <button data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Quick View"><i
                                                                    class="fi flaticon-eye"></i></button>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.php" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Wish List"><i
                                                                    class="fi flaticon-heart"
                                                                    aria-hidden="true"></i></a>
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
                                                            <a href="{{ route('cart') }}" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Add To Cart"><i
                                                                    class="fi flaticon-add-to-cart"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                            <button data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Quick View"><i
                                                                    class="fi flaticon-eye"></i></button>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.php" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Wish List"><i
                                                                    class="fi flaticon-heart"
                                                                    aria-hidden="true"></i></a>
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
                                                            <a href="{{ route('cart') }}" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Add To Cart"><i
                                                                    class="fi flaticon-add-to-cart"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                            <button data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Quick View"><i
                                                                    class="fi flaticon-eye"></i></button>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.php" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Wish List"><i
                                                                    class="fi flaticon-heart"
                                                                    aria-hidden="true"></i></a>
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
                                                            <a href="{{ route('cart') }}" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Add To Cart"><i
                                                                    class="fi flaticon-add-to-cart"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                            <button data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Quick View"><i
                                                                    class="fi flaticon-eye"></i></button>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.php" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Wish List"><i
                                                                    class="fi flaticon-heart"
                                                                    aria-hidden="true"></i></a>
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
                                                            <a href="{{ route('cart') }}" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Add To Cart"><i
                                                                    class="fi flaticon-add-to-cart"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                            <button data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Quick View"><i
                                                                    class="fi flaticon-eye"></i></button>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.php" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Wish List"><i
                                                                    class="fi flaticon-heart"
                                                                    aria-hidden="true"></i></a>
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
                                                            <a href="{{ route('cart') }}" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Add To Cart"><i
                                                                    class="fi flaticon-add-to-cart"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                            <button data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Quick View"><i
                                                                    class="fi flaticon-eye"></i></button>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.php" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Wish List"><i
                                                                    class="fi flaticon-heart"
                                                                    aria-hidden="true"></i></a>
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
                                                            <a href="{{ route('cart') }}" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Add To Cart"><i
                                                                    class="fi flaticon-add-to-cart"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                            <button data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Quick View"><i
                                                                    class="fi flaticon-eye"></i></button>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.php" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Wish List"><i
                                                                    class="fi flaticon-heart"
                                                                    aria-hidden="true"></i></a>
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
                                                            <a href="{{ route('cart') }}" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Add To Cart"><i
                                                                    class="fi flaticon-add-to-cart"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                            <button data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Quick View"><i
                                                                    class="fi flaticon-eye"></i></button>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.php" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Wish List"><i
                                                                    class="fi flaticon-heart"
                                                                    aria-hidden="true"></i></a>
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
                                                            <a href="{{ route('cart') }}" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Add To Cart"><i
                                                                    class="fi flaticon-add-to-cart"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                            <button data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Quick View"><i
                                                                    class="fi flaticon-eye"></i></button>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.php" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Wish List"><i
                                                                    class="fi flaticon-heart"
                                                                    aria-hidden="true"></i></a>
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
                                                            <a href="{{ route('cart') }}" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Add To Cart"><i
                                                                    class="fi flaticon-add-to-cart"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                            <button data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Quick View"><i
                                                                    class="fi flaticon-eye"></i></button>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.php" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Wish List"><i
                                                                    class="fi flaticon-heart"
                                                                    aria-hidden="true"></i></a>
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
                                                            <a href="{{ route('cart') }}" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Add To Cart"><i
                                                                    class="fi flaticon-add-to-cart"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                            <button data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Quick View"><i
                                                                    class="fi flaticon-eye"></i></button>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.php" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Wish List"><i
                                                                    class="fi flaticon-heart"
                                                                    aria-hidden="true"></i></a>
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
                                                            <a href="{{ route('cart') }}" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Add To Cart"><i
                                                                    class="fi flaticon-add-to-cart"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="modal" data-bs-target="#popup-quickview">
                                                            <button data-bs-toggle="tooltip" data-bs-html="true"
                                                                title="Quick View"><i
                                                                    class="fi flaticon-eye"></i></button>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.php" data-bs-toggle="tooltip"
                                                                data-bs-html="true" title="Wish List"><i
                                                                    class="fi flaticon-heart"
                                                                    aria-hidden="true"></i></a>
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
                            </div>
                            <div class="pagination-wrapper s2">
                                <ul class="pg-pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <i class="fi ti-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <i class="fi ti-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="shop-filter-wrap s2">
                            <div class="filter-item">
                                <div class="shop-filter-item">
                                    <div class="shop-filter-search">
                                        <form>
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
                                        <li><a href="#">Fashion<span>(10)</span></a></li>
                                        <li><a href="#">Winter Ware<span>(20)</span></a></li>
                                        <li><a href="#">Bags<span>(30)</span></a></li>
                                        <li><a href="#">Shoes<span>(12)</span></a></li>
                                        <li><a href="#">Men Fashion<span>(10)</span></a></li>
                                        <li><a href="#">Weman Fashion<span>(22)</span></a></li>
                                        <li><a href="#">Watch<span>(15)</span></a></li>
                                        <li><a href="#">Kids<span>(18)</span></a></li>
                                        <li><a href="#">Headphones<span>(16)</span></a></li>
                                        <li><a href="#">Hats<span>(35)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="filter-item">
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
                            </div>
                            <div class="filter-item">
                                <div class="shop-filter-item">
                                    <h2>Color</h2>
                                    <ul>
                                        <li>
                                            <label class="topcoat-radio-button__label">
                                                Green <span>(21)</span>
                                                <input type="radio" name="topcoat2">
                                                <span class="topcoat-radio-button"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="topcoat-radio-button__label">
                                                Blue <span>(24)</span>
                                                <input type="radio" name="topcoat2">
                                                <span class="topcoat-radio-button"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="topcoat-radio-button__label">
                                                Red<span>(13)</span>
                                                <input type="radio" name="topcoat2">
                                                <span class="topcoat-radio-button"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="topcoat-radio-button__label">
                                                Brown<span>(27)</span>
                                                <input type="radio" name="topcoat2">
                                                <span class="topcoat-radio-button"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="topcoat-radio-button__label">
                                                Yellow<span>(12)</span>
                                                <input type="radio" name="topcoat2">
                                                <span class="topcoat-radio-button"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="topcoat-radio-button__label">
                                                White<span>(32)
                                                </span>
                                                <input type="radio" name="topcoat2">
                                                <span class="topcoat-radio-button"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="filter-item">
                                <div class="shop-filter-item">
                                    <h2>Size</h2>
                                    <ul>
                                        <li>
                                            <label class="topcoat-radio-button__label">
                                                Small <span>(10)</span>
                                                <input type="radio" name="topcoat3">
                                                <span class="topcoat-radio-button"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="topcoat-radio-button__label">
                                                Medium<span>(24)</span>
                                                <input type="radio" name="topcoat3">
                                                <span class="topcoat-radio-button"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="topcoat-radio-button__label">
                                                Large<span>(13)</span>
                                                <input type="radio" name="topcoat3">
                                                <span class="topcoat-radio-button"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="topcoat-radio-button__label">
                                                Extra Large<span>(18)</span>
                                                <input type="radio" name="topcoat3">
                                                <span class="topcoat-radio-button"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="filter-item">
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
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product-area-end -->
        <!-- deals-area-start -->
        <section class="deals-area">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-6">
                        <div class="wpo-section-title">
                            <h2>Deals Of The Day</h2>
                        </div>
                    </div>
                </div>
                <div class="row deals-slider">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="offer-wrap">
                            <div class="image">
                                <img src="assets/images/deals/1.png" alt="">
                            </div>
                            <div class="content">
                                <h2>Yellow Hats</h2>
                                <span class="offer-price">$80</span>
                                <del>$150</del>

                                <div class="count-up">
                                    <div id="clock"></div>
                                </div>
                                <a class="theme-btn-s2" href="product-single.php">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="offer-wrap">
                            <div class="image">
                                <img src="assets/images/deals/2.png" alt="">
                            </div>
                            <div class="content">
                                <h2>Finger Rings</h2>
                                <span class="offer-price">$150</span>
                                <del>$200</del>

                                <div class="count-up">
                                    <div id="clock-s3"></div>
                                </div>
                                <a class="theme-btn-s2" href="product-single.php">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="offer-wrap">
                            <div class="image">
                                <img src="assets/images/deals/3.png" alt="">
                            </div>
                            <div class="content">
                                <h2>jewelry bracelet</h2>
                                <span class="offer-price">$140</span>
                                <del>$150</del>

                                <div class="count-up">
                                    <div id="clock-s4"></div>
                                </div>
                                <a class="theme-btn-s2" href="product-single.php">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="all-deals-btn">
                            <a href="deals.php" class="theme-btn">All Deals</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- deals-area-end -->
     @stop