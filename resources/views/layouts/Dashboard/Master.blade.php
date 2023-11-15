<!DOCTYPE html>
<html lang="fa">

<!-- Mirrored from demo.imanpa.ir/cork/go/rtl/demo1/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Sep 2023 11:27:47 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>
        {{env('APP_NAME')}}
        @if (request()->segments())
            @if(request()->segment(1))
                | {{request()->segment(1)}}
            @endif
        @endif
    </title>
    <link rel="icon" type="image/x-icon" href="{{asset('images/Logo/Logo.png')}}"/>
    <link href="{{asset('Dashboard/assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
    <script src={{asset('Dashboard/assets/js/loader.js')}}></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{asset('Dashboard/fonts.googleapis.com/css33d1.css?family=Nunito:400,600,700')}}" rel="stylesheet">
    <link href="{{asset('Dashboard/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('Dashboard/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{asset('Dashboard/plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Dashboard/assets/css/dashboard/dash_2.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <script src="https://unpkg.com/feather-icons"></script>
    @yield('head')
</head>
<body>
<!-- BEGIN LOADER -->
<div id="load_screen"> <div class="loader"> <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div></div></div>
<!--  END LOADER -->

<!--  BEGIN HEADER  -->
@include('layouts.Dashboard.Header')
<!--  END HEADER  -->



<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
    @include('layouts.Dashboard.Navbar')
    <!--  END SIDEBAR  -->

    <!--  BEGIN CONTENT PART  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

           @yield('content')

        </div>

        @include('layouts.Dashboard.Footer')
    </div>
    <!--  END CONTENT PART  -->

</div>
<!-- END MAIN CONTAINER -->

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{asset('Dashboard/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('Dashboard/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('Dashboard/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('Dashboard/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('Dashboard/assets/js/app.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.33/dist/sweetalert2.all.min.js"></script>
<script src="{{asset('Assets/Functions.js')}}"></script>

@include('sweetalert::alert' )

<script>
    $(document).ready(function() {
        App.init();
        feather.replace();
        var laravelerrors = '';
        @if($errors->any())
            @foreach($errors->all() as $err)
            laravelerrors += '{{$err}} <br>'
            @endforeach
        ShowAlert('error' , laravelerrors)

        @endif

    });

</script>
<script src="{{asset('Dashboard/assets/js/custom.js')}}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="{{asset('Dashboard/plugins/apex/apexcharts.min.js')}}"></script>
<script src="{{asset('Dashboard/assets/js/dashboard/dash_2.js')}}"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
@yield('js')
</body>

<!-- Mirrored from demo.imanpa.ir/cork/go/rtl/demo1/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Sep 2023 11:27:49 GMT -->
</html>
