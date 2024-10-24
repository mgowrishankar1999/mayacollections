<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpOceans">
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/user/images/home/logo/favicon_io/android-chrome-192x192.png')}}">
    <title>Register</title>
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

<body>

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
                    <img src="{{ asset('assets/user/images/login.svg')}}" alt="">
                </div>
            </div>
        </div>
        <!-- end preloader -->

        <div class="wpo-login-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="wpo-accountWrapper" action="#">

                            <div class="wpo-accountInfo">
                                <div class="wpo-accountInfoHeader">
                                    <img width="40%" src="{{ asset('assets/user/images/home/logo/maya_logo.png')}}" alt="">
                                    <a class="wpo-accountBtn" href="{{ route('login') }}">
                                        <span class="">Login</span>
                                    </a>
                                </div>

                                <div class="image">
                                    <img src="{{ asset('assets/user/images/login.svg')}}" alt=""> 
                                </div>

                            </div>


                            <div class="wpo-accountForm form-style">
                                <div class="fromTitle">
                                    <h2>Signup</h2>
                                    <p>Sign into your pages account</p>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <label for="name">Full Name</label>
                                        <input type="text" id="name" name="name" placeholder="Your name here..">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <label>Email</label>
                                        <input type="text" id="email" name="email" placeholder="Your email here..">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12 ">
                                        <label for="Phone">Phone</label>
                                        <input type="text" id="phone" name="name" placeholder="Your Phone No here..">
                                        <input type="hidden" id="dtoken" name="dtoken" placeholder="Device Token">


                                    </div>

                                    <div class="col-lg-12 col-md-12 col-12" id="inputOtp" style="display:none">
                                        <label for="Phone">OTP</label>
                                        <input type="text" id="otp" name="otp" placeholder="Enter OTP">

                                    </div>

                                    <div class="col-lg-12 col-md-12 col-12" id="send-otp">
                                        <button type="button" id="sendOtp" class="wpo-accountBtn">Send OTP</button>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-12" id="reg-btn" style="display:none">
                                        <button type="button" id="verifyOtp" class="wpo-accountBtn">Verify OTP</button>
                                    </div>


                                </div>
                                <h4 class="or"><span>OR</span></h4>
                                <!-- <ul class="wpo-socialLoginBtn">
                                    <li><button class="facebook" tabindex="0" type="button"><span><i class="ti-facebook"></i></span></button></li>
                                    <li><button class="twitter" tabindex="0" type="button"><span><i class="ti-twitter"></i></span></button></li>
                                    <li><button class="linkedin" tabindex="0" type="button"><span><i class="ti-linkedin"></i></span></button></li>
                                </ul> -->
                                <p class="subText">Sign into your pages account <a href="{{ route('login') }}">Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- end of page-wrapper -->

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


    <script>
        $('#sendOtp').click(function() {
            var name = $('#name').val();
            var email = $('#email').val();
            var mobileNumber = $('#phone').val();

            if (mobileNumber) {
                var re = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;

                if (re.test(mobileNumber)) {

                    var postData = {
                        phone: mobileNumber,
                        name: name,
                        email: email
                    };
                    $.ajax({
                        type: 'POST',
                        url: 'https://nodeapimaya.uthsoftware.com/api/v1/register ',
                        data: JSON.stringify(postData),
                        contentType: "application/json",
                        dataType: 'json',
                        success: function(data) {
                            if (data.success == true) {
                                $('#inputOtp').show();
                                $('#reg-btn').show();
                                $('#send-otp').hide();
                                $('#name').attr('readonly', true);
                                $('#phone').attr('readonly', true);
                                $('#email').attr('readonly', true);
                                alert(data.message);
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


        //=== Verify OTP ===//
        $('#verifyOtp').click(function() {
            var name = $('#name').val();
            var email = $('#email').val();
            var mobileNumber = $('#phone').val();
            var otp = $('#otp').val();
            var dtoken = $('#dtoken').val();

            if (otp != '') {
                var postData = {
                    phone: mobileNumber,
                    name: name,
                    email: email,
                    otp: otp,
                    dtoken: dtoken
                };
                $.ajax({
                    type: 'POST',
                    url: 'https://nodeapimaya.uthsoftware.com/api/v1/register/verify',
                    data: JSON.stringify(postData),
                    contentType: "application/json",
                    dataType: 'json',
                    success: function(data) {
                        if (data.success == true) {
                            $('#inputOtp').hide();
                            $('#reg-btn').hide();
                            $('#send-otp').show();
                            $('#name').val('');
                            $('#phone').val('');
                            $('#email').val('');
                            $('#otp').val('');
                            $('#name').attr('readonly', false);
                            $('#phone').attr('readonly', false);
                            $('#email').attr('readonly', false);
                            alert(data.message);
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
                alert('Please enter the OTP.');
            }



        });
    </script>

</body>


</html>