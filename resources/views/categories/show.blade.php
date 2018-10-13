@extends('layouts.master')


@section('title')
- {{ $category->name }}
@endsection


@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center py-4">
        <h2>موضوع: {{ $category->name }}</h2>
        <a href="{{ route('categories') }}" class="btn btn-primary">برگشت به صفحه قبل</a>
    </div>
    
    <p>موضوع: {{ $category->name }}</p>
    
</div>
@endsection
