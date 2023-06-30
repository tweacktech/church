 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="https://motaadmin.dexignlab.com/xhtml/social-image.png" />
    <meta name="format-detection" content="telephone=no">
    
    <!-- PAGE TITLE HERE -->
    <title>ADMIN</title>

    
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="/image/png" href="/images/favicon.png" />
    
    <!-- Style css -->
    <link href="{{asset('/vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/vendor/chartist/css/chartist.min.css')}}">
    <link href="{{asset('/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    <!-- Add these lines within the <head> tag -->
<link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">




</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
  <!--    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div> --> 
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{route('home')}}" class="brand-logo">
                <img class="logo-abbr" src="{{asset('/images/logo-white.png')}}" alt="">
                <img class="logo-compact" src="{{asset('/images/logo-text.png')}}" alt="">
                <img class="brand-title" src="{{asset('/images/logo-text.png')}}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

     @yield('content')
      @include('sweetalert::alert')
     @include('layouts.header')

    @include('layouts.Sidebar')

     <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="" target="_blank">Silex</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('/vendor/chart.js/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('/js/custom.min.js')}}"></script>
    <script src="{{asset('/js/deznav-init.js')}}"></script>
    <!-- Apex Chart -->
    <script src="{{asset('/vendor/apexchart/apexchart.js')}}"></script>
    
    <!-- Vectormap -->
    <!-- Chart piety plugin files -->
    <script src="{{asset('/vendor/peity/jquery.peity.min.js')}}"></script>
    
    <!-- Chartist -->
    <script src="{{asset('/vendor/chartist/js/chartist.min.js')}}"></script>
    
    <!-- Dashboard 1 -->
    <script src="{{asset('/js/dashboard/dashboard-1.js')}}"></script>
    <!-- Svganimation scripts -->
    <script src="{{asset('/vendor/svganimation/vivus.min.js')}}"></script>
    <script src="{{asset('/vendor/svganimation/svg.animation.js')}}"></script>
    <!-- Add these lines before the closing </body> tag -->
<script src="{{ asset('vendor/sweetalert2/sweetalert2.min.js') }}"></script>
<script>
    @include('sweetalert::alert')
</script>
</body>
</html>