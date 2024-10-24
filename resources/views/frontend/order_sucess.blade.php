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
                        <li><a href="{{ route('cart') }}">Checkout</a></li>
                        <li>ORDER SUCCESS</li>
                    </ol>
                </div> 
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end page-title -->

<!-- wpo-checkout-area start-->
<div class="wpo-checkout-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="single-page-title">
                    <div class="image order_icon">
                        <img  align="center" src="{{ asset('assets/user/images/secure.png')}}" alt="">
                    </div>
                    <h2 align="center">Thank you for your order!</h2>
                    <p align="center">Payment is successfully processsed and your order is on the way <br>You will receive an order confirmation email with details of your order and a link to track its progress.</p>
                    <div align="center">
                        <p class="text-order text-white badge bg-success mt-3">Transaction ID: GHERT05764</p>
                    </div>

                </div>
            </div>
        </div>
        <form>
            <div class="checkout-wrap">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="cout-order-area">
                            <h3>ORDER SUMMARY</h3>
                            <div class="oreder-item">
                                <div class="title">
                                    <h2>Products <span>Subtotal</span></h2>
                                </div>
                                <div id="checkoutdetails">
                                    Your order is empty
                                </div>
                                

                                <div class="title s2">
                                    <h2>Total<span id="cartTotal">₹0.00</span></h2>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="submit-btn-area text-center">
                                        <button class="theme-btn" onclick="payment()" type="button">Place
                                            Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    <div class="col-lg-6 col-12">
                       
                        <div class="caupon-wrap s3">
                            <div class="biling-item">
                                <!-- <div class="coupon coupon-3">
                                    <h2>Billing Address</h2>
                                </div> -->
                                <div class="billing-adress">
                                <div class="block">
                                <div class="block-content">  
                                    <div class="row g-0">
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="shipping-details mb-4 mb-sm-0">
                                                <h3 class="title mb-3">Shipping Address</h3>
                                                <p>No 40 Gallaxy Enque Street 133/2,
                                                New York, USA, 00004-1988</p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="billing-details">
                                                <h3 class="title mb-3">Billing Address</h3>
                                                <p>No 40 Gallaxy Enque Street 133/2,
                                                New York, USA, 00004-1988</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="caupon-wrap s3">
                            <div class="biling-item">
                                <!-- <div class="coupon coupon-3">
                                    <h2>Billing Address</h2>
                                </div> -->
                                <div class="billing-adress">
                                <div class="block">
                                <div class="block-content">  
                                    <div class="row g-0">
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="shipping-details mb-4 mb-sm-0">
                                                <h3 class="title mb-3">SHIPPING METHOD</h3>
                                                <p>Flat Rate - Fixeds</p>
                                                <p>Delivery Date: N/A</p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="billing-details">
                                                <h3 class="title mb-3">PAYMENT METHOD</h3>
                                                <p>Cash on delivery (or) Phone Pay</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="caupon-wrap s3">
                            <div class="biling-item">
                                <!-- <div class="coupon coupon-3">
                                    <h2>Billing Address</h2>
                                </div> -->
                                <div class="billing-adress">
                                <div class="block">
                                <div class="block-content">  
                                    <div class="row g-0">
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="shipping-details mb-4 mb-sm-0">
                                                <h3 class="title mb-3">ORDER DETAILS</h3>
                                                <p>Order ID: GHERT05764</p>
                                                <p>Order Total: $311.00</p>
                                                <p>Order Date: October 14, 2023</p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="billing-details">
                                                <h3 class="title mb-3">DATE OF DELIVERY</h3>
                                                <p>Your order is on the way</p>
                                                <p>October 18, 2023</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                </div>
                               
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-12">
                                    <div class="submit-btn-area text-center">
                                        <button class="theme-btn"type="button">Continue Shopping</button>
                                    </div>
                                </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
</div>
<!-- wpo-checkout-area end-->


<script>
    function checkout() {
        var checkout = localStorage.getItem('cartlist');

        if (checkout != '' && checkout != undefined && checkout != null && checkout != 'undefined') {
            var currentTimestamp = new Date().getTime();


            let dataArray = JSON.parse(checkout);
            // Extracting the 'id' values and joining them with commas
            let productId = dataArray.map(item => item.id).join(',');


            var csrfToken = "{{ csrf_token() }}";

            var postData = {
                "productId": productId
            }

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

                    var itemTotal = 0;

                    var userdata = localStorage.getItem('user_data');
                    var uData = JSON.parse(userdata);

                    var chkData = [];

                    if (rData.success == true) {
                        $('#checkoutdetails').html('');
                        for (var i = 0; i < rData.data.length; i++) {

                            const desiredObject = dataArray.find(item => item.id == rData.data[i].productdetail[0].recno);

                            var qty = desiredObject.qty;
                            var price = rData.data[i].productdetail[0].salesrate;

                            var subTotal = qty * price;


                            var p = subTotal.toFixed(2).split(".");
                            var sAmount = "₹" + p[0].split("").reverse().reduce(function(acc, num, i, orig) {
                                return num + (num != "-" && i && !(i % 3) ? "," : "") + acc;
                            }, "") + "." + p[1];

                            var rate = p[0].split("").reverse().reduce(function(acc, num, i, orig) {
                                return num + (num != "-" && i && !(i % 3) ? "," : "") + acc;
                            }, "") + "." + p[1];


                            var chkObj = {
                                eo_recno: i + 1,
                                eo_custrecno: uData[0].m_mobno,
                                productrecno: rData.data[i].productdetail[0].recno,
                                qty: qty,
                                rate: rate,
                            };

                            chkData.push(chkObj);

                            itemTotal += subTotal;

                            var imgUrl = "{{ asset('assets/user/images/cart/img-4.jpg')}}";
                            var html = ' <div class="oreder-product"><div class="images"><span> <img src="' + imgUrl + '" alt=""> </span></div><div class="product"> <ul><li class="first-cart">' + rData.data[i].product + '(x' + desiredObject.qty + ')</li> <li><div class="rating-product">' + rData.data[i].productdetail[0].producttype + ' <span>' + rData.data[i].productdetail[0].psize + '</span></div></li> </ul> </div><span>' + sAmount + '</span> </div>';

                            $('#checkoutdetails').append(html);
                        }

                        localStorage.setItem('chkout', JSON.stringify(chkData));
                    }

                    var p = itemTotal.toFixed(2).split(".");
                    var tAmount = "₹" + p[0].split("").reverse().reduce(function(acc, num, i, orig) {
                        return num + (num != "-" && i && !(i % 3) ? "," : "") + acc;
                    }, "") + "." + p[1];

                    $('#cartTotal').html(tAmount);


                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $('#checkoutdetails ').append('Your Ckeckout is empty');
                    console.log(textStatus.toString(), errorThrown.toString());
                }
            });




        }
    }
    setTimeout(function() {
        checkout();
    }, 2000);



    function payment() {
        var cartdata = localStorage.getItem('cartlist');
        if (cartdata != '' && cartdata != undefined && cartdata != null && cartdata != 'undefined') {
            var userdata = localStorage.getItem('user_data');
            if (userdata != '' && userdata != undefined && userdata != null && userdata != 'undefined') {
                var uData = JSON.parse(userdata);

                const currentDate = new Date();

                // Add 3 days (86400000 milliseconds in a day)
                const threeDaysLater = new Date(currentDate.getTime() + (3 * 86400000));

                // Format the dates (assuming YYYY-MM-DD format)
                const formattedCurrentDate = currentDate.toISOString().split('T')[0];
                const formattedThreeDaysLater = threeDaysLater.toISOString().split('T')[0];

                var chkData = localStorage.getItem('chkout');

                let totalRate = 0;
                var cData = JSON.parse(chkData);

                for (let i = 0; i < cData.length; i++) {
                    // Ensure the rate is a number and then add it to the total
                    if (!isNaN(cData[i].rate)) {
                        totalRate += parseFloat(cData[i].rate);
                    }
                }

                var p = totalRate.toFixed(2).split(".");
                var tAmount = p[0].split("").reverse().reduce(function(acc, num, i, orig) {
                    return num + (num != "-" && i && !(i % 3) ? "," : "") + acc;
                }, "") + "." + p[1];


                var payload = {
                    eo_custrecno: uData[0].m_mobno,
                    eo_status: 'PENDING',
                    eo_deliverydt: formattedThreeDaysLater,
                    eo_deliverytime: '11:30 AM - 10:00 PM',
                    eo_paymentmode: 'Cash On Delivery',
                    eo_deladdress: uData[0].m_adr1 + ',' + uData[0].m_adr2 + ',' + uData[0].m_adr3,
                    eo_ordernote: '',
                    eo_value: tAmount,
                    eo_deliverymethod: '',
                    deliverychrg: 0,
                    eo_date: formattedCurrentDate,
                    products: JSON.parse(chkData)
                }

                console.log('payload', payload);

                $.ajax({
                    url: "https://nodeapimaya.uthsoftware.com/api/v1/order",
                    type: 'POST',
                    headers: {
                        "token": localStorage.getItem('dtoken') // Include CSRF token as a header
                    },
                    contentType: 'application/json',
                    data: JSON.stringify(payload),
                    success: function(data) {
                        console.log(data);

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus.toString(), errorThrown.toString());
                    }
                });






            } else {
                alert('User not found. Please login again');
            }






        } else {
            alert('Cart is empty');
        }
    }
</script>


@stop