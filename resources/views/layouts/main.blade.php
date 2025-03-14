<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} - Real Estate Marketers and Consultants Association of Nigeria</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Dynaton Technologies" />
    <meta name="website" content="" />
    <meta name="email" content="" />

    <x-head-assets/>
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
    <x-scripts/>
</body>
</html>
