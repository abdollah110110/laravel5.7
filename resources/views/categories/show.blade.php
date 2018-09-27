@extends('layouts.master')


@section('title')
- {{ $category->name }}
@endsection


@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h2>موضوع: {{ $category->name }}</h2>
        <a href="{{ route('categories.index') }}" class="btn btn-primary">برگشت به صفحه قبل</a>
    </div>
  
    <hr />
    
    <p>موضوع: {{ $category->name }}</p>
    
</div>
@endsection
