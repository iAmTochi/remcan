<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} - Real Estate Marketers and Consultants Association of Nigeria</title>
    <meta name="description" content="Join REMCAN – the biggest, best, and fastest-growing real estate association in Nigeria. Connect with top realtors, brokers, and consultants. Explore Nigeria’s real estate market trends and insights.">
    <meta name="keywords" content="Biggest real estate association in Nigeria, Best real estate association in Nigeria, Fastest-growing real estate network in Nigeria, REMCAN – Nigeria’s leading real estate association, Real estate market trends in Nigeria, Nigeria’s real estate industry insights, Real estate professionals network in Nigeria, Join Nigeria’s top real estate association, REMCAN – Nigeria’s #1 Real Estate Association, REMCAN for Realtors, Brokers & Consultants in Nigeria">
    <meta name="robots" content="index, follow">
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
