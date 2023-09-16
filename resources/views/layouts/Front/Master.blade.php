<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#f7858d">
    <meta name="msapplication-navbutton-color" content="#f7858d">
    <meta name="apple-mobile-web-app-status-bar-style" content="#f7858d">
    <title>didikala | Index Page</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('Front/assets/css/vendor/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('Front/assets/css/vendor/materialdesignicons.min.css')}}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('Front/assets/css/vendor/bootstrap.min.css')}}">
    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset('Front/assets/css/vendor/bootstrap-slider.min.css')}}">
    <link rel="stylesheet" href="{{asset('Front/assets/css/vendor/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('Front/assets/css/vendor/jquery.horizontalmenu.css')}}">
    <link rel="stylesheet" href="{{asset('Front/assets/css/vendor/fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('Front/assets/css/vendor/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('Front/assets/css/vendor/nouislider.min.css')}}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('Front/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('Front/assets/css/colors/default.css')}}" id="colorswitch">
</head>

<body>
<div class="wrapper">
    <!-- Start header -->
    @include('layouts.Front.Header')
    <!-- End header -->
    <!-- Start main-content -->
    @yield('content')
    <!-- End main-content -->
    <!-- Start footer -->
    @include('layouts.Front.Footer')
    <!-- End footer -->
</div>
<!-- colorPanel -->

<!-- end colorPanel -->
<!-- Core JS Files -->
<script src="{{asset('Front/assets/js/vendor/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('Front/assets/js/vendor/popper.min.js')}}"></script>
<script src="{{asset('Front/assets/js/vendor/bootstrap.min.js')}}"></script>
<!-- Plugins -->
<script src="{{asset('Front/assets/js/vendor/bootstrap-slider.min.js')}}"></script>
<script src="{{asset('Front/assets/js/vendor/owl.carousel.min.js')}}"></script>
<script src="{{asset('Front/assets/js/vendor/owl.carousel2.thumbs.min.js')}}"></script>
<script src="{{asset('Front/assets/js/vendor/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('Front/assets/js/vendor/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('Front/assets/js/vendor/nouislider.min.js')}}"></script>
<script src="{{asset('Front/assets/js/vendor/jquery.horizontalmenu.js')}}"></script>
<script src="{{asset('Front/assets/js/vendor/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('Front/assets/js/vendor/countdown.min.js')}}"></script>
<script src="{{asset('Front/assets/js/vendor/wNumb.js')}}"></script>
<script src="{{asset('Front/assets/js/vendor/ResizeSensor.min.js')}}"></script>
<script src="{{asset('Front/assets/js/vendor/theia-sticky-sidebar.min.js')}}"></script>
<!-- Main JS File -->
<script src="{{asset('Front/assets/js/main.js')}}"></script>
</body>

</html>
