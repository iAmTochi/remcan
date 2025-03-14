




{{--@extends('errors::minimal')--}}

{{--@section('title', __('Not Found'))--}}
{{--@section('code', '404')--}}
{{--@section('message', __('Not Found'))--}}

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> 404|Not Found - {{ config('app.name') }}</title>
    <meta name="description" content="Real Estate Bootstrap 5 Landing Template" />
    <meta name="version" content="1.0.0" />
    <x-head-assets/>

</head>

<body>
    <!-- Start -->
    <section class="position-relative bg-soft-primary">
        <div class="container">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="d-flex flex-column min-vh-100 justify-content-center px-md-5 py-5 px-4">
                        <div class="text-center">
                            <a href="{{ route('home') }}"><img src="{{asset('images/logo.png')}}" width="80" alt=""></a>
                        </div>
                        <div class="title-heading text-center my-auto">
                            <img src="{{ asset('') }}images/error.png" class="img-fluid" alt="">
                            <h1 class="mb-3 mt-5 text-dark">Page Not Found?</h1>
                            <p class="text-muted">Whoops, this is embarrassing. <br> Looks like the page you were looking for wasn't found.</p>

                            <div class="mt-4">
                                <a href="{{ route('home') }}" class="btn btn-primary">Back to Home</a>
                            </div>
                        </div>
                        <div class="text-center">
                            <p class="mb-0 text-muted">© <script>document.write(new Date().getFullYear())</script> {{ config('app.name') }}. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="#" target="_blank" class="text-reset">Dynaton Technologies</a>.</p>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>
    <!--end section-->
    <!-- End -->

<!-- javascript -->
    <x-scripts/>

</body>

</html>
