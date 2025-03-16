<form {{ $attributes->merge(['action' => $action, 'method' => $method]) }} >
    @csrf
    <a href="{{ route('home') }}"><img src="{{asset('images/logo.png')}}" width="80" class="mb-4 d-block mx-auto"
                                       alt=""></a>
    <h5 class="mb-3">Please sign in</h5>

    <div class="form-floating mb-2">
        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" value="{{ old('email') }}" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
        <span role="alert" class="invalid-feedback">
            <strong>{{$errors->first('email')}}</strong>
        </span>
    </div>
    <div class="form-floating mb-3">
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
        <span role="alert" class="invalid-feedback">
            <strong>{{$errors->first('password')}}</strong>
        </span>
    </div>

    <div class="d-flex justify-content-between">
        <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label text-muted" for="flexCheckDefault">Remember me</label>
            </div>
        </div>
        <span class="forgot-pass text-muted mb-0"><a href="{{ route('password.request') }}" class="text-muted">Forgot password ?</a></span>
    </div>

    <button class="btn btn-primary w-100" type="submit">Sign in</button>

    <div class="col-12 text-center mt-3">
        <span><span class="text-muted me-2">Don't have an account ?</span> <a href="{{ route('register') }}"
                                                                              class="text-dark fw-medium">Sign Up</a></span>
    </div><!--end col-->
</form>
