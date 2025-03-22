@extends('layouts.auth')

@section('content')

    <form action="{{ route('password.email') }}" method="post">
        @csrf
        <a href="{{ route('home') }}"><img src="{{asset('images/logo.png')}}" width="80" class="mb-4 d-block mx-auto" alt=""></a>
        <h5 class="mb-3">Reset your password</h5>

        <p class="text-muted">Please enter your email address. You will receive a link to create a new password via email.</p>

        <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"  placeholder="name@remcanline.com">
            <label for="email">Email address</label>
            <span role="alert" class="invalid-feedback">
                <strong>{{$errors->first('email')}}</strong>
            </span>
        </div>

        <button class="btn btn-primary w-100" type="submit">Send</button>

        <div class="col-12 text-center mt-3">
            <span><span class="text-muted me-2">Remember your password ? </span> <a href="{{ route('login') }}" class="text-dark fw-medium">Sign in</a></span>
        </div><!--end col-->
    </form>

@endsection
