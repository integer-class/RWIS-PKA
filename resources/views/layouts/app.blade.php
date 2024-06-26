<!doctype html>
<html lang="en">

<head>
<title>RT/RW Web Connect</title>
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

<link rel="stylesheet" href="{{ asset('assets/vendor/dropify/css/dropify.min.css')}}">
<!-- MAIN CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/mooli.min.css')}}">

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- Vedor js file and create bundle with grunt  --> 

<script src="{{asset('assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script><!-- Bootstrap Colorpicker Js --> 
<script src="{{asset('assets/vendor/jquery-inputmask/jquery.inputmask.bundle.js')}}"></script><!-- Input Mask Plugin Js --> 
<script src="{{asset('assets/vendor/jquery.maskedinput/jquery.maskedinput.min.js')}}"></script>
<script src="{{asset('assets/vendor/multi-select/js/jquery.multi-select.js')}}"></script><!-- Multi Select Plugin Js -->
<script src="{{asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script><!-- Bootstrap Tags Input Plugin Js --> 
<script src="{{asset('assets/vendor/nouislider/nouislider.js')}}"></script><!-- noUISlider Plugin Js -->

<!-- Vedor js file and create bundle with grunt  --> 
<script src="{{asset('assets/bundles/flotscripts.bundle.js')}}"></script><!-- flot charts Plugin Js -->
<script src="{{asset('assets/bundles/c3.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/apexcharts.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/jvectormap.bundle.js')}}"></script>
<script src="{{asset('assets/vendor/toastr/toastr.js')}}"></script>

<!-- Project core js file minify with grunt --> 
<script src="{{asset('js/pages/forms/advanced-form-elements.js')}}"></script>

<!-- Javascript -->
<script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script>    
<script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script>

<!-- Vedor js file and create bundle with grunt  --> 
<script src="{{asset('assets/vendor/dropify/js/dropify.js')}}"></script>


<!-- Project core js file minify with grunt --> 
<script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('js/pages/forms/dropify.js')}}"></script>

{{-- Aset data umkm --}}
<!-- Vedor js file and create bundle with grunt  --> 

<script src="{{asset('assets/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-datatable/buttons/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/vendor/sweetalert/sweetalert.min.js')}}"></script><!-- SweetAlert Plugin Js --> 


<!-- Project core js file minify with grunt --> 
<script src="{{asset('js/pages/tables/jquery-datatable.js')}}"></script>

</body>
</html>
