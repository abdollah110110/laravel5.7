@extends('layouts.master')


@section('title')
- ویرایش: {{ $article->title }}
@endsection


@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center py-4">
        <h2>ویرایش: <small class="text-warning">{{ $article->title }}</small></h2>
        <a href="{{ route('articles') }}" class="btn btn-primary">برگشت به صفحه قبل</a>
    </div>

    <form action="{{ route('articles.update', ['slug' => $article->slug]) }}" method="POST" class="form-horizontal bg-light py-5 px-3">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group row {{ $errors->has('category_id') ? 'has-error' : '' }}">
            <label for="category_id" class="col-lg-2 col-form-label text-lg-left">موضوع:</label>
            <div class="col-lg-6">
                <select class="form-control" id="category_id" name="category_id">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $article->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
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
                <input class="form-control" type="text" id="title" name="title" value="{{ $article->title }}">
            </div>
            <div class="col-lg-4 d-flex align-items-lg-center mt-sm-1">
                @if($errors->has('title'))
                <small class="text-danger">{{ $errors->first('title') }}</small>
                @endif
            </div>
        </div>
        <div class="form-group row {{ $errors->has('body') ? 'has-error' : '' }}">
            <label for="body" class="col-lg-2 col-form-label text-lg-left">مطلب:</label>
            <div class="col-lg-10">
                <textarea class="form-control" id="body" name="body" placeholder="مطلب را وارد کنید...">{{ $article->body }}</textarea>
            </div>
            <div class="col-lg-12 d-flex justify-content-center align-items-lg-center mt-sm-1">
                @if($errors->has('body'))
                <small class="text-danger text-center">{{ $errors->first('body') }}</small>
                @endif
            </div>
        </div>
        <div class="form-group row {{ $errors->has('active') ? 'has-error' : '' }}">
            <div class="col-lg-2">&nbsp;</div>
            <div class="col-lg-2 form-inline">
                <input type="checkbox" class="form-check ml-2" name="active" value="1" {{ $article->active == 1 ? 'checked' : '' }}> فعال شود
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
