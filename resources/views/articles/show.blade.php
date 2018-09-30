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
    
    <div>{!! $article->body !!}</div>
    
</div>
@endsection
