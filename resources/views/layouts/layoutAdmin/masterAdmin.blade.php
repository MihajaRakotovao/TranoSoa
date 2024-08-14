<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title> {{-- GET THE TITLE FROM EACH PAGE --}}
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('img/fond3.jpg')}}" rel="icon">

    <link rel="stylesheet" href="{{asset('adminUse/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminUse/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('adminUse/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminUse/vendors/jvectormap/jquery-jvectormap.css')}}">
    <!-- End plugin css for this page -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('adminUse/css/demo/style.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js')}}">
    <!-- End layout styles -->
    <link rel="stylesheet" href="{{asset('css/fontawesome/css/all.css')}}">


</head>

<body>
    <script src="{{asset('adminUse/js/preloader.js')}}"></script>
    <div class="body-wrapper">

    @include('layouts\layoutAdmin.headerAdmin')
        <div class="container-xxl bg-white p-0">
            @yield('contenue')
            <!-- Back to Top -->
        </div>
        @include('layouts\layoutAdmin.footerAdmin')
    </div>


    <!-- JavaScript Libraries -->
    {{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> --}}
    <script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}   "></script>
<!-- plugins:js -->
<script src="{{asset('adminUse/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="{{asset('adminUse/vendors/chartjs/Chart.min.js')}}"></script>
<script src="{{asset('adminUse/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
<script src="{{asset('adminUse/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{asset('adminUse/js/material.js')}}"></script>
<script src="{{asset('adminUse/js/misc.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset('adminUse/js/dashboard.js')}}"></script>
<!-- End custom js for this page-->
    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>
