<div id="loading-spinner" class="loading-spinner">
                            <div class="spinner"></div>
                        </div>


<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="contact-intro">
                    <span>A Marketplace Initiative by ECommerce - save more with coupons</span>
                </div>
            </div>
            <div class="col col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="contact-info">
                    <ul>
                        <li><a href="tel:869968236"><span>Need help? Call Us:</span>+ +869 968 236</a></li>
                        <!--  <li>
                                        <div class="dropdown">
                                            <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                English
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">English</a></li>
                                                <li><a class="dropdown-item" href="#">Germany</a></li>
                                                <li><a class="dropdown-item" href="#">Turki</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown">
                                            <button class="dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                                USD
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                <li><a class="dropdown-item" href="#">AUD</a></li>
                                                <li><a class="dropdown-item" href="#">EUR</a></li>
                                                <li><a class="dropdown-item" href="#">CNY</a></li>
                                            </ul>
                                        </div>
                                    </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end topbar -->
<!--  start header-middle -->
<div class="header-middle">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <!-- <h3>ECommerce</h3> -->
                        <img src="{{ asset('assets/user/images/home/logo/maya_logo.png')}}" alt="">

                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <form action="{{ route('product') }}" method="GET" class="middle-box">

                    <div class="search-box">
                        <div class="input-group">
                            <input type="search" name="product_name" class="form-control" placeholder="What are you looking for?">
                            <button class="search-btn" type="submit"> <i class="fi flaticon-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <!--   <div class="middle-right">
                    <ul>
                        <li><a href="{{ route('compare') }}"><i class="fi flaticon-right-and-left"></i><span>Compare</span></a>
                        </li>
                    </ul>
                </div> -->
            </div>
            <div class="col-lg-4 col-12">
                <div class="middle-right">
                    <ul class="prolife_img">
                        <!--  <li><a href="{{ route('compare') }}"><i class="fi flaticon-right-and-left"></i><span>Compare</span></a>
                        </li>
 -->
<!--                         <li><a href="{{ route('login') }}"><i class="fi flaticon-user-profile"></i><span>Login</span></a></li>
 -->                        <li>
                            <div class="header-wishlist-form-wrapper">
                                <button class="wishlist-toggle-btn"> <a href="{{ route('wishlist') }}"><i class="fi flaticon-heart"></i></a>
                                    <span class="cart-count" id="wishlistcount" >0</span></button>
                                <!-- <div class="mini-wislist-content">
                                    <button class="mini-cart-close"><i class="ti-close"></i></button>
                                    
                                    <div class="mini-cart-items">
                                        <div class="mini-cart-item clearfix">
                                            <div class="mini-cart-item-image">
                                                <a href="product.php"><img src="{{ asset('assets/user/images/cart/img-1.jpg')}}" alt></a>
                                            </div>
                                            <div class="mini-cart-item-des">
                                                <a href="product.php">Stylish Pink Coat</a>
                                                <span class="mini-cart-item-price">$150 x 1</span>
                                                <span class="mini-cart-item-quantity"><a href="#"><i class="ti-close"></i></a></span>
                                            </div>
                                        </div>
                                        <div class="mini-cart-item clearfix">
                                            <div class="mini-cart-item-image">
                                                <a href="product.php"><img src="{{ asset('assets/user/images/cart/img-2.jpg')}}" alt></a>
                                            </div>
                                            <div class="mini-cart-item-des">
                                                <a href="product.php">Blue Bag</a>
                                                <span class="mini-cart-item-price">$120 x 2</span>
                                                <span class="mini-cart-item-quantity"><a href="#"><i class="ti-close"></i></a></span>
                                            </div>
                                        </div>
                                        <div class="mini-cart-item clearfix">
                                            <div class="mini-cart-item-image">
                                                <a href="product.php"><img src="{{ asset('assets/user/images/cart/img-3.jpg')}}" alt></a>
                                            </div>
                                            <div class="mini-cart-item-des">
                                                <a href="product.php">Kids Blue Shoes</a>
                                                <span class="mini-cart-item-price">$120 x 1</span>
                                                <span class="mini-cart-item-quantity"><a href="#"><i class="ti-close"></i></a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mini-cart-action clearfix">
                                        <span class="mini-checkout-price">Subtotal:
                                            <span>$410</span></span>
                                        <div class="mini-btn">
                                            <a href="checkout.php" class="view-cart-btn s1">Checkout</a>
                                            <a href="wishlist.php" class="view-cart-btn">View Wishlist</a>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </li>
                        <li>
                            <div class="mini-cart">
                                <button class="cart-toggle-btn"> <a href="{{ route('cart') }}"><i class="fi flaticon-add-to-cart"></i></a>
                                    <span class="cart-count" id="cartcount">0</span></button>
                                <!-- <div class="mini-cart-content">
                                    <button class="mini-cart-close"><i class="ti-close"></i></button>
                                    <div class="mini-cart-items">
                                        <div class="mini-cart-item clearfix">
                                            <div class="mini-cart-item-image">
                                                <a href="product.php"><img src="{{ asset('assets/user/images/cart/img-1.jpg')}}" alt></a>
                                            </div>
                                            <div class="mini-cart-item-des">
                                                <a href="product.php">Stylish Pink Coat</a>
                                                <span class="mini-cart-item-price">$150 x 1</span>
                                                <span class="mini-cart-item-quantity"><a href="#"><i class="ti-close"></i></a></span>
                                            </div>
                                        </div>
                                        <div class="mini-cart-item clearfix">
                                            <div class="mini-cart-item-image">
                                                <a href="product.php"><img src="{{ asset('assets/user/images/cart/img-2.jpg')}}" alt></a>
                                            </div>
                                            <div class="mini-cart-item-des">
                                                <a href="product.php">Blue Bag</a>
                                                <span class="mini-cart-item-price">$120 x 2</span>
                                                <span class="mini-cart-item-quantity"><a href="#"><i class="ti-close"></i></a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mini-cart-action clearfix">
                                        <span class="mini-checkout-price">Subtotal:
                                            <span>$390</span></span>
                                        <div class="mini-btn">
                                            <a href="checkout.php" class="view-cart-btn s1">Checkout</a>
                                            <a href="cart.php" class="view-cart-btn">View Cart</a>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </li>
                        <li> <a href="{{ route('recent_view') }}" class="recent-btn"><i style="font-size: 18px; padding-top: 6px;" class="fi flaticon-refresh"></i>&nbsp; <span>Recently
                                Viewed</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  end header-middle -->
<div class="wpo-site-header">
    <nav class="navigation navbar navbar-expand-lg navbar-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-3 col-sm-3 col-3 d-lg-none dl-block">
                    <div class="mobail-menu">
                        <button type="button" class="navbar-toggler open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar first-angle"></span>
                            <span class="icon-bar middle-angle"></span>
                            <span class="icon-bar last-angle"></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-1 col-md-6 col-sm-5 col-6 d-block d-lg-none">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.php">
                            <img src="{{ asset('assets/user/images/home/logo/maya_logo.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-3">
                    <div class="header-shop-item">
                        <button class="header-shop-toggle-btn"><span>Shop By Category</span> </button>
                        <div class="mini-shop-item">
                            <ul id="metis-menu">
                                @foreach(json_decode($categoryData)->categories->data as $cData)
                                <li>
                                    <a href="{{ route('product') }}?product_name={{$cData->dp_name}}" data-catid="{{$cData->dp_recno}}">{{$cData->dp_name}}</a>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-1 col-1">
                    <div id="navbar" class="collapse navbar-collapse navigation-holder">
                        <button class="menu-close"><i class="ti-close"></i></button>
                        <ul class="nav navbar-nav mb-2 mb-lg-0">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li class="menu-item-has-children">
                                <a class="" href="{{ route('product') }}">Shop</a>
                                <!-- <ul class="sub-menu">
                                    <li><a href="{{ route('product') }}">Shop</a></li>

                                    <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
                                    <li><a href="{{ route('cart') }}">Cart</a></li>
                                    <li><a href="{{ route('checkout') }}">Checkout</a></li>
                                </ul> -->
                            </li>
                            <!--             <li><a href="deals.php">Deals</a></li> -->
                            <!-- <li><a href="profile.php">Profile</a></li> -->
                            <!-- <li class="menu-item-has-children">
                                            <a class="menu-down-arrow" href="#">Vendors</a>
                                            <ul class="sub-menu">
                                                <li><a href="vendors.html">Vendors</a></li>
                                                <li><a href="vendors-single.html">Vendors Single</a></li>
                                            </ul>
                                        </li> -->
                            <!--   <li class="menu-item-has-children">
                                            <a class="menu-down-arrow" href="#">Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="compare.html">Compare</a></li>
                                                <li><a href="order.html">Order</a></li>
                                                <li><a href="contact.html">Contact Us</a></li>
                                                <li><a href="login.php">Login</a></li>
                                                <li><a href="register.html">Register</a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                                <li><a href="404.html">404 Error</a></li>
                                            </ul>
                                        </li> -->

                           <!--  <li><a href="{{ route('blog') }}">Blog</a></li> -->
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>

                    </div><!-- end of nav-collapse -->
                </div>
                <div class="col-lg-2 col-md-1 col-1">
                    <div id="navbar" class="collapse navbar-collapse navigation-holder">
                        <button class="menu-close"><i class="ti-close"></i></button>
                        <ul class="nav navbar-nav mb-2 mb-lg-0">
                           
                            <li class="menu-item-has-children">
                                <a class="menu-down-arrow" href="#">Profile</a>
                                <ul class="sub-menu">
                                    <li><a id="signin"href="{{ route('login') }}">Sign in</a></li>
                                    <li><a id="register" href="{{ route('register') }}">Register</a></li>
                                    <li><a id="account" href="{{ route('profile') }}">My Account</a></li>
                                    <li><a id="signout" onclick="signoutData()" href="javascript:void(0)">Sign out</a></li>
                                </ul>
                            </li>
                          
                        </ul>

                    </div><!-- end of nav-collapse -->
                </div>
            </div>
        </div><!-- end of container -->
    </nav>
</div>