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
                                <li><a href="index.html">Home</a></li>
                                <li>Blog</li>
                            </ol>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->

        <!-- start wpo-blog-pg-section -->
        <section class="wpo-blog-pg-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8">
                        <div class="wpo-blog-content">
                            <div class="post format-standard-image">
                                <div class="entry-media">
                                    <img src="{{ asset('assets/user/images/blog/img-4.jpg')}}" alt>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="fi flaticon-user"></i> By <a href="#">Jenny Watson</a> </li>
                                        <li><i class="fi flaticon-comment-white-oval-bubble"></i> Comments 35 </li>
                                        <li><i class="fi flaticon-calendar-1"></i> 24 Jun 2023</li>
                                    </ul>
                                </div>
                                <div class="entry-details">
                                    <h3><a href="blog-single.html">From Now We Are Certified Web.</a>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                        aliquip ex ea commodo consequat.</p>
                                    
                                </div>
                            </div>
                            <div class="post format-standard">
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="fi flaticon-user"></i> By <a href="#">Jenny Watson</a> </li>
                                        <li><i class="fi flaticon-comment-white-oval-bubble"></i> Comments 35 </li>
                                        <li><i class="fi flaticon-calendar-1"></i> 24 Jun 2023</li>
                                    </ul>
                                </div>
                                <div class="entry-details">
                                    <h3><a href="blog-single.html">Top 10 Marketing for Improving Sales.</a>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                        aliquip ex ea commodo consequat.</p>
                                    

                                </div>
                            </div>

                            <div class="post format-gallery">
                                <div class="entry-media">
                                    <div class="post-slider owl-carousel">
                                        <img src="{{ asset('assets/user/images/blog/img-5.jpg')}}" alt>
                                        <img src="{{ asset('assets/user/images/blog/img-4.jpg')}}" alt>
                                    </div>

                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="fi flaticon-user"></i> By <a href="#">Jenny Watson</a> </li>
                                        <li><i class="fi flaticon-comment-white-oval-bubble"></i> Comments 35 </li>
                                        <li><i class="fi flaticon-calendar-1"></i> 24 Jun 2023</li>
                                    </ul>
                                </div>
                                <div class="entry-details">
                                    <h3><a href="blog-single.html">Best Social Media Marketing..</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                        aliquip ex ea commodo consequat.</p>
                                    
                                </div>
                            </div>
                            <div class="post format-video">
                                <div class="entry-media video-holder">
                                    <img src="{{ asset('assets/user/images/blog/img-6.jpg')}}" alt>
                                    <a href="https://www.youtube.com/embed/hHqW0gtiMy4" class="video-btn"
                                        data-type="iframe">
                                        <i class="fi flaticon-play"></i>
                                    </a>

                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="fi flaticon-user"></i> By <a href="#">Jenny Watson</a> </li>
                                        <li><i class="fi flaticon-comment-white-oval-bubble"></i> Comments 35 </li>
                                        <li><i class="fi flaticon-calendar-1"></i> 24 Jun 2023</li>
                                    </ul>
                                </div>
                                <div class="entry-details">
                                    <h3><a href="blog-single.html">How to Improve Your Sales Volume.</a>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                        aliquip ex ea commodo consequat.</p>
                                    
                                </div>
                            </div>
                           <!--  <div class="pagination-wrapper pagination-wrapper-left">
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
                            </div> -->
                        </div>
                    </div>
                    <div class="col col-lg-4">
                        <div class="blog-sidebar">
                            <div class="widget about-widget">
                                <div class="img-holder">
                                    <img src="{{ asset('assets/user/images/blog/about-widget.jpg')}}" alt>
                                </div>
                                <h4>Linda Johns</h4>
                                <p>Hi! beautiful people. I`m an authtor of this blog. Read our post - stay with us</p>
                                <div class="social">
                                    <ul class="clearfix">
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget search-widget">
                                <form>
                                    <div>
                                        <input type="text" class="form-control" placeholder="Search Post..">
                                        <button type="submit"><i class="ti-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="widget category-widget">
                                <h3>Categories</h3>
                                <ul>
                                    <li><a href="product.html">Fashion<span>10</span></a></li>
                                    <li><a href="product.html">Winter Ware<span>20</span></a></li>
                                    <li><a href="product.html">Bags<span>30</span></a></li>
                                    <li><a href="product.html">Shoes<span>12</span></a></li>
                                    <li><a href="product.html">Men Fashion<span>10</span></a></li>
                                    <li><a href="product.html">Weman Fashion<span>22</span></a></li>
                                    <li><a href="product.html">Watch<span>15</span></a></li>
                                    <li><a href="product.html">Watch<span>15</span></a></li>
                                </ul>
                            </div>
                            <div class="widget recent-post-widget">
                                <h3>Related Posts</h3>
                                <div class="posts">
                                    <div class="post">
                                        <div class="img-holder">
                                            <img src="{{ asset('assets/user/images/recent-posts/img-1.jpg')}}" alt>
                                        </div>
                                        <div class="details">
                                            <h4><a href="blog-single.html">
                                                    Answers To Your Questions About.</a>
                                            </h4>
                                            <span class="date">19 Jun 2023 </span>
                                        </div>
                                    </div>
                                    <div class="post">
                                        <div class="img-holder">
                                            <img src="{{ asset('assets/user/images/recent-posts/img-2.jpg')}}" alt>
                                        </div>
                                        <div class="details">
                                            <h4><a href="blog-single.html">
                                                    From Now We Are Certified Web.</a></h4>
                                            <span class="date">22 May 2023 </span>
                                        </div>
                                    </div>
                                    <div class="post">
                                        <div class="img-holder">
                                            <img src="{{ asset('assets/user/images/recent-posts/img-3.jpg')}}" alt>
                                        </div>
                                        <div class="details">
                                            <h4><a href="blog-single.html">
                                                    From Now We Are Certified Web.</a></h4>
                                            <span class="date">12 Apr 2023 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget wpo-instagram-widget">
                                <div class="widget-title">
                                    <h3>Instagram</h3>
                                </div>
                                <ul class="d-flex">
                                    <li><a href="project-single.html"><img src="{{ asset('assets/user/images/instragram/1.jpg')}}"
                                                alt=""></a></li>
                                    <li><a href="project-single.html"><img src="{{ asset('assets/user/images/instragram/2.jpg')}}"
                                                alt=""></a></li>
                                    <li><a href="project-single.html"><img src="{{ asset('assets/user/images/instragram/3.jpg')}}"
                                                alt=""></a></li>
                                    <li><a href="project-single.html"><img src="{{ asset('assets/user/images/instragram/4.jpg')}}"
                                                alt=""></a></li>
                                    <li><a href="project-single.html"><img src="{{ asset('assets/user/images/instragram/5.jpg')}}"
                                                alt=""></a></li>
                                    <li><a href="project-single.html"><img src="{{ asset('assets/user/images/instragram/6.jpg')}}"
                                                alt=""></a></li>
                                </ul>
                            </div>
                            <div class="widget tag-widget">
                                <h3>Tags</h3>
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
            </div> <!-- end container -->
        </section>
        <!-- end wpo-blog-pg-section -->


@stop