@if(false)
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
@endif


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
    <!-- favicon -->
    <link href="images/favicon.ico" rel="shortcut icon">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <!--Material Icon -->
    <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Custom  Css -->
    <link href="css/style.min.css" rel="stylesheet" type="text/css" id="theme-opt" />

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
                    <form>
                        <a href="{{ route('home') }}"><img src="{{asset('images/logo.png')}}" width="80" class="mb-4 d-block mx-auto" alt=""></a>
                        <h5 class="mb-3">Please sign in</h5>

                        <div class="form-floating mb-2">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label text-muted" for="flexCheckDefault">Remember me</label>
                                </div>
                            </div>
                            <span class="forgot-pass text-muted mb-0"><a href="auth-reset-password.html" class="text-muted">Forgot password ?</a></span>
                        </div>

                        <button class="btn btn-primary w-100" type="submit">Sign in</button>

                        <div class="col-12 text-center mt-3">
                            <span><span class="text-muted me-2">Don't have an account ?</span> <a href="{{ route('home') }}" class="text-dark fw-medium">Sign Up</a></span>
                        </div><!--end col-->
                    </form>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- ENd Hero -->

<!-- javascript -->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- Icons -->
<script src="js/feather.min.js"></script>
<!-- Custom -->
<script src="js/plugins.init.js"></script>
<script src="js/app.js"></script>

</body>

</html>
