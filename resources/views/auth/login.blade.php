@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="login-container">
        <div class="container login">
            <div class="form-section">
                <div class="row">
                   
                    <div class="col-md-12 form-0">
                        <p class="company-logo">
                            <img style="width: 250px;" src="frontend/images/bingo_logo.jpg" class="img-fluid" alt="">
                        </p>
                        <p class="section-title">
                            <span>Welcome to Anytime Bingo</span>
                        </p>
                        <div class="form-1">
                            <p class="form-label">Email</p>
                            <div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        <div class="form-1">
                            <p class="form-label">Password</p>
                            <div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        <div class="form-1">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                <p class="form-label forgot-password">Forgot password?</p>
                                </a>
                            @endif
                        </div>
                        <div class="form-1 submit-btn">
                            <p class="form-btn">
                                <button type="submit" class="btn btn-primary">
                                    Sign In
                                </button>
                            </p>
                        </div>
                        <div class="form-1 register-btn">
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">
                                <span>New with Anytime Bingo? Create Account</span>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</form>
@section('styles')
<style>
html, body {
    height: 100%;
    margin: 0;
}
.login-container {
    display: flex;
    justify-content: center;
    background: url("/frontend/images/bg-registration-form-2.jpg");
    align-items: center;
    height: 100%;
    background-size: cover;
}
div#app {
    height: 100% !important;
}
main.py-4 {
    height: 100%;
}
form {
    height: 100%;
}
span.invalid-feedback {
    text-align: center;
    color: #ffb100;
}
.form-control.is-invalid {
    border-color: #ffb100;
}
.form-control {
    /* border: 1px solid; */
    border-radius: !important;
    border: 1px solid #232323;
    display: block;
    width: 100%;
    height: 40px;
    padding: 0px 20px;
    border-radius: 20px;
    font-family: "Muli-Bold";
    background: none;
}
.py-4 {
    padding: 0px !important;
}
</style>
@endsection

@section('scripts')
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
    </script>
@endsection
@stop

