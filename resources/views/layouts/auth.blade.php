<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} - Real Estate Marketers and Consultants Association of Nigeria</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="website" content="" />
    <meta name="email" content="" />
    <meta name="version" content="1.0.0" />
    <x-head-assets/>

</head>

<body>
<!-- Start Hero -->
<section class="bg-home zoom-image d-flex align-items-center">
    <div class="bg-overlay image-wrap" style="background: url({{asset('images/bg/03.jpg')}}) center;"></div>
    <div class="bg-overlay bg-gradient-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="p-4 bg-white rounded-3 shadow-md mx-auto w-100" style="max-width: 400px;">
                    @yield('content')
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- ENd Hero -->

<!-- javascript -->
<x-scripts/>

</body>

</html>
