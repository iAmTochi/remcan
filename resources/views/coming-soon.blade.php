<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} - </title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Dynaton Technologies" />
    <meta name="website" content="" />
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
        <!-- Start -->
        <section class="bg-home zoom-image d-flex align-items-center">
            <div class="bg-overlay image-wrap" style="background: url('{{asset('')}}/images/bg/03.jpg') center;"></div>
            <div class="bg-overlay bg-gradient-overlay"></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="d-flex flex-column min-vh-100 justify-content-center px-md-5 py-5 px-4">
                            <div class="text-center">
                                <a href="index.html"><img src="{{asset('')}}/images/logo.png" alt="" width="100"></a>
                            </div>
                            <div class="title-heading text-center my-auto">
                                <h1 class="title-dark text-white mt-2 mb-4 coming-soon">   We are coming soon...</h1>
                                <p class="text-white-50 para-desc para-dark mx-auto">Real Estate Marketers and Consultants Association of Nigeria, ({{ config('app.name') }})</p>

                                <div id="countdown">
                                    <ul class="count-down list-unstyled">
                                        <li id="days" class="count-number list-inline-item m-2"></li>
                                        <li id="hours" class="count-number list-inline-item m-2"></li>
                                        <li id="mins" class="count-number list-inline-item m-2"></li>
                                        <li id="secs" class="count-number list-inline-item m-2"></li>
                                        <li id="end" class="h1"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-center">
                                <p class="mb-0 text-muted">© <script>document.write(new Date().getFullYear())</script> {{ config('app.name') }}. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="#" target="_blank" class="text-reset">Dynaton Technologies</a>.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->

        <!-- javascript -->
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
        <!-- Icons -->
        <script src="{{asset('js/feather.min.js')}}"></script>
	    <!-- Custom -->
	    <script src="{{asset('js/plugins.init.js')}}"></script>
	    <script src="{{asset('js/app.js')}}/"></script>

    </body>

</html>
