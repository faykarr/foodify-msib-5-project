<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Var Title | {{ env('APP_NAME')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

</head>


<body data-sidebar="dark">

    <!-- <body data-layout="horizontal"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">

        {{-- Vertical Header Section --}}
        @include('themes.vertical_header')
        {{-- Vertical Header Section --}}

        {{-- Left Sidebar Section --}}
        @include('themes.left_sidebar')
        {{-- Left Sidebar Section --}}

        {{-- TopBar Horizontal Header Section --}}
        @include('themes.horizontal_header')
        {{-- TopBar Horizontal Header Section --}}

        {{-- MAIN CONTENT START HERE --}}
        @yield('content')
        {{-- MAIN CONTENT END HERE --}}

    </div>
    <!-- END layout-wrapper -->

    {{-- Right Sidebar Section --}}
    @include('themes.right_sidebar')
    {{-- Right Sidebar Section --}}


    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- chat offcanvas -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasActivity" aria-labelledby="offcanvasActivityLabel">
        <div class="offcanvas-header border-bottom">
            <h5 id="offcanvasActivityLabel">Offcanvas right</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            ...
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/metismenujs/metismenujs.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/eva-icons/eva.min.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <script src="{{ asset('backend/assets/js/pages/dashboard.init.js') }}"></script>

    <script src="{{ asset('backend/assets/js/app.js') }}"></script>

</body>

</html>