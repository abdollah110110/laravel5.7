@extends('layouts.master')

@section('title')
- دریافت ایمیل
@endsection

@section('content')
<div class="container">
    <div class="mb-0 mt-4">
        <h2>دریافت ایمیل</h2>
    </div>
    <hr />
    
    @include('includes.session-flash')
    
    <form action="{{ route('password.email') }}" method="POST" class="form-horizontal bg-light py-5 px-3">
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
        <div class="d-flex justify-content-center mt-4">
            <button type="submit" class="btn btn-primary">ارسال لینک تغییر رمز عبور</button>
        </div>
    </form>
</div>
@endsection
