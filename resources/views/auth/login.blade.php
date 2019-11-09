@extends('vendor.dashforge.master')

@section('title', 'Chave | Login')

@section('body')
<div class="content content-fixed content-auth">
    <div class="container">
        <div class="media align-items-stretch justify-content-center ht-100p pos-relative">
            <div class="media-body align-items-center d-none d-lg-flex">
                <div class="mx-wd-600">
                    <img src="https://via.placeholder.com/1260x950" class="img-fluid" alt="">
                </div>
                <div class="pos-absolute b-0 l-0 tx-12 tx-center">
                    Workspace design vector is created by <a href="https://www.freepik.com/pikisuperstar" target="_blank">pikisuperstar (freepik.com)</a>
                </div>
            </div><!-- media-body -->
            <div class="sign-wrapper mg-lg-l-50 mg-xl-l-60">
                <div class="wd-100p">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h3 class="tx-color-01 mg-b-5">{{ __('Sign In') }}</h3>
                        <p class="tx-color-03 tx-16 mg-b-40">{{ __('Welcome back! Please signin to continue.') }}</p>

                        <div class="form-group">
                            <label>{{ __('Email address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="yourname@yourmail.com" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="d-flex justify-content-between mg-b-5">
                                <label class="mg-b-0-f">{{ __('Password') }}</label>
                                <a href="{{ route('password.request') }}" class="tx-13">{{ __('Forgot password?') }}</a>
                            </div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter your password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-brand-02 btn-block">{{ __('Sign In') }}</button>
                        <div class="divider-text">or</div>
                        <button class="btn btn-outline-facebook btn-block">{{ __('Sign In With Facebook') }}</button>
                        <button class="btn btn-outline-twitter btn-block">{{ __('Sign In With Twitter') }}</button>
                        <div class="tx-13 mg-t-20 tx-center">{{ __('Dont have an account?') }} <a href="{{ route('register') }}">Create an Account</a></div>
                    </form>
                </div>

            </div><!-- sign-wrapper -->
        </div><!-- media -->
    </div><!-- container -->
</div><!-- content -->
@endsection