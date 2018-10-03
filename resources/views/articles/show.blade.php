@extends('layouts.master-show')


@section('title')
- {{ $article->title }}
@endsection


@section('content')
<div class="container bg-white min-height-800px">
    <div class="text-info text-center pt-4">
        <h2>{{ $article->title }}</h2>
    </div>
    <hr />
    
    <div class="row article">{!! $article->body !!}</div>
    
    <div class="clearfix d-flex justify-content-center mb-3">
        <div class="px-3">
            <span>تاریخ ایجاد: </span>
            <small class="text-muted">{{ $article->create_time }}</small>
        </div>
        <div class="px-3">
            <span>تاریخ ویرایش: </span>
            <small class="text-muted">{{ $article->update_time }}</small>
        </div>
    </div>
    
</div>
@endsection
