@if(false)
    <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
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
    <x-head-assets/>

</head>

<body>
<!-- Start Hero -->
<section class="bg-home zoom-image d-flex align-items-center">
    <div class="bg-overlay image-wrap" style="background: url('images/bg/03.jpg') center;"></div>
    <div class="bg-overlay bg-gradient-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="p-4 bg-white rounded-3 shadow-md mx-auto w-100" style="max-width: 400px;">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <a href="{{ route('home') }}"><img src="{{asset('images/logo.png')}}" width="80" class="mb-4 d-block mx-auto" alt=""></a>
                        <h5 class="mb-3">Register your account</h5>

                        <div class="form-floating mb-2">
                            <input type="text" class="form-control @error('surname') is-invalid @enderror" id="surname" name="surname" placeholder="Surname">
                            <label for="surname">Surname</label>
                            <span role="alert" class="invalid-feedback">
                                <strong>{{$errors->first('surname')}}</strong>
                            </span>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" id="first_name" placeholder="First Name">
                            <label for="first_name">First Name</label>
                            <span role="alert" class="invalid-feedback">
                                <strong>{{$errors->first('first_name')}}</strong>
                            </span>
                        </div>

                        <div class="form-floating mb-2">
                            <input type="email"  class="form-control @error('email') is-invalid @enderror" name="email" id="floatingEmail" placeholder="name@example.com">
                            <label for="floatingEmail">Email Address</label>
                            <span role="alert" class="invalid-feedback">
                                <strong>{{$errors->first('email')}}</strong>
                            </span>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
                            <label for="password">Password</label>
                            <span role="alert" class="invalid-feedback">
                                <strong>{{$errors->first('password')}}</strong>
                            </span>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Password">
                            <label for="password_confirmation">Password Confirmation</label>
                            <span role="alert" class="invalid-feedback">
                                <strong>{{$errors->first('password_confirmation')}}</strong>
                            </span>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-muted" for="flexCheckDefault">I Accept <a href="#" class="text-primary">Terms And Condition</a></label>
                        </div>

                        <button class="btn btn-primary w-100" type="submit">Register</button>

                        <div class="col-12 text-center mt-3">
                            <span><span class="text-muted me-2">Already have an account? </span> <a href="{{ route('login') }}" class="text-dark fw-medium">Sign in</a></span>
                        </div><!--end col-->
                    </form>
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
