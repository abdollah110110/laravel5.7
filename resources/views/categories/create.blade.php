@extends('layouts.master')


@section('title')
- ایجاد موضوع جدید
@endsection


@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center py-4">
        <h2>ایجاد موضوع جدید</h2>
        <a href="{{ route('categories') }}" class="btn btn-primary">برگشت به صفحه قبل</a>
    </div>
    
    <form action="{{ route('categories.store') }}" method="POST" class="form-horizontal bg-light py-5 px-3">
        {{ csrf_field() }}
        <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="name" class="col-lg-2 col-form-label text-lg-left">نام:</label>
            <div class="col-lg-6">
                <input class="form-control" type="text" id="name" name="name" placeholder="نام موضوع را وارد کنید...">
            </div>
            <div class="col-lg-4 d-flex align-items-lg-center mt-sm-1">
                @if($errors->has('name'))
                    <small class="text-danger">{{ $errors->first('name') }}</small>
                @else
                    <small class="text-muted">فقط حروف وارد کنید</small>
                @endif
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <button type="submit" class="btn btn-success">ایجاد</button>
        </div>
    </form>
    
</div>
@endsection
