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
                        <li><a href="product.html">Product</a></li>
                        <li>Product Single</li>
                    </ol>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end page-title -->

<!-- product-single-section  start-->
<div class="product-single-section section-padding">
    @if(count($productData['data']) > 0)
    <div class="container">
        <div class="product-details">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="product-single-img">
                        <div class="product-active owl-carousel">
                            <div class="item">
                                <img src="assets/images/product-details/1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="assets/images/product-details/2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="assets/images/product-details/3.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="assets/images/product-details/1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="assets/images/product-details/2.jpg" alt="">
                            </div>
                        </div>
                        <div class="product-thumbnil-active  owl-carousel">
                            <div class="item">
                                <img src="assets/images/product-details/1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="assets/images/product-details/2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="assets/images/product-details/3.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="assets/images/product-details/1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="assets/images/product-details/2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="product-single-content">
                        <h2>{{isset($productData['data'][0]['product']) ? ucfirst(strtolower($productData))['data'][0]['product'] : ''}}</h2>
                        <div class="price">
                            <span class="present-price">₹{{$productData['data'][0]['productdetail'][0]['salesrate']}}</span>
                            <del class="old-price">₹{{$productData['data'][0]['productdetail'][0]['mrp']}}</del>
                        </div>
                        <div class="rating-product">
                            {{$productData['data'][0]['productdetail'][0]['producttype']}}
                            <span>{{$productData['data'][0]['productdetail'][0]['psize']}}</span>
                        </div>
                        <p>{{$productData['data'][0]['productdetail'][0]['productdesc']}}
                        </p>
                       <!--  <div class="product-filter-item color">
                            <div class="color-name">
                                <span>Color :</span>
                                <ul>
                                    <li class="color1"><input id="a1" type="radio" name="color" value="30">
                                        <label for="a1"></label>
                                    </li>
                                    <li class="color2"><input id="a2" type="radio" name="color" value="30">
                                        <label for="a2"></label>
                                    </li>
                                    <li class="color3"><input id="a3" type="radio" name="color" value="30">
                                        <label for="a3"></label>
                                    </li>
                                    <li class="color4"><input id="a4" type="radio" name="color" value="30">
                                        <label for="a4"></label>
                                    </li>
                                    <li class="color5"><input id="a5" type="radio" name="color" value="30">
                                        <label for="a5"></label>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                       <!--  <div class="product-filter-item color filter-size">
                            <div class="color-name">
                                <span>Sizes:</span>
                                <ul>
                                    <li class="color"><input id="sz1" type="radio" name="size" value="30">
                                        <label for="sz1">S</label>
                                    </li>
                                    <li class="color"><input id="sz2" type="radio" name="size" value="30">
                                        <label for="sz2">M</label>
                                    </li>
                                    <li class="color"><input id="sz3" type="radio" name="size" value="30">
                                        <label for="sz3">L</label>
                                    </li>
                                    <li class="color"><input id="sz4" type="radio" name="size" value="30">
                                        <label for="sz4">X</label>
                                    </li>
                                    <li class="color"><input id="sz5" type="radio" name="size" value="30">
                                        <label for="sz5">XL</label>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                        <div class="pro-single-btn">
                            <div class="quantity  ">
                                <input class="text-value" id="quantity{{$productData['data'][0]['productdetail'][0]['recno']}}" type="text" value="1">
                                <div data-recno="{{$productData['data'][0]['productdetail'][0]['recno']}}" data-price="{{$productData['data'][0]['productdetail'][0]['salesrate']}}" onclick="qtyChange(this)" class="dec qtybutton">-</div>
                                <div data-recno="{{$productData['data'][0]['productdetail'][0]['recno']}}" data-price="{{$productData['data'][0]['productdetail'][0]['salesrate']}}"  onclick="qtyChange(this)" class="inc qtybutton">+</div>
                            </div>
                            <a href="javascript:void(0);" onclick="addCart(this)" data-recno="{{$productData['data'][0]['productdetail'][0]['recno']}}" class="theme-btn-s2">Add to cart</a>
                            <a href="javascript:void(0);" onclick="addWishlist(this)" data-recno="{{$productData['data'][0]['productdetail'][0]['recno']}}" class="wl-btn"><i class="fi flaticon-heart"></i></a>


                           
                        </div>
                        <ul class="important-text">
                            <li><span>Batch:</span>{{$productData['data'][0]['productdetail'][0]['batch']}}</li>
                            <li><span>Categories:</span>{{$productData['data'][0]['productdetail'][0]['producttype']}}</li>
                            <li><span>Brand Name:</span>{{$productData['data'][0]['productdetail'][0]['brandname']}}</li>
                            <li><span>Stock:</span>{{$productData['data'][0]['productdetail'][0]['stockqty']}} Items </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-tab-area">
            <ul class="nav nav-mb-3 main-tab" id="tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="descripton-tab" data-bs-toggle="pill" data-bs-target="#descripton" type="button" role="tab" aria-controls="descripton" aria-selected="true">Description</button>
                </li>
               <!--  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="Ratings-tab" data-bs-toggle="pill" data-bs-target="#Ratings" type="button" role="tab" aria-controls="Ratings" aria-selected="false">Reviews
                        (3)</button>
                </li> -->
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="Information-tab" data-bs-toggle="pill" data-bs-target="#Information" type="button" role="tab" aria-controls="Information" aria-selected="false">Additional info</button>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="descripton" role="tabpanel" aria-labelledby="descripton-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="Descriptions-item">
                                    <p>Amet consectetur proin diam cras egestas augue habitant integer turpis
                                        egestas egestas. A lectus proin suscipit viverra venenatis eget eget
                                        libero scelerisque. Lacinia parturient id eu vel justo cursus eu. Libero
                                        cursus nisl sollicitudin commodo magnis quam ultrices morbi. Et vitae
                                        eget bibendum quam sed velit. Eget ornare urna nibh ullamcorper sed.
                                        Habitant adipiscing dignissim aliquet laoreet ultrices etiam nulla sed
                                        ut. Lectus ut vitae dignissim in cum id id velit egestas. Magna vel leo
                                        hac massa at.

                                        <br> <br> Urna fermentum id eget turpis eleifend id vitae. Mauris
                                        malesuada ac arcu adipiscing etiam velit at tortor cras. Lacus eget
                                        mollis gravida vulputate sed habitasse enim tempor ullamcorper. Dictum
                                        enim quis morbi tincidunt. Nibh congue massa et arcu viverra lobortis.
                                        Lectus ullamcorper id ut dictumst odio elit. Tristique dapibus diam
                                        velit pharetra quisque odio.
                                    </p>
                                    <div class="Description-table">
                                        <ul>
                                            <li>While thus cackled sheepishly rigid after due one assenting</li>
                                            <li>Et vitae eget bibendum quam sed velit. Eget ornare urna nibh ullamcorper sed.</li>
                                            <li>Habitant adipiscing dignissim aliquet laoreet ultrices etiam nulla sed ut.</li>
                                            <li>Lacinia parturient id eu vel justo cursus eu.</li>
                                            <li>Mauris malesuada ac arcu adipiscing etiam velit at tortor cras.</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="tab-pane fade" id="Information" role="tabpanel" aria-labelledby="Information-tab">
                    <div class="container">
                        <div class="Additional-wrap">
                            <div class="row">
                                <div class="col-12">
                                    <table class="table-responsive">
                                        <tbody>
                                            <tr>
                                                <td>Product Type</td>
                                                <td>{{$productData['data'][0]['productdetail'][0]['producttype']}}</td>
                                            </tr>
                                            <tr>
                                                <td>Brand Name</td>
                                                <td>{{$productData['data'][0]['productdetail'][0]['brandname']}}</td>
                                            </tr>
                                            <tr>
                                                <td>Width</td>
                                                <td>50″</td>
                                            </tr>
                                            <tr>
                                                <td>Seat back height</td>
                                                <td>30.4″</td>
                                            </tr>
                                            <tr>
                                                <td>Color</td>
                                                <td>{{$productData['data'][0]['productdetail'][0]['color']}}</td>
                                            </tr>
                                            <tr>
                                                <td>Size</td>
                                                <td>{{$productData['data'][0]['productdetail'][0]['psize']}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else 
    <div class="container">
        No Product Found.
    </div>
    @endif
    <div class="related-product">
    </div>
</div>
<!-- product-single-section  end-->
@stop