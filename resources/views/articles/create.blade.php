@extends('layouts.master')


@section('title')
- ایجاد مقاله جدید
@endsection


@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center py-4">
        <h2>ایجاد مقاله جدید</h2>
        <a href="{{ route('articles') }}" class="btn btn-primary">برگشت به صفحه قبل</a>
    </div>
  
    @if(isset($categories) && count($categories) >0)
    <form action="{{ route('articles.store') }}" method="POST" class="form-horizontal bg-light py-5 px-3">
        {{ csrf_field() }}
        <div class="form-group row {{ $errors->has('category_id') ? 'has-error' : '' }}">
            <label for="category_id" class="col-lg-2 col-form-label text-lg-left">موضوع:</label>
            <div class="col-lg-6">
                <select class="form-control" id="category_id" name="category_id">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-lg-4 d-flex align-items-lg-center mt-sm-1">
                @if($errors->has('category_id'))
                    <small class="text-danger">{{ $errors->first('category_id') }}</small>
                @endif
            </div>
        </div>
        <div class="form-group row {{ $errors->has('title') ? 'has-error' : '' }}">
            <label for="title" class="col-lg-2 col-form-label text-lg-left">عنوان:</label>
            <div class="col-lg-6">
                <input class="form-control" type="text" id="title" name="title" value="{{ old('title') }}" placeholder="عنوان را وارد کنید...">
            </div>
            <div class="col-lg-4 d-flex align-items-lg-center mt-sm-1">
                @if($errors->has('title'))
                    <small class="text-danger">{{ $errors->first('title') }}</small>
                @else
                    <small class="text-muted">فقط حروف وارد کنید</small>
                @endif
            </div>
        </div>
        <div class="form-group row {{ $errors->has('body') ? 'has-error' : '' }}">
            <label for="body" class="col-lg-2 col-form-label text-lg-left">مطلب:</label>
            <div class="col-lg-10">
                <textarea class="form-control" id="body" name="body" placeholder="مطلب را وارد کنید...">{{ old('email') }}</textarea>
            </div>
            <div class="col-lg-12 d-flex justify-content-center align-items-lg-center mt-sm-1">
                @if($errors->has('body'))
                    <small class="text-danger text-center">{{ $errors->first('body') }}</small>
                @endif
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <button type="submit" class="btn btn-success">ایجاد</button>
        </div>
    </form>
    @else
    <div class="alert alert-warning text-center">
        <h4>شما هیچ موضوعی ایجاد نکرده اید.</h4>
        <p>قبل از ایجاد مقاله باید موضوعش را در بخش <a href="/categories">موضوعات</a> ایجاد کنید.</p>
    </div>
    @endif
    
</div>
@endsection
