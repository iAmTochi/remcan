@extends('layouts.auth')

@section('content')

    <form>
        @csrf
        <a href="{{ route('home') }}"><img src="{{asset('images/logo.png')}}" width="80" class="mb-4 d-block mx-auto" alt=""></a>
        <h5 class="mb-3">Reset your password</h5>

        <p class="text-muted">Please enter your email address. You will receive a link to create a new password via email.</p>

        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>

        <button class="btn btn-primary w-100" type="submit">Send</button>

        <div class="col-12 text-center mt-3">
            <span><span class="text-muted me-2">Remember your password ? </span> <a href="{{ route('login') }}" class="text-dark fw-medium">Sign in</a></span>
        </div><!--end col-->
    </form>

@endsection
