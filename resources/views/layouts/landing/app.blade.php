<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Desa Wisata Leuwimalang</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('asset_landing/css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('asset_landing/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('asset_landing/css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{asset('asset_landing/images/fevicon.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('asset_landing/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{asset('asset_landing/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{asset('asset_landing/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        <div class="container">
            @include('layouts.landing.navbar')
        </div>
        <!-- banner section start -->
        @yield('banner')
        <!-- banner section end -->
    </div>
    <!-- header section end -->
    <!-- services section start -->
    <div class="content">
            @yield('content')
    </div>
    
    @include('layouts.landing.footer')

        <script src="{{asset('asset_landing/js/jquery.min.js') }}"></script>
        <script src="{{asset('asset_landing/js/popper.min.js') }}"></script>
        <script src="{{asset('asset_landing/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{asset('asset_landing/js/jquery-3.0.0.min.js') }}"></script>
        <script src="{{asset('asset_landing/js/plugin.js') }}"></script>
        <!-- sidebar -->
        <script src="{{asset('asset_landing/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script src="{{asset('asset_landing/js/custom.js') }}"></script>
        <!-- javascript -->
        <script src="{{asset('asset_landing/js/owl.carousel.js') }}"></script>
        <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js') }}"></script>

    </body>

</html>
