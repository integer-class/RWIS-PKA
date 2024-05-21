<!doctype html>
<html lang="en">

<head>
<title>Mooli | Home</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Mooli Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
<meta name="author" content="GetBootstrap, design by: puffintheme.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/vendor/animate-css/vivify.min.css')}}">

<link rel="stylesheet" href="{{ asset('assets/vendor/chartist/css/chartist.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css')}}">
<link rel="stylesheet" href="{{ asset('assets/vendor/c3/c3.min.css')}}"/>
<link rel="stylesheet" href="{{ asset('assets/vendor/toastr/toastr.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/vendor/jvectormap/jquery-jvectormap-2.0.3.min.css')}}"/>

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/mooli.min.css')}}">

</head>
<body>
    
<div id="body" class="theme-cyan">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="assets/images/icon.svg" width="40" height="40" alt="Mooli"></div>
            <p>Please wait...</p>        
        </div>
    </div>

    <!-- Theme Setting -->
   
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <div id="wrapper">

        <!-- Page top navbar -->
        @include('layouts.pagetop')
        
        <!-- Main left sidebar menu -->

        @include('layouts.sidebar')


       
        <!-- Right bar chat  -->
       
        <!-- Stiky note div  -->
        
        <!-- Main body part  -->
        <div id="main-content">
            @yield('content')

        </div>
        
    </div>
</div>

<!-- Javascript -->
<script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script>    
<script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script>

<!-- Vedor js file and create bundle with grunt  --> 

<script src="assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script><!-- Bootstrap Colorpicker Js --> 
<script src="assets/vendor/jquery-inputmask/jquery.inputmask.bundle.js"></script><!-- Input Mask Plugin Js --> 
<script src="assets/vendor/jquery.maskedinput/jquery.maskedinput.min.js"></script>
<script src="assets/vendor/multi-select/js/jquery.multi-select.js"></script><!-- Multi Select Plugin Js -->
<script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<script src="{{asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script><!-- Bootstrap Tags Input Plugin Js --> 
<script src="assets/vendor/nouislider/nouislider.js"></script><!-- noUISlider Plugin Js -->


<!-- Project core js file minify with grunt --> 
<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="../js/pages/forms/advanced-form-elements.js"></script>
</body>
</html>
