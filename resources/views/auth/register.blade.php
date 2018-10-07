@extends('layouts.master')

@section('title')
- ثبت نام
@endsection

@section('content')
<div class="container">
    <div class="mb-0 mt-4">
        <h2>عضویت در سایت</h2>
    </div>
    <hr />
    <form action="{{ route('register.post') }}" method="POST" class="form-horizontal bg-light py-5 px-3">
        {{ csrf_field() }}
        <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="name" class="col-lg-2 col-form-label text-lg-left">نام:</label>
            <div class="col-lg-6">
                <input class="form-control" type="text" id="title" name="name" value="{{ old('name') }}" placeholder="نام را وارد کنید...">
            </div>
            <div class="col-lg-4 d-flex align-items-lg-center mt-sm-1">
                @if($errors->has('name'))
                <small class="text-danger">{{ $errors->first('name') }}</small>
                @else
                <small class="text-muted">میتوانید از حروف و اعداد استفاده کنید</small>
                @endif
            </div>
        </div>
        <div class="form-group row {{ $errors->has('email') ? 'has-error' : '' }}">
            <label for="email" class="col-lg-2 col-form-label text-lg-left">ایمیل:</label>
            <div class="col-lg-6">
                <input class="form-control" type="email" id="email" name="email" value="{{ old('email') }}" placeholder="ایمیل را وارد کنید...">
            </div>
            <div class="col-lg-4 d-flex align-items-lg-center mt-sm-1">
                @if($errors->has('email'))
                <small class="text-danger">{{ $errors->first('email') }}</small>
                @else
                <small class="text-muted">برای مثال: ali2018@yahoo.com</small>
                @endif
            </div>
        </div>
        <div class="form-group row {{ $errors->has('password') ? 'has-error' : '' }}">
            <label for="password" class="col-lg-2 col-form-label text-lg-left">رمز عبور:</label>
            <div class="col-lg-6">
                <input class="form-control" type="password" id="password" name="password" placeholder="رمز عبور را وارد کنید...">
            </div>
            <div class="col-lg-4 d-flex align-items-lg-center mt-sm-1">
                @if($errors->has('password'))
                <small class="text-danger">{{ $errors->first('password') }}</small>
                @else
                <small class="text-muted">باید بیشتر از 6 حرف باشد.</small>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="password_confirmation" class="col-lg-2 col-form-label text-lg-left">تکرار رمز عبور:</label>
            <div class="col-lg-6">
                <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" placeholder="تکرار رمز عبور را وارد کنید...">
            </div>
            <div class="col-lg-4 d-flex align-items-lg-center mt-sm-1">
                <small class="text-muted">باید بیشتر از 6 حرف باشد و دقیقاً حرفهای رمز عبور را داشته باشد.</small>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <button type="submit" class="btn btn-success">عضویت</button>
        </div>
    </form>
</div>
@endsection
