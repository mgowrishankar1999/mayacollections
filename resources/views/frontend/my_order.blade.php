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
                    <h2>My Order</h2>

                </div>
            </div>
        </div>
        <div class="cart-wrapper">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <form action="#">
                        <div class="cart-item">
                            <table id="ordertable" class="table-responsive cart-wrap">
                                <thead>
                                    <tr>
                                        <th class="images images-b">Product</th>
                                        <th class="ptice proprice">Quantity</th>
                                        <th class="ptice total">Total</th>
                                        <th class="ptice proprice">Delivery Date</th>


                                        <th class="remove remove-b">Cancel</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="orderlist_items">
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

            </div>
        </div>

    </div>
</div>
<!-- cart-area end -->


<script>
    function removeOrder(e) {

        if (confirm('Are you sure want to remove the order')) {
            var orderId = $(e).attr('data-recno');
            var orderDate = $(e).attr('data-odate');

            $.ajax({
                url: "https://nodeapimaya.uthsoftware.com/api/v1/cancel-order?orderId=" + orderId + "&date=" + orderDate,
                type: 'GET',
                headers: {
                    'token': localStorage.getItem('dtoken'),
                    'Content-Type': 'application/json'
                },
                success: function(data) {
                    window.location.reload();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus.toString(), errorThrown.toString());
                }
            });


        }

    }



    function orderlist() {


        var payload = {};
        $.ajax({
            url: "https://nodeapimaya.uthsoftware.com/api/v1/order?eo_status=ALL",
            type: 'GET',
            headers: {
                'token': localStorage.getItem('dtoken'),
                'Content-Type': 'application/json'
            },
            success: function(data) {
                console.log(data);


                if (data.success == true) {
                    $('#ordertable tbody').html('');
                    for (var i = 0; i < data.orderList.data.length; i++) {
                        var orderList = data.orderList.data[i].orderDateData;
                        if (orderList.length > 0) {
                            for (var j = 0; j < orderList.length; j++) {
                                var orderData = orderList[j].orderData;

                                for (var k = 0; k < orderData.length; k++) {
                                    console.log('branchid', orderData[k].branchid);


                                    var oData = orderData[k];

                                    var imgUrl = "{{ asset('assets/user/images/cart/img-4.jpg')}}";

                                    var html = '<tr class="orderlist_items"><td class="product-item-wish"> <div class="check-box"><input type="checkbox" class="myproject-checkbox"></div><div class="images"><span><img src="' + imgUrl + '" alt=""></span></div><div class="product"><ul><li class="first-cart">' + oData.productname + '</li><li><div class="rating-product">' + oData.producttype + '</div></li> </ul></div></td><td class="ptice ">' + oData.eod_qty + '</td><td class="ptice sAmount">' + oData.eod_rate + '</td><td class="ptice sAmount">' + oData.eo_deliverydt + '</td><td class="action"><ul> <li class="w-btn"><a data-recno="' + oData.eo_recno + '" data-odate="' + oData.eo_date + '" data-bs-toggle="tooltip" data-bs-html="true" title="" href="javascript:void(0);" data-bs-original-title="Remove from Cart" onclick="removeOrder(this)" aria-label="Remove from Cart"><i class="fi ti-close"></i></a></li></ul> </td></tr>';

                                    $('#ordertable tbody').append(html);


                                }





                            }
                        }
                    }
                }

            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus.toString(), errorThrown.toString());
            }
        });









    }


    setTimeout(function() {
        orderlist();
    }, 1000);


    //=== Proceed to Check out ===//
    function proceedChkout(e) {
        var userdata = localStorage.getItem('user_data');

        if (userdata != '' && userdata != null && userdata != undefined && userdata != 'undefined') {
            window.location.href = "{{route('checkout')}}";
        } else {
            localStorage.setItem('redirect', 'checkout');
            window.location.href = "{{route('login')}}";
        }
    }
</script>



@stop