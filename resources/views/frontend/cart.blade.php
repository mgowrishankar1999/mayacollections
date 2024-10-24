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
                        <li><a href="product.php">Product Page</a></li>
                        <li>Cart</li>
                    </ol>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end page-title -->

<!-- cart-area-s2 start -->
<div class="cart-area-s2 section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="single-page-title">
                    <h2>Your Cart</h2>

                </div>
            </div>
        </div>
        <div class="cart-wrapper">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <form action="#">
                        <div class="cart-item">
                            <table id="cartTable" class="table-responsive cart-wrap">
                                <thead>
                                    <tr>
                                        <th class="images images-b">Product</th>
                                        <th class="ptice proprice">Price</th>
                                        <th class="stock">Quantity</th>
                                        <th class="ptice total">Subtotal</th>
                                        <th class="remove remove-b">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="cartlist-item">
                                        <td colspan="5"> Your cart is empty </td>
                                    </tr>

                                </tbody>

                            </table>
                        </div>
                        <!--     <div class="cart-action">
                            <div class="apply-area">
                                <input type="text" class="form-control" placeholder="Enter your coupon">
                                <button class="theme-btn-s2" type="submit">Apply</button>
                            </div>
                            <a class="theme-btn-s2" href="#"><i class="fi flaticon-refresh"></i> Update Cart</a>
                        </div> -->
                    </form>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="cart-total-wrap">
                        <h3>CheckOut</h3>
                        <!-- <div class="sub-total">
                            <h4>Subtotal</h4>
                            <span>$300.00</span>
                        </div> -->
                        <!-- Shipping -->
                        <!--    <div class="shipping-option">
                            <span>Shipping</span>
                            <ul>
                                <li class="free">
                                    <input id="Free" type="radio" name="color" value="30" checked>
                                    <label for="Free">Free Shipping</label>
                                </li>
                                <li class="free">
                                    <input id="Local" type="radio" name="color" value="30">
                                    <label for="Local">Local Pickup: <span>$10.00</span></label>
                                </li>
                                <li class="free">
                                    <span>
                                        Shipping options will be updated during checkout.
                                    </span>
                                </li>
                            </ul>
                        </div> -->
                        <!-- Start Calculate Shipping -->
                        <!--  <div class="calculate-shipping">
                            <h4 class="calculate-shipping-label">Calculate Shipping
                                <i class="fi flaticon-down"></i>
                            </h4>
                            <form action="#" class="calculate-shipping-form">
                                
                                <div class="country-list">
                                    <p class="country-list-label">United Kingdom (UK)</p>
                                    <i class="fi flaticon-down"></i>
                                    <div class="countries-wrapper">
                                        <div class="country-search">
                                            <input type="search" class="form-control" placeholder="Search..">
                                            <button type="submit"><i class="fi flaticon-search"></i></button>
                                        </div>
                                        <ul>
                                            <li>United Arab Emirates</li>
                                            <li>United Kingdom (UK)</li>
                                            <li>Ukraine</li>
                                            <li>United States (US)</li>
                                            <li>Uzbekistan</li>
                                            <li>Virgin Islands (British)</li>
                                            <li>United Arab Emirates</li>
                                            <li>United Kingdom (UK)</li>
                                            <li>Ukraine</li>
                                            <li>United States (US)</li>
                                            <li>Uzbekistan</li>
                                            <li>Virgin Islands (British)</li>
                                        </ul>
                                    </div>
                                </div> 

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="State / County">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Town / City">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Postcode / ZIP">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn theme-btn-s2">Update</button>
                                </div>

                            </form>
                        </div> -->
                        <!-- End Calculate Shipping -->
                        <!-- <div class="total">
                            <h4>Total</h4>
                            <span>$300.00</span>
                        </div> -->
                        <a class="theme-btn-s2" href="javascript:void(0);" onclick="proceedChkout(this)" data-href="{{ route('checkout') }}">Proceed To CheckOut</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- cart-area end -->


<script>
    function removeCart(e) {

        if (confirm('Are you sure want to remove this cart')) {
            var productId = $(e).attr('data-recno');
            var cartlist = localStorage.getItem('cartlist');

            if (cartlist != '' && cartlist != undefined && cartlist != null && cartlist != 'undefined') {

                let dataArray = JSON.parse(cartlist);
                let filteredArray = dataArray.filter(item => item.id !== productId);

                let updatedJsonString = JSON.stringify(filteredArray);

                localStorage.setItem('cartlist', updatedJsonString);
                window.location.reload();
            }
        }

    }



    function cartlist() {
        var cartlist = localStorage.getItem('cartlist');

        if (cartlist != '' && cartlist != undefined && cartlist != null && cartlist != 'undefined') {
            var currentTimestamp = new Date().getTime();


            let dataArray = JSON.parse(cartlist);
            // Extracting the 'id' values and joining them with commas
            let productId = dataArray.map(item => item.id).join(',');


            var csrfToken = "{{ csrf_token() }}";

            var postData = {
                "productId": productId
            }
            const loadingSpinner = document.getElementById('loading-spinner');
             loadingSpinner.style.display = 'flex';
            $.ajax({
                url: "/get-cart",
                type: 'POST',
                headers: {
                    "X-CSRF-TOKEN": csrfToken // Include CSRF token as a header
                },
                contentType: 'application/json',
                data: JSON.stringify(postData),
                success: function(data) {
                    console.log(data);

                    var rData = JSON.parse(data);

                    if (rData.success == true) {
                        $('#cartTable tbody').html('');
                        for (var i = 0; i < rData.data.length; i++) {
                            var productDetails = rData.data[i].productdetail;
                            if(productDetails.length > 0) {
                                for(var j = 0; j < productDetails.length; j++) {
                                    var imgUrl = "{{ asset('assets/user/images/cart/img-4.jpg')}}";
                                    const desiredObject = dataArray.find(item => item.id == rData.data[i].productdetail[j].recno);
                                    var stockclass = 'in-stock';
                                    var stockTitle = 'In Stock';
                                    var qty = desiredObject.qty;
                                    var price = rData.data[i].productdetail[j].salesrate;
                                    
                                     var subTotal = qty * price;
                                     var p = subTotal.toFixed(2).split(".");
                                     var sAmount = "₹" + p[0].split("").reverse().reduce(function(acc, num, k, orig) {
                                            return num + (num != "-" && k && !(k % 3) ? "," : "") + acc;
                                        }, "") + "." + p[1];

                                    

                                    if (rData.data[i].productdetail[j].stockqty < 0) {
                                        stockclass = 'in-stock out-stock';
                                        stockTitle = 'Out Stock';
                                    }

                                    if(rData.data[i].productdetail[j].image_path != '' && rData.data[i].productdetail[j].image_path != null) {
                                        imgUrl = rData.data[i].productdetail[j].image_path;
                                    }

                                   
                                    
                                    
                            var html = '<tr class="cartlist-item"><td class="product-item-wish"> <div class="check-box"><input type="checkbox" class="myproject-checkbox"></div><div class="images"><span><img src="' + imgUrl + '" alt=""></span></div><div class="product"><ul><li class="first-cart">' + rData.data[i].product + '</li><li><div class="rating-product">' + rData.data[i].productdetail[j].producttype + '<span>' + rData.data[i].productdetail[j].psize + ' </span></div></li> </ul></div></td><td class="ptice ">' + rData.data[i].productdetail[j].salesrate + '</td><td class="td-quantity"><div class="quantity cart-plus-minus"><input class="text-value" type="text" id="quantity' + rData.data[i].productdetail[j].recno + '" value="' + desiredObject.qty + '"><div class="dec qtybutton" data-price="' + rData.data[i].productdetail[j].salesrate + '" data-recno="' + rData.data[i].productdetail[0].recno + '" onclick="qtyChange(this)">-</div><div class="inc qtybutton"  data-price="' + rData.data[i].productdetail[j].salesrate + '" data-recno="' + rData.data[i].productdetail[j].recno + '" onclick="qtyChange(this)">+</div> </div> </td><td class="ptice sAmount">' + sAmount + '</td><td class="action"><ul> <li class="w-btn"><a data-recno="' + rData.data[i].productdetail[j].recno + '" data-bs-toggle="tooltip" data-bs-html="true" title="" href="javascript:void(0);" data-bs-original-title="Remove from Cart" onclick="removeCart(this)" aria-label="Remove from Cart"><i class="fi ti-trash"></i></a></li></ul> </td></tr>';

                            $('#cartTable tbody').append(html);

                                }
                            } 
                        }
                    }

                    loadingSpinner.style.display = 'none';
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $('#cartTable tbody').append('<tr> <td colspan="5"> No dat found </td> </tr>');
                    console.log(textStatus.toString(), errorThrown.toString());
                    loadingSpinner.style.display = 'none';
                }
            });




        }
    }


    setTimeout(function() {
        cartlist();
    }, 1000); 


    //=== Proceed to Check out ===//
    function proceedChkout(e) {
        var userdata = localStorage.getItem('user_data');

        if(userdata != '' && userdata != null && userdata != undefined  && userdata != 'undefined' ) {
            window.location.href = "{{route('checkout')}}";
        } else {
            localStorage.setItem('redirect', 'checkout');
            window.location.href = "{{route('login')}}";
        }
    }

    
</script>



@stop