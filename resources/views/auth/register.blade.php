@extends('layouts.Auth.Master')

@section('content')
    <main class="main-content dt-sl mt-4 mb-3">
        <div class="container main-container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-7 col-12 mx-auto">
                    <div class="logo-area text-center mb-3">
                        <a href="#"><img src="{{asset('images/Logo/Logo.png')}}" class="img-fluid" alt="logo"></a>
                    </div>
                    <div class="auth-wrapper form-ui border pt-4">
                        <div class="section-title title-wide mb-1 no-after-title-wide">
                            <h2 class="font-weight-bold">ثبت نام</h2>
                        </div>
                        <div class="message-light">
                            اگر قبلا با ایمیل ثبت‌نام کرده‌اید، نیاز به ثبت‌نام مجدد با شماره همراه ندارید
                        </div>
                        <form action="#">
                            <div class="form-row-title">
                                <h3>ایمیل یا شماره موبایل</h3>
                            </div>
                            <div class="form-row with-icon">
                                <input type="text" class="input-ui pr-2"
                                       placeholder="ایمیل یا شماره موبایل خود را وارد نمایید">
                                <i class="mdi mdi-account-circle-outline"></i>
                            </div>
                            <div class="form-row-title">
                                <h3>رمز عبور</h3>
                            </div>
                            <div class="form-row with-icon">
                                <input type="password" class="input-ui pr-2"
                                       placeholder="رمز عبور خود را وارد نمایید">
                                <i class="mdi mdi-lock-open-variant-outline"></i>
                            </div>
                            <div class="form-row mt-2">
                                <div class="custom-control custom-checkbox float-right mt-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                                    <label class="custom-control-label text-justify" for="customCheck3">
                                        <a href="#">حریم خصوصی</a> و <a href="#">شرایط و قوانین</a> استفاده از سرویس
                                        های سایت دیدیکالا را مطالعه نموده و با کلیه موارد آن موافقم.
                                    </label>
                                </div>
                            </div>
                            <div class="form-row mt-3">
                                <button class="btn-primary-cm btn-with-icon mx-auto w-100">
                                    <i class="mdi mdi-account-circle-outline"></i>
                                    ثبت نام در دیدیکالا
                                </button>
                            </div>
                        </form>
                        <div class="form-footer mt-3">
                            <div>
                                <span class="font-weight-bold">قبلا ثبت نام کرده اید؟</span>
                                <a href="#" class="mr-3 mt-2">وارد شوید</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

