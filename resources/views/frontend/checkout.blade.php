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
                        <li><a href="cart.html">Cart</a></li>
                        <li>Checkout</li>
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
                    <h2>Your Checkout</h2>
                    <p>There are your products in this list</p>
                </div>
            </div>
        </div>
        <form>
            <div class="checkout-wrap">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <!--  <div class="caupon-wrap s2">
                                    <div class="coupon coupon-2">
                                        <div id="toggle2">
                                            <div class="text"><i class="fi flaticon-user-profile"></i> Returning customer?
                                                <span>Click Here to Login</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="create-account s2">
                                        <span>If you have shopped with us before, please enter your details in
                                            the boxes below.
                                            If you are a new customer, please proceed to the Billing & Shipping
                                            section.</span>
                                        <div class="name-input">
                                            <input type="text" class="form-control" placeholder="Name" required>
                                        </div>
                                        <div class="name-email">
                                            <input type="email" class="form-control" placeholder="Email" required>
                                        </div>
                                        <div class="input-wrap s1">
                                            <button type="submit">Login</button>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <!--   <div class="col-lg-6">
                                <div class="caupon-wrap s1">
                                    <div class="coupon coupon-1">
                                        <div id="toggle1">
                                            <div class="text"><i class="fi flaticon-coupon"></i>Have a Coupon?<span>Click Here
                                                    to Enter</span></div>
                                        </div>
                                    </div>
                                    <div class="create-account s1">
                                        <span>If you have coupon code,please apply it</span>
                                        <div class="input-wrap">
                                            <input type="password">
                                            <button>Apply</button>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="caupon-wrap s3">
                            <div class="biling-item">
                                <div class="coupon coupon-3">
                                    <h2>Billing Address</h2>
                                </div>
                                <div class="billing-adress">
                                    <div class="contact-form form-style">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-12">
                                                <input type="text" placeholder="First Name*" id="fname1" name="fname">
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-12">
                                                <input type="text" placeholder="Last Name*" id="fname2" name="fname">
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-12">
                                                <select name="address" id="Country" class="form-control">
                                                    <option disabled="" selected="">Country*</option>
                                                    <option>United State</option>
                                                    <option>Bangladesh</option>
                                                    <option>India</option>
                                                    <option>Srilanka</option>
                                                    <option>Pakisthan</option>
                                                    <option>Afgansthan</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-12">
                                                <input type="text" placeholder="City / Town*" id="City" name="City">
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-12">
                                                <input type="text" placeholder="Postcode / ZIP*" id="Post2" name="Post">
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-12">
                                                <input type="text" placeholder="Company Name*" id="Company" name="Company">
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-12">
                                                <input type="text" placeholder="Email Address*" id="email4" name="email">
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-12">
                                                <input type="text" placeholder="Phone*" id="email2" name="email">
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-12">
                                                <input type="text" placeholder="Address*" id="Adress" name="Adress">
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-12">
                                                <div class="note-area">
                                                    <textarea name="massage" placeholder="Additional Information"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  <div class="biling-item-2">
                                    <input id="toggle3" type="checkbox">
                                    <label class="fontsize" for="toggle3">Create an Account?</label>
                                    <div class="billing-adress" id="open3">
                                        <div class="contact-form form-style">
                                            <div class="row">
                                                <div class="col-12">
                                                    <input type="password" placeholder="Password*" id="fname4" name="fname">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="biling-item-3">
                                    <input id="toggle4" type="checkbox">
                                    <label class="fontsize" for="toggle4">Ship to a Different Address?</label>
                                    <div class="billing-adress" id="open4">
                                        <div class="contact-form form-style">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12 col-12">
                                                    <input type="text" placeholder="First Name*" id="fname6" name="fname">
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-12">
                                                    <input type="text" placeholder="Last Name*" id="fname7" name="fname">
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-12">
                                                    <select name="address" id="Country2" class="form-control">
                                                        <option disabled="" selected="">Country*</option>
                                                        <option>United State</option>
                                                        <option>Bangladesh</option>
                                                        <option>India</option>
                                                        <option>Srilanka</option>
                                                        <option>Pakisthan</option>
                                                        <option>Afgansthan</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-12">
                                                    <input type="text" placeholder="City / Town*" id="City1" name="City">
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-12">
                                                    <input type="text" placeholder="Postcode / ZIP*" id="Post1" name="Post">
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-12">
                                                    <input type="text" placeholder="Company Name*" id="Company1" name="Company">
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-12">
                                                    <input type="text" placeholder="Email Address*" id="email5" name="email">
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-12">
                                                    <input type="text" placeholder="Phone*" id="phone1" name="email">
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-12">
                                                    <input type="text" placeholder="Address*" id="Adress1" name="Adress">
                                                </div>
                                            </div>pg
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="cout-order-area">
                            <h3>Your Order</h3>
                            <div class="oreder-item">
                                <div class="title">
                                    <h2>Products <span>Subtotal</span></h2>
                                </div>
                                <div id="checkoutdetails">
                                    Your Ckeckout is empty
                                </div>

                                <div class="title s2">
                                    <h2>Total<span id="cartTotal">₹0.00</span></h2>
                                </div>
                           <!--      <div class="payment-select">
                                <h3>Payment Method</h3>
                                                <ul>
                                                 
                                                    <li class="removeToggle">
                                                        <input id="remove" type="radio" name="payment" value="30">
                                                        <label for="remove">Cash on delivery</label>
                                                    </li>
                                                    <li class="getwayToggle">
                                                        <input id="getway" type="radio" name="payment" value="30">
                                                        <label for="getway">Online Getway</label>
                                                    </li>
                                                </ul>
                                            </div> -->
                                <div class="col-lg-12 col-md-12 col-12">
                                    <div class="submit-btn-area text-center">
                                        <button class="theme-btn" onclick="placeOrder()" type="button">Place
                                            Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                      <!--  <div class="caupon-wrap s5">
                            <div class="payment-area">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="payment-option" id="open5">
                                            <h3>Payment</h3>
                                            <div class="payment-select">
                                                <ul>
                                                    <li class="addToggle">
                                                        <input id="add" type="radio" name="payment" checked="checked" value="30">
                                                        <label for="add">Direct Bank Transfer</label>
                                                    </li> 
                                                    <li class="removeToggle">
                                                        <input id="remove" type="radio" name="payment" value="30">
                                                        <label for="remove">Cash on delivery</label>
                                                    </li>
                                                    <li class="getwayToggle">
                                                        <input id="getway" type="radio" name="payment" value="30">
                                                        <label for="getway">Online Getway</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div id="open6" class="payment-name active">
                                                <ul>
                                                    <li class="visa"><input id="1" type="radio" name="size" value="30">
                                                        <label for="1"><img src="{{ asset('assets/user/images/checkout/img-1.png')}}" alt=""></label>
                                                    </li>
                                                    <li class="mas"><input id="2" type="radio" name="size" value="30">
                                                        <label for="2"><img src="{{ asset('assets/user/images/checkout/img-2.png')}}" alt=""></label>
                                                    </li>
                                                    <li class="ski"><input id="3" type="radio" name="size" value="30">
                                                        <label for="3"><img src="{{ asset('assets/user/images/checkout/img-3.png')}}" alt=""></label>
                                                    </li>
                                                    <li class="pay"><input id="4" type="radio" name="size" value="30">
                                                        <label for="4"><img src="{{ asset('assets/user/images/checkout/img-4.png')}}" alt=""></label>
                                                    </li>
                                                </ul>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  -->
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- wpo-checkout-area end-->


<script>
    function checkout() {
        localStorage.removeItem('redirect');
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
                            var sAmount = "₹" + p[0].split("").reverse().reduce(function(acc, num, k, orig) {
                                return num + (num != "-" && k && !(k % 3) ? "," : "") + acc;
                            }, "") + "." + p[1];

                            var rate = p[0].split("").reverse().reduce(function(acc, num, l, orig) {
                                return num + (num != "-" && l && !(l % 3) ? "," : "") + acc;
                            }, "") + "." + p[1];


                            var chkObj = {
                                productrecno: rData.data[i].productdetail[0].recno,
                                qty: qty,
                                rate: rate.replace(",", ""),
                            };

                            var imgUrl = "{{ asset('assets/user/images/cart/img-4.jpg')}}";
                            if(rData.data[i].productdetail[0].image_path != '' && rData.data[i].productdetail[0].image_path != null) {
                                        imgUrl = rData.data[i].productdetail[0].image_path;
                                    }




                            chkData.push(chkObj);

                            itemTotal += subTotal;

                            
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
                    loadingSpinner.style.display = 'none';


                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $('#checkoutdetails ').append('Your Ckeckout is empty');
                    console.log(textStatus.toString(), errorThrown.toString());
                    loadingSpinner.style.display = 'none';
                }
            });




        }
    }
    setTimeout(function() {
        checkout();
    }, 500);



    function placeOrder() {
        var cartdata = localStorage.getItem('cartlist');
        if (cartdata != '' && cartdata != undefined && cartdata != null && cartdata != 'undefined') {
            var userdata = localStorage.getItem('user_data');
            console.log(userdata);
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

                var addr1 = (uData[0].m_adr1 != null ? uData[0].m_adr1+ ',' : '');
                var addr2 = (uData[0].m_adr2 != null ? uData[0].m_adr2+ ',' : '');
                var addr3 = (uData[0].m_adr3 != null ? uData[0].m_adr3 : '');

                var fullAddress = addr1 + '' + addr2 + '' + addr3;

                if(fullAddress == '' || fullAddress == undefined) {
                    fullAddress = 'Chennai';
                }

                var payload = {
                    eo_custrecno: uData[0].m_mobno,
                    eo_status: 'PENDING',
                    eo_deliverydt: formattedThreeDaysLater,
                    eo_deliverytime: '11:30 AM - 10:00 PM',
                    eo_paymentmode: 'Net Banking',
                    eo_deladdress: fullAddress,
                    eo_ordernote: 'Testing',
                    eo_value: "0.00",
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
                        'token': localStorage.getItem('dtoken'),
                        'Content-Type': 'application/json'   
                    }, 
                    data: JSON.stringify(payload),
                    success: function(data) {
                        console.log(data);

                        
                        if(data.success == true) {
                            var link = document.createElement("a");
						link.href = data.data.instrumentResponse.redirectInfo.url;
						link.target = "_blank"; 
 
						link.addEventListener("click", function () {
							link.parentNode.removeChild(link);
						});
 
						document.body.appendChild(link);
						
						link.click();

                        localStorage.removeItem('cartlist');
                        } else {
                            alert(data.error);
                        }

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