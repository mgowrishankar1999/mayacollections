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
                        <li>Profile</li>
                    </ol>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end page-title -->


<!-- start wpo-page-title -->


<!-- end page-title -->

<!-- start wpo-contact-pg-section -->
<section class="wpo-contact-pg-section section-padding ">
    <div class="container">
        <div class="row">
            <div class="col col-lg-12 ">


                <div class="wpo-contact-form-area">
                    <section class="wpo-page-title profile" style="min-height: 100px; border-radius: 10px;">
                        <h2 class="d-none">Hide</h2>
                        <div class="container">
                            <div class="row">
                                <div class="col col-xs-12">
                                    <div class="wpo-breadcumb-wrap">
                                        <h3 align="center">PROFILE</h3>
                                    </div>
                                </div>
                            </div>


                            <!-- end row -->
                        </div> <!-- end container -->
                    </section>
                    <section>
                        <div class="wpo-contact-pg-section ">
                            <div class="profile_pic">
                                <img src="{{ asset('assets/user/images/home/2.png')}}" alt="">
                                
                                         
                            </div>
                   
                        </div>
                    </section>
                    <div>
                        <h2 style="padding-bottom: 10px;">Primary Details</h2>
                    </div>


                    <form method="post" class="contact-validation-active" id="contact-form-main">

                        <div>
                            <h5>First Name</h5>
                            <input type="text" class="form-control" name="name" id="fname">
                        </div>
                        <div>
                            <h5>Last Name</h5>
                            <input type="text" class="form-control" name="name" id="lname">
                        </div>
                        <div>
                            <h5>Phone Number</h5>
                            <input type="text" class="form-control" name="phone" id="phone">
                        </div>
                        <div>
                            <h5>Email Id</h5>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                        <div>
                            <h5>Gender</h5>
                            <input type="text" class="form-control" name="Gender" id="gender" >
                        </div>
                        <div>
                            <h5>Occupation</h5>
                            <input type="text" class="form-control" name="adress" id="occupation">
                        </div>
                        <div>
                            <h5>Address</h5>
                            <input type="text" class="form-control" name="adress" id="add">
                        </div>
                        <div>
                            <h5>City</h5>
                            <input type="text" class="form-control" name="adress" id="city">
                        </div>
                        <div>
                            <h5>Pin Code</h5>
                            <input type="text" class="form-control" name="adress" id="pin">
                        </div>
                        <div>
                            <h5>Date of Birth</h5>
                            <input type="text" class="form-control" name="adress" id="dob">
                        </div>
                        <div>
                            <h5>Education</h5>
                            <input type="text" class="form-control" name="adress" id="edu">
                        </div>
                        <!--  <div>
                                            <select name="service" class="form-control">
                                                <option disabled="disabled" selected="">Services</option>
                                                <option>Architecture</option>
                                                <option>The Rehearsal Dinner</option>
                                                <option>The Afterparty</option>
                                                <option>Videographers</option>
                                                <option>Perfect Cake</option>
                                                <option>All Of The Above</option>
                                            </select>
                                        </div> -->

                        <div class="submit-area">
                            <button type="submit" class="theme-btn">Save</button>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end wpo-contact-pg-section -->


<!-- end wpo-contact-map -->

<script>

function profile(){
    
    var userdata = localStorage.getItem('user_data');
    if(userdata != '' && userdata != null && userdata != undefined  && userdata != 'undefined' ) {
            
        var uData = JSON.parse(userdata);
        console.log(uData);

        $('#fname').val(uData[0].m_name);
        $('#phone').val(uData[0].m_mobno);
        $('#email').val(uData[0].m_email);
        $('#occ').val(uData[0].m_occ);
        $('#add').val(uData[0].m_adr1);
        $('#city').val(uData[0].m_adr2);
        $('#pin').val(uData[0].m_adr3);
        $('#dob').val(uData[0].m_spdob);


    }

    
}

setTimeout(function() {
    profile();

    }, 1000);


</script>

@stop