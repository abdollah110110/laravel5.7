@extends('layouts.master')


@section('name')
- ویرایش: {{ $user->name }}
@endsection


@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center py-4">
        <h2>ویرایش: <small class="text-warning">{{ $user->name }}</small></h2>
        <a href="{{ route('users') }}" class="btn btn-primary">برگشت به صفحه قبل</a>
    </div>

    <form action="{{ route('users.update', ['id' => $user->id]) }}" method="POST" class="form-horizontal bg-light py-5 px-3">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="name" class="col-lg-2 col-form-label text-lg-left">نام:</label>
            <div class="col-lg-6">
                <input class="form-control" type="text" id="name" name="name" value="{{ $user->name }}">
            </div>
            <div class="col-lg-4 d-flex align-items-lg-center mt-sm-1">
                @if($errors->has('name'))
                <small class="text-danger">{{ $errors->first('name') }}</small>
                @endif
            </div>
        </div>
        <div class="form-group row {{ $errors->has('email') ? 'has-error' : '' }}">
            <label for="email" class="col-lg-2 col-form-label text-lg-left">مطلب:</label>
            <div class="col-lg-10">
                <input class="form-control" type="email" id="email" name="email" value="{{ $user->email }}">
            </div>
            <div class="col-lg-12 d-flex justify-content-center align-items-lg-center mt-sm-1">
                @if($errors->has('email'))
                <small class="text-danger text-center">{{ $errors->first('email') }}</small>
                @endif
            </div>
        </div>
        <div class="form-group row {{ $errors->has('active') ? 'has-error' : '' }}">
            <div class="col-lg-2">&nbsp;</div>
            <div class="col-lg-2 form-inline">
                <input type="checkbox" class="form-check ml-2" name="active" value="1" {{ $user->active == 1 ? 'checked' : '' }}> فعال شود
            </div>
            <div class="col-lg-8 d-flex align-items-lg-center mt-sm-1">
                @if($errors->has('active'))
                <small class="text-danger">{{ $errors->first('active') }}</small>
                @endif
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <button type="submit" class="btn btn-warning">ویرایش</button>
        </div>
    </form>

</div>
@endsection
