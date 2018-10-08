@extends('layouts.master')

@section('title')
- ورود
@endsection

@section('content')
<div class="container">
    <div class="mb-0 mt-4">
        <h2>ورود به سایت</h2>
    </div>
    <hr />
    
    @include('includes.session-flash')
    
    <form action="{{ route('login.post') }}" method="POST" class="form-horizontal bg-light py-5 px-3">
        {{ csrf_field() }}
        <div class="form-group row {{ $errors->has('email') ? 'has-error' : '' }}">
            <label for="email" class="col-lg-2 col-form-label text-lg-left">ایمیل:</label>
            <div class="col-lg-10">
                <input class="form-control" type="email" id="email" name="email" value="{{ old('email') != null ? old('email') : '' }}" placeholder="ایمیل را وارد کنید...">
            </div>
            <div class="col-lg-12 text-center mt-sm-1">
                @if($errors->has('email'))
                <small class="text-danger">{{ $errors->first('email') }}</small>
                @endif
            </div>
        </div>
        <div class="form-group row {{ $errors->has('password') ? 'has-error' : '' }}">
            <label for="password" class="col-lg-2 col-form-label text-lg-left">رمز عبور:</label>
            <div class="col-lg-10">
                <input class="form-control" type="password" id="password" name="password" placeholder="رمز عبور را وارد کنید...">
            </div>
            <div class="col-lg-12 text-center mt-sm-1">
                @if($errors->has('password'))
                <small class="text-danger">{{ $errors->first('password') }}</small>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <div class="col-lg-2">&nbsp;</div>
            <div class="col-lg-3 {{ $errors->has('remember') ? 'has-error p-2' : '' }}">
                <span class="form-inline">
                    <input type="checkbox" class="form-check ml-2" name="remember" value="1" > مرا به خاطر بسپار
                </span>
                @if($errors->has('remember'))
                <br />
                <small class="text-danger">نمیتواند حروف باشد.</small>
                @endif
            </div>
            <div class="col-lg-7 d-flex align-items-lg-center mt-sm-1">
                <a href="{{ route('password.request') }}">فراموشی رمز عبور</a>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <button type="submit" class="btn btn-primary">عضویت</button>
        </div>
    </form>
</div>
@endsection
