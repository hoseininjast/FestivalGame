<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#f7858d">
    <meta name="msapplication-navbutton-color" content="#f7858d">
    <meta name="apple-mobile-web-app-status-bar-style" content="#f7858d">
    <title>didikala | Login Page</title>
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
    <!-- Start main-content -->
    @yield('content')
    <!-- End main-content -->
    <!-- Start mini-footer -->
    <footer class="mini-footer dt-sl">
        <div class="container main-container">
            <div class="row">
                <div class="col-12">
                    <ul class="mini-footer-menu">
                        <li><a href="#">درباره {{env('APP_NAME')}}</a></li>
                        <li><a href="#">فرصت های شغلی</a></li>
                        <li><a href="#">تماس با ما</a></li>
                        <li><a href="#">همکاری با سازمان ها</a></li>
                    </ul>
                </div>

                <div class="col-12 text-center">
                    <div class="copy-right-mini-footer">
                        Copyright © {{\Carbon\Carbon::now()->format('Y')}} {{env('APP_NAME')}}
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End mini-footer -->
</div>
<!-- colorPanel -->
<div id="colorswitch-option">
    <button><i class="mdi mdi-settings"></i></button>
    <ul>
        <li class="active" data-path="Front/assets/css/colors/default.css"><span
                style="background-color: #f7858d;"></span></li>
        <li data-path="Front/assets/css/colors/amber-color.css"><span style="background-color: #ffab00;"></span></li>
        <li data-path="Front/assets/css/colors/blue-color.css"><span style="background-color: #2979ff;"></span></li>
        <li data-path="Front/assets/css/colors/blue-grey-color.css"><span style="background-color: #607d8b;"></span>
        </li>
        <li data-path="Front/assets/css/colors/brown-color.css"><span style="background-color: #795548;"></span></li>
        <li data-path="Front/assets/css/colors/cyan-color.css"><span style="background-color: #00bcd4;"></span></li>
        <li data-path="Front/assets/css/colors/green-color.css"><span style="background-color: #4caf50;"></span></li>
        <li data-path="Front/assets/css/colors/indigo-color.css"><span style="background-color: #3f51b5;"></span></li>
        <li data-path="Front/assets/css/colors/lime-color.css"><span style="background-color: #cddc39;"></span></li>
        <li data-path="Front/assets/css/colors/orange-color.css"><span style="background-color: #ff9800;"></span></li>
        <li data-path="Front/assets/css/colors/red-color.css"><span style="background-color: #f44336;"></span></li>
        <li data-path="Front/assets/css/colors/teal-color.css"><span style="background-color: #009688;"></span></li>
        <li data-path="Front/assets/css/colors/purple-color.css"><span style="background-color: #9c27b0;"></span></li>
    </ul>
</div>
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
