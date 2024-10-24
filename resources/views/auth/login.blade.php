<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpOceans">
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/user/images/home/logo/favicon_io/android-chrome-192x192.png')}}">
    <title>Login Page</title>
    <link href="{{ asset('assets/user/css/themify-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/flaticon_ecommerce.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/animate.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/owl.theme.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/slick.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/slick-theme.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/swiper.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/jquery.fancybox.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/odometer-theme-default.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/user/sass/style.css')}}" rel="stylesheet">
</head>

<!--begin::Body-->

<body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center">
    <!--begin::Theme mode setup on page load-->
    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="vertical-centered-box">
                <div class="content">
                    <div class="loader-circle"></div>
                    <div class="loader-line-mask">
                        <div class="loader-line"></div>
                    </div>
                    <img src="{{ asset('assets/user/images/preloader.png')}}" alt="">
                </div>
            </div>
        </div>
        <!-- end preloader -->

        <div class="wpo-login-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="wpo-accountWrapper" method="POST">
                            @csrf
                            <div class="wpo-accountInfo">
                                <div class="wpo-accountInfoHeader">
                                <img width="40%" src="{{ asset('assets/user/images/home/logo/maya_logo.png')}}" alt="">
                                    <a class="wpo-accountBtn" href="{{ route('register') }}">
                                        <span class="">Create Account</span>
                                    </a>
                                </div>
                                <div class="image">
                                    <img src="{{ asset('assets/user/images/login.svg')}}" alt="">
                                </div>

                            </div>
                            <div class="wpo-accountForm form-style">
                                <div class="fromTitle">
                                    <h2>Login</h2>
                                    <p>Sign into your pages account</p>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-12 ">
                                        <label for="Phone">Phone</label>
                                        <input type="text" id="phone" name="phone" placeholder="Your Phone No here..">
                                        <input type="hidden" id="dtoken" name="dtoken" placeholder="Device Token">
                                        <!--                                         <button class="button-74 " role="button"><span class="text">Send OTP</span></button>
 -->
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-12 " id="login_otp" style="display:none;">
                                        <label for="Phone">OTP</label>
                                        <input type="text" id="otp" name="otp" placeholder="Enter OTP">

                                    </div>

                                    <!--     <div class="col-lg-12 col-md-12 col-12">
                                        <div class="check-box-wrap">
                                            <div class="input-box">
                                                <input type="checkbox" id="fruit4" name="fruit-4" value="Strawberry">
                                                <label for="fruit4">Remember Me</label>
                                            </div>
                                            <div class="forget-btn">
                                                <a href="forgot.html">Forgot Password?</a>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="col-lg-12 col-md-12 col-12" id="send-otp">
                                        <button type="button" id="sendOtp" class="wpo-accountBtn">Send OTP</button>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-12" id="login-btn" style="display: none;">
                                        <button type="button" id="verifyOtp" class="wpo-accountBtn">Verify Login</button>
                                    </div>

                                </div>
                                <h4 class="or"><span>OR</span></h4>
                               
                                <p class="subText">Don't have an account? <a href="{{ route('register') }}">Create free
                                        account</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!--end::Root-->

    <!-- All JavaScript files
    ================================================== -->
    <script src="{{ asset('assets/user/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/user/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Plugins for this template -->
    <script src="{{ asset('assets/user/js/modernizr.custom.js')}}"></script>
    <script src="{{ asset('assets/user/js/jquery.dlmenu.js')}}"></script>
    <script src="{{ asset('assets/user/js/jquery-plugin-collection.js')}}"></script>
    <!-- Custom script for this template -->
    <script src="{{ asset('assets/user/js/script.js')}}"></script>

    <script src="https://www.gstatic.com/firebasejs/6.3.4/firebase.js"></script>
    <script src="{{ asset('assets/user/js/firebase-init.js') }}" type="module"></script>
</body>

<script>
    $('#sendOtp').click(function() {
        var mobileNumber = $('#phone').val();

        if (mobileNumber) {
            var re = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;

            if (re.test(mobileNumber)) {

                var postData = {
                    phone: mobileNumber

                };
                $.ajax({
                    type: 'POST',
                    url: 'https://nodeapimaya.uthsoftware.com/api/v1/login',
                    data: JSON.stringify(postData),
                    contentType: "application/json",
                    dataType: 'json',
                    success: function(data) {
                        if (data.message == 'Phone number not registered') {
                            alert(data.message);
                        } else {
                            $('#login-btn').show();
                            $('#login_otp').show();
                            $('#send-otp').hide();
                            $('#phone').attr('readonly', true);
                        }
                    },
                    complete: function() {
                        //alert('complete');
                    },
                    error: function(result) {
                        console.log(result.responseJSON.errors.phone);
                        alert(result.responseJSON.errors.phone);
                    }
                });



            } else {
                alert('Please enter the Valid phone number');
            }

        } else {
            alert('Please enter the phone number');

        }



    });


    $('#verifyOtp').click(function() {
        var mobileNumber = $('#phone').val();
        var otp = $('#otp').val();
        var dtoken = $('#dtoken').val();

        if (mobileNumber) {
            var re = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;

            if (re.test(mobileNumber)) {

                var postData = {
                    phone: mobileNumber,
                    otp: otp,
                    dtoken: dtoken

                };
                $.ajax({
                    type: 'POST',
                    url: 'https://nodeapimaya.uthsoftware.com/api/v1/login/verify',
                    data: JSON.stringify(postData),
                    contentType: "application/json",
                    dataType: 'json',
                    success: function(data) { 
                        $('#login-btn').hide();
                        $('#login_otp').hide();
                        $('#send-otp').show();
                        $('#otp').val('');
                        $('#phone').val('');
                        $('#phone').attr('readonly', false);
                        localStorage.setItem("dtoken", data.token);
                        localStorage.setItem("user_data", JSON.stringify(data.userData));

                        var redirect = localStorage.getItem('redirect');
                        if(redirect != '' && redirect != null && redirect != undefined && redirect != 'undefined') {
                            if(redirect == 'checkout') {
                                window.location.href = "{{route('checkout')}}";
                            } else {
                                isUserExist();
                            }
                        } else {
                            isUserExist();
                        }


                       
                    },
                    complete: function() {
                        //alert('complete');
                    },
                    error: function(result) {
                        console.log(result.responseJSON.errors.otp);
                        alert(result.responseJSON.errors.otp);
                    }
                });



            }
        } else {
            alert('Please enter the OTP.');
        }



    });



    function isUserExist() {
        var dtoken = localStorage.getItem("dtoken");
        if (dtoken != null && dtoken != undefined && dtoken != '') {
            window.location.href = "{{route('home')}}";
        }

    }


    isUserExist();
</script>



</html>