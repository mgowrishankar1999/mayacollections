<!DOCTYPE html>
<html lang="en">

<head>

    @include('frontend.layout.header_css')
    <!-- product slider -->

</head>



<header id="header">
@include('frontend.layout.header_nav')
    </header>

<body>

    <!-- start page-wrapper -->
    @yield('content')
    <!-- end of page-wrapper -->

    <!-- All JavaScript files
    ================================================== -->
    @include('frontend.layout.footer_script')
</body>


</html>