 <!-- start of wpo-site-footer-section -->
 <footer class="wpo-site-footer">
     <div class="wpo-upper-footer">
         <div class="container">
             <div class="row">
                 <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                     <div class="widget about-widget">
                         <div class="logo widget-title">
                             <img src="{{ asset('assets/user/images/home/logo/maya_logo.png')}}" alt="">
                         </div>
                         <p>Elit commodo nec urna erat morbi at hac turpis aliquam.
                             In tristique elit nibh turpis. Lacus volutpat ipsum convallis tellus pellentesque
                             etiam.</p>
                         <ul>
                             <li>
                                 <a href="#">
                                     <i class="ti-facebook"></i>
                                 </a>
                             </li>
                             <li>
                                 <a href="#">
                                     <i class="ti-twitter-alt"></i>
                                 </a>
                             </li>
                             <li>
                                 <a href="#">
                                     <i class="ti-linkedin"></i>
                                 </a>
                             </li>
                             <li>
                                 <a href="#">
                                     <i class="ti-instagram"></i>
                                 </a>
                             </li>
                         </ul>

                     </div>
                 </div>
                 <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                     <div class="widget link-widget">
                         <div class="widget-title">
                             <h3>Contact Us</h3>
                         </div>
                         <div class="contact-ft">
                             <ul>
                                 <li><i class="fi flaticon-mail"></i>eCommerce@gmail.com</li>
                                 <li><i class="fi flaticon-phone"></i>(208) 555-0112 <br>(704) 555-0127</li>
                                 <li><i class="fi flaticon-pin"></i>4517 Washington Ave. Manchter,
                                     Kentucky 495</li>
                             </ul>
                         </div>
                     </div>
                 </div>
                 <div class="col col-xl-3 col-lg-2 col-md-6 col-sm-12 col-12">
                     <div class="widget link-widget">
                         <div class="widget-title">
                             <h3>Popular</h3>
                         </div>
                         <ul>
                             <li><a href="{{ route('product') }}">Men</a></li>
                             <li><a href="{{ route('product') }}">Women</a></li>
                             <li><a href="{{ route('product') }}">Kids</a></li>
                             <li><a href="{{ route('product') }}">Shoe</a></li>
                             <li><a href="{{ route('product') }}">Jewelry</a></li>
                         </ul>
                     </div>
                 </div>
                 <div class="col col-xl-3 col-lg-2 col-md-6 col-sm-12 col-12">
                     <div class="widget link-widget">
                         <div class="widget-title">
                             <h3>CONSUMER POLICY</h3>
                         </div>
                         <ul>
                             <li><a href="{{ route('terms_condation') }}">Terms & Condation</a></li>
                             <li><a href="{{ route('sd_policy') }}">Shipping and Delivery Policy</a></li>
                             <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                             <li><a href="{{ route('returns') }}">Returns and Refunds Policy</a></li>
                             <li><a href="{{ route('responsible_disclosure_policy') }}">Responsible Disclosure Policy</a></li>
                         </ul>
                     </div>
                 </div>
                
             </div>
         </div> <!-- end container -->
     </div>
     <div class="wpo-lower-footer">
         <div class="container">
             <div class="row">
                 <div class="col col-xs-12">
                     <p class="copyright"> Copyright &copy; 2023 by <a href="index.php">Maya Collections</a>.
                         All
                         Rights Reserved.</p>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!-- end of wpo-site-footer-section -->

 <!-- popup-quickview  -->
 <div id="popup-quickview" class="modal fade" tabindex="-1">
     <div class="modal-dialog quickview-dialog">
         <div class="modal-content">
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="ti-close"></i></button>
             <div class="modal-body d-flex">
                 <div class="product-details">
                     <div class="row align-items-center">
                         <div class="col-lg-5">
                             <div class="product-single-img">
                                 <div class="modal-product">
                                     <div class="item">
                                         <img src="{{ asset('assets/user/images/modal.jpg')}}" alt="">
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-7">
                             <div class="product-single-content">
                                 <h5>Wireless Headphones</h5>
                                 <h6>120.00 USD</h6>
                                 <ul class="rating">
                                     <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                     <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                     <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                     <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                     <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                 </ul>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis ultrices
                                     lectus lobortis, dolor et tempus porta, leo mi efficitur ante, in varius
                                     felis
                                     sem ut mauris. Proin volutpat lorem inorci sed vestibulum tempus. Lorem
                                     ipsum
                                     dolor sit amet, consectetur adipiscing elit. Aliquam
                                     hendrerit.
                                 </p>
                                 <div class="pro-single-btn">
                                     <div class="quantity cart-plus-minus">
                                         <input type="text" value="1">
                                         <div class="dec qtybutton">-</div>
                                         <div class="inc qtybutton"></div>
                                     </div>
                                     <a href="#" class="theme-btn">Add to cart</a>
                                 </div>
                                 <div class="social-share">
                                     <span>Share with : </span>
                                     <ul class="socialLinks">
                                         <li><a href='#'><i class="fa fa-facebook"></i></a></li>
                                         <li><a href='#'><i class="fa fa-linkedin"></i></a></li>
                                         <li><a href='#'><i class="fa fa-twitter"></i></a></li>
                                         <li><a href='#'><i class="fa fa-instagram"></i></a></li>
                                         <li><a href='#'><i class="fa fa-youtube-play"></i></a></li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- popup-quickview -->
 </div>

 <div id="popup-category" class="modal fade" tabindex="-1">
     <div class="modal-dialog quickview-dialog">
         <div class="modal-content">
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="ti-close"></i></button>
             <div class="modal-body">
                 <div class="product-details">
                     <div class="shop-section">
                         <div class="container">
                             <div class="row align-items-center">

                                 <div class="col-lg-12">
                                     <div class="shop-filter-wrap1">
                                         <div class="filter-item">
                                             <div class="shop-filter-item">
                                                 <div class="shop-filter-search">

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




                                         <div class="shop-btn">
                                             <a class="theme-btn-s2" href="{{ route('product') }}">Filter</a>
                                         </div>



                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- popup-quickview -->
 </div>


 <div id="popup-size" class="modal fade" tabindex="-1">
     <div class="modal-dialog quickview-dialog">
         <div class="modal-content">
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="ti-close"></i></button>
             <div class="modal-body ">
                 <div class="product-details">
                     <div class="shop-section">
                         <div class="container">
                             <div class="row align-items-center">

                                 <div class="col-lg-12">
                                     <div class="shop-filter-wrap1">
                                         <div class="filter-item">
                                             <div class="shop-filter-item">
                                                 <div class="shop-filter-search">

                                                 </div>
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

                                         <div class="shop-btn">
                                             <a class="theme-btn-s2" href="{{ route('product') }}">Filter</a>
                                         </div>



                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- popup-quickview -->
 </div>



 <div id="popup-color" class="modal fade" tabindex="-1">
     <div class="modal-dialog quickview-dialog">
         <div class="modal-content">
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="ti-close"></i></button>
             <div class="modal-body">
                 <div class="product-details">
                     <div class="shop-section">
                         <div class="container">
                             <div class="row align-items-center">

                                 <div class="col-lg-12">
                                     <div class="shop-filter-wrap1">
                                         <div class="filter-item">
                                             <div class="shop-filter-item">
                                                 <div class="shop-filter-search">

                                                 </div>
                                             </div>
                                         </div>



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


                                         <div class="shop-btn">
                                             <a class="theme-btn-s2" href="{{ route('product') }}">Filter</a>
                                         </div>




                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

 </div>





 </div>










 <script src="{{ asset('assets/user/js/jquery.min.js')}}"></script>
 <script src="{{ asset('assets/user/js/bootstrap.bundle.min.js')}}"></script>
 <!-- Plugins for this template -->
 <script src="{{ asset('assets/user/js/modernizr.custom.js')}}"></script>
 <script src="{{ asset('assets/user/js/jquery.dlmenu.js')}}"></script>
 <script src="{{ asset('assets/user/js/jquery-plugin-collection.js')}}"></script>
 <!-- Custom script for this template -->
 <script src="{{ asset('assets/user/js/script.js')}}"></script>
 <script src="https://www.gstatic.com/firebasejs/9.6.0/firebase-app.js" type="module"></script>
 <script src="https://www.gstatic.com/firebasejs/9.6.0/firebase-auth.js" type="module"></script>
 <script src="https://www.gstatic.com/firebasejs/9.6.0/firebase-analytics.js" type="module"></script>
 <script src="{{ asset('assets/user/js/firebase-registration.js') }}" type="module"></script>




 <script>
     $(document).ready(function() {

         $("#owl-demo,#owl-demo1,#owl-demo2,#owl-demo3,#owl-demo4,#owl-demo5,#owl-demo6,#owl-demo7").owlCarousel({

             navigation: true, // Show next and prev buttons

             slideSpeed: 300,
             paginationSpeed: 400,
             autoplay: true,
             items: 1,
             loop: true,
             autoplayTimeout: 3000,
             itemsDesktop: false,
             itemsDesktopSmall: false,
             itemsTablet: false,
             itemsMobile: false


         });

     });
 </script>






 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
 <script>
     @if(Session::has('message'))
     var type = "{{ Session::get('alert-type', 'info') }}";
     switch (type) {
         case 'info':
             toastr.info("{{ Session::get('message') }}");
             break;

         case 'warning':
             toastr.warning("{{ Session::get('message') }}");
             break;

         case 'success':
             toastr.success("{{ Session::get('message') }}");
             break;

         case 'error':
             toastr.error("{{ Session::get('message') }}");
             break;
     }
     @endif
 </script>
 <script>
     function isLogin() {
         var userdata = localStorage.getItem('user_data');

         if (userdata != '' && userdata != null && userdata != undefined && userdata != 'undefined') {
             $('#account').show();
             $('#signout').show();
             $('#signin').hide();
             $('#register').hide();
         } else {
             $('#signin').show();
             $('#register').show();
             $('#account').hide();
             $('#signout').hide();
         }
     }



     function getcountdata() {

         var wishlist = localStorage.getItem('wishlist');
         if (wishlist != '' && wishlist != undefined && wishlist != null && wishlist != 'undefined') {
             var wArray = wishlist.split(',');
             console.log(wArray.length);
             $('#wishlistcount').html(wArray.length);
         }

         var cartlist = localStorage.getItem('cartlist');
         if (cartlist != '' && cartlist != undefined && cartlist != null && cartlist != 'undefined') {
             var cArray = JSON.parse(cartlist);
             console.log(cArray.length);
             $('#cartcount').html(cArray.length);
         }


     }

     getcountdata();

     isLogin();

     function addCart(e) {

         var userdata = localStorage.getItem('user_data');

         if (userdata != '' && userdata != null && userdata != undefined && userdata != 'undefined') {
             var productId = $(e).attr('data-recno');


             const productItem = e.closest('.product-item');
             var presentPriceText = '1.00';
             if (productItem != null && productItem != undefined && productItem != '') {
                 const presentPriceElement = productItem.querySelector('.present-price');
                 presentPriceText = presentPriceElement.textContent;
             } else {

             }

             console.log(parseFloat(presentPriceText) < 0);
             if (isNaN(parseFloat(presentPriceText))) {
                 alert('Invalid product price');
             } else if (parseFloat(presentPriceText) <= 0) {
                 alert('Invalid product price');
             } else {
                 var cartList = localStorage.getItem('cartlist');

                 if (cartList != null && cartList != '' && cartList != undefined && cartList != 'undefined') {

                     let dataArray = JSON.parse(cartList);
                     let found = false;

                     let newData = {
                         "id": productId,
                         "qty": 1
                     };

                     for (let i = 0; i < dataArray.length; i++) {
                         if (dataArray[i].id === newData.id) {
                             var eQty = parseInt(dataArray[i].qty);
                             dataArray[i].qty = eQty + parseInt(newData.qty);
                             found = true;
                             break;
                         }
                     }

                     if (!found) {
                         dataArray.push(newData);
                     }

                     let updatedJsonString = JSON.stringify(dataArray);


                     localStorage.setItem('cartlist', updatedJsonString);


                 } else {
                     var carObj = [{
                         "id": productId,
                         "qty": 1
                     }];
                     localStorage.setItem('cartlist', JSON.stringify(carObj));
                 }
                 alert(' Sucessfully Added To cart')

             }

         } else {
             window.location.href = "{{route('login')}}";
         }









     }






     function addWishlist(e) {
         var productId = $(e).attr('data-recno');

         var wishlist = localStorage.getItem('wishlist');
         if (wishlist != null && wishlist != '' && wishlist != undefined && wishlist != 'undefined') {

             let textArray = wishlist.split(',');
             /* console.log(textArray); */
             // Check if the exact string is in the array
             let wishResult = textArray.includes(productId);
             //let wishResult = wishlist.indexOf(productId) !== -1;

             if (wishResult == false) {
                 wishlist = wishlist + ',' + productId;
                 localStorage.setItem('wishlist', wishlist);
                 alert(' Sucessfully Added To Wishlist')

             } else {
                 alert(' The Product is already in the wishlist items')
             }


         } else {
             localStorage.setItem('wishlist', productId);
             alert(' Sucessfully Added To Wishlist')
         }


     }


     function qtyChange(e) {
         setTimeout(() => {
             var productId = $(e).attr('data-recno');
             var price = $(e).attr('data-price');
             var quantity = $('#quantity' + productId).val();
             var cartlist = localStorage.getItem('cartlist');

             if (cartlist != '' && cartlist != undefined && cartlist != null && cartlist != 'undefined') {
                 let dataArray = JSON.parse(cartlist);

                 const desiredObject = dataArray.find(item => item.id == productId);
                 console.log('desiredObject', desiredObject);
                 if (desiredObject) {
                     desiredObject.qty = quantity;

                     // Update the JSON string
                     jsonString = JSON.stringify(dataArray);
                     localStorage.setItem('cartlist', jsonString);


                     var sAmount = quantity * parseFloat(price);
                     var p = sAmount.toFixed(2).split(".");
                     var subAmount = "₹" + p[0].split("").reverse().reduce(function(acc, num, i, orig) {
                         return num + (num != "-" && i && !(i % 3) ? "," : "") + acc;
                     }, "") + "." + p[1];
                     $('.sAmount').html(subAmount);



                 }

             }
         }, 500);


     }


     function signoutData() {
         localStorage.removeItem('user_data');
         localStorage.removeItem('dtoken');
         window.location.href = "{{route('home')}}"
     }
 </script>





 @if (session('success'))
 <script>
     toastr.success("{{ session('success') }}")
 </script>
 @endif