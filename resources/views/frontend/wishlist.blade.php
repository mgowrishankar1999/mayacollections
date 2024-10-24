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
                        <li><a href="{{ route('product') }}">Product Page</a></li>
                        <li>Wishlist</li>
                    </ol>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end page-title -->

<!-- cart-area start -->
<div class="cart-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="single-page-title">
                    <h2>Your Wishlist</h2>
                    <!-- <p>There are 4 products in this list</p> -->
                </div>
            </div>
        </div>
        <div class="form">
            <div class="cart-wrapper">
                <div class="row">
                    <div class="col-12">
                        <form>
                            <table id="wishlistTable" class="table-responsive cart-wrap">
                                <thead>
                                    <tr>
                                        <th class="images images-b">Product</th>
                                        <th class="ptice">Price</th>
                                        <th class="stock">Stock Status</th>
                                        <th class="remove remove-b">Action</th>
                                        <th class="remove remove-b">Remove</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td colspan="5"> No dat found </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cart-area end -->

<script>
    function wishlist() {
        var wishlist = localStorage.getItem('wishlist');

        if (wishlist != '' && wishlist != undefined && wishlist != null && wishlist != 'undefined') {
            var currentTimestamp = new Date().getTime();

            var csrfToken = "{{ csrf_token() }}";

            var postData = {
                "productId": wishlist
            }
            const loadingSpinner = document.getElementById('loading-spinner');
            loadingSpinner.style.display = 'flex';
            $.ajax({
                url: "/get-wishlist",
                type: 'POST',
                headers: {
                    "X-CSRF-TOKEN": csrfToken // Include CSRF token as a header
                },
                contentType: 'application/json',
                data: JSON.stringify(postData),
                success: function(data) { 

                    var rData = JSON.parse(data);
                    console.log(rData);
                    if (rData.success == true) {
                        $('#wishlistTable tbody').html('');
                        for (var i = 0; i < rData.data.length; i++) {

                            var productDetails = rData.data[i].productdetail;

                            if(productDetails.length > 0) {
                                for(var j = 0; j < productDetails.length; j++) {
                                    var imgUrl = "{{ asset('assets/user/images/cart/img-4.jpg')}}";

                                    var stockclass = 'in-stock';
                                    var stockTitle = 'In Stock';

                                    if (rData.data[i].productdetail[j].stockqty < 0) {
                                        stockclass = 'in-stock out-stock';
                                        stockTitle = 'Out Stock';
                                    }

                                    if(rData.data[i].productdetail[j].image_path != '' && rData.data[i].productdetail[j].image_path != null) {
                                        imgUrl = rData.data[i].productdetail[j].image_path;
                                    }


                                    var html = '<tr class="wishlist-item"> <td class="product-item-wish"> <div class="check-box"><input type="checkbox" class="myproject-checkbox"> </div> <div class="images"> <span> <img src="' + imgUrl + '" alt=""> </span> </div><div class="product"><ul><li class="first-cart">' + rData.data[i].productdetail[j].productname + '</li><li> <div class="rating-product"> ' + rData.data[i].productdetail[j].producttype + ' <span>' + rData.data[i].productdetail[j].psize + '</span> </div> </li></ul></div></td><td class="ptice">₹ ' + rData.data[i].productdetail[j].salesrate + '</td><td class="stock"><span class="' + stockclass + '">' + stockTitle + '</span></td><td class="add-wish"> <a class="theme-btn-s2" href="javascript:void(0);" onclick="addCart(this)"  data-recno="'+ rData.data[i].productdetail[j].recno +'" >Add to Cart</a> </td><td class="action"><ul> <li class="w-btn"><a data-bs-toggle="tooltip" data-bs-html="true" title="" href="#" data-bs-original-title="Remove from Cart" onclick="removeWishlist(this)" data-recno="' + rData.data[i].productdetail[j].recno + '" aria-label="Remove from Cart"><i class="fi flaticon-remove"></i></a></li></ul></td></tr>';

                                    $('#wishlistTable tbody').append(html);

                                }
                            } 
                           

                        }
                    }

                    loadingSpinner.style.display = 'none';

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $('#wishlistTable tbody').append('<tr> <td colspan="5"> No dat found </td> </tr>');
                    console.log(textStatus.toString(), errorThrown.toString());
                    loadingSpinner.style.display = 'none';
                }

            });




        }
    }
    setTimeout(function() {
        wishlist();
    }, 500);


    function removeWishlist(e) {
        if (confirm('Are you sure want to remove this Wishlist')) {
            var productId = $(e).attr('data-recno');
            var wishlistData = localStorage.getItem('wishlist');

            if (wishlistData != '' && wishlistData != undefined && wishlistData != null && wishlistData != 'undefined') {

                let array = wishlistData.split(',');
                let filteredArray = array.filter(item => item !== productId);
                let updatedString = filteredArray.join(',');

                localStorage.setItem('wishlist', updatedString);
                window.location.reload();
                setTimeout(function() {
                    wishlist();
                }, 2000);
            }
        }
    }
</script>

@stop


