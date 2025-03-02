<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} - Real Estate Marketers and Consultants Association of Nigeria</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Dynaton Technologies" />
    <meta name="website" content="https://shreethemes.in/" />
    <meta name="email" content="" />

    <!-- favicon -->
    <link href="{{asset('images/favicon.ico')}}" rel="shortcut icon">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('')}}/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <!-- Slider -->
    <link href="{{asset('')}}/css/swiper.min.css" rel="stylesheet" />
    <!-- Tobii -->
    <link href="{{asset('')}}/css/tobii.min.css" rel="stylesheet" type="text/css" />
    <!--Material Icon -->
    <link href="{{asset('')}}/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Custom  Css -->
    <link href="{{asset('')}}/css/style.min.css" rel="stylesheet" type="text/css" id="theme-opt" />
</head>

<body>
<!-- Navbar STart -->
<x-header/>
<!-- Navbar End -->


@yield('content')


<!-- Footer Start -->
<x-footer/>
<!-- Footer End -->

<!-- Back to top -->
<a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top rounded-pill fs-5"><i data-feather="arrow-up" class="fea icon-sm align-middle"></i></a>
<!-- Back to top -->

<!-- JAVASCRIPTS -->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- Tiny slider -->
<script src="js/swiper.min.js"></script>
<!-- Tobii -->
<script src="js/tobii.min.js"></script>
<!-- Icons -->
<script src="js/feather.min.js"></script>
<!-- Custom -->
<script src="js/plugins.init.js"></script>
<script src="js/app.js"></script>
</body>
</html>
