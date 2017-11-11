<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/fav.ico') }}">
    <!-- App title -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--Morris Chart CSS -->


    <link href="{{ asset('plugins/morris/morris.css') }}">

    <!-- App css -->
    <link href="{{ asset('assets_backend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_backend/css/core.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_backend/css/components.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_backend/css/icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_backend/css/pages.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_backend/css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_backend/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/switchery/switchery.min.css') }}" rel="stylesheet">

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="{{ asset('assets_backend/js/modernizr.min.js') }}"></script>

</head>


<body class="fixed-left">

        <!--div id="preloader">
                <div id="status">
                    <div class="spinner">
                        <div class="spinner-wrapper">
                            <div class="rotator">
                                <div class="inner-spin"></div>
                                <div class="inner-spin"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div-->
        <div id="wrapper">
            @include('includes.topbar')
            @include('includes.leftSidebar')
            <div class="content-page">
                <div class="content">
                    @yield('content')
                </div>
                @include('includes.footer')
            </div>
            @include('includes.rightSidebar')
        </div>

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
    <script src="{{ asset('assets_backend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets_backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets_backend/js/detect.js') }}"></script>
    <script src="{{ asset('assets_backend/js/fastclick.js') }}"></script>
    <script src="{{ asset('assets_backend/js/jquery.blockUI.js') }}"></script>
    <script src="{{ asset('assets_backend/js/waves.js') }}"></script>
    <script src="{{ asset('assets_backend/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets_backend/js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('plugins/switchery/switchery.min.js') }}"></script>

        <!-- Counter js  -->
    <script src="{{ asset('plugins/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('plugins/counterup/jquery.counterup.min.js') }}"></script>

        <!--Morris Chart-->
    <script src="{{ asset('plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('plugins/raphael/raphael-min.js') }}"></script>

        <!-- Dashboard init -->
    <script src="{{ asset('assets_backend/pages/jquery.dashboard.js') }}"></script>

        <!-- App js -->
    <script src="{{ asset('assets_backend/js/jquery.core.js') }}"></script>
    <script src="{{ asset('assets_backend/js/jquery.app.js') }}"></script>
</body>
</html>