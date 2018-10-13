@extends('layouts.master')

@section('title')
- رمز عبور جدید
@endsection

@section('content')
<div class="container">
    <div class="mb-0 mt-4 py-4">
        <h2>رمز عبور جدید</h2>
    </div>
    
    @include('includes.session-flash')
    
    <form action="{{ route('password.update') }}" method="POST" class="form-horizontal bg-light py-5 px-3">
        {{ csrf_field() }}
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-group row {{ $errors->has('email') ? 'has-error' : '' }}">
            <label for="email" class="col-lg-2 col-form-label text-lg-left">ایمیل:</label>
            <div class="col-lg-10">
                <input class="form-control" type="email" id="email" name="email" value="{{ old('email') }}" placeholder="ایمیل را وارد کنید...">
            </div>
            <div class="col-lg-12 text-center">
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
            <div class="col-lg-12 text-center">
                @if($errors->has('password'))
                <small class="text-danger">{{ $errors->first('password') }}</small>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="password_confirmation" class="col-lg-2 col-form-label text-lg-left">تکرار رمز عبور:</label>
            <div class="col-lg-10">
                <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" placeholder="تکرار رمز عبور را وارد کنید...">
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <button type="submit" class="btn btn-warning">تغییر رمز عبور</button>
        </div>
    </form>
</div>
@endsection
