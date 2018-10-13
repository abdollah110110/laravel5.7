@extends('layouts.master')


@section('title')
- صفحه اصلی سایت
@endsection


@section('content')
<div class="jumbotron text-center">
    <h1 class="text-success"><b>وب سایت شخصی عبدالله سمعی</b></h1>
    @if(Auth::check() && Auth::user()->isAdmin())
    <h3 class="mb-5">سلام <b class="text-success">{{ Auth::user()->name }}</b> گرامی</h3>
    <p class="mt-5">برای مدیریت سایت میتوانید از لینک های زیر استفاده نمایید:</p>
    <a class="btn btn-info mt-3" href="/categories">ورود به بخش موضوعات</a>
    <a class="btn btn-primary mt-3" href="/articles">ورود به بخش مقالات</a>
    <a class="btn btn-warning mt-3" href="/users">ورود به بخش کاربران</a>
    @else
    <p class="mt-5">به وب سایت من خوش آمدید</p>
    @endif
</div>

@include('includes.session-flash')

@if(isset($articles) && count($articles) >0)
<div class="row">
    @foreach($articles as $article)
    <div class="col-lg-6">
        <div class="card card-box-shadow bg-white border-0 mb-3">
            <div class="card-body">
                <h4 class="card-title text-center">
                    <a href="{{ route('articles.show', ['slaug' => $article->slug]) }}" target="_blank">{{ $article->title }}</a>
                </h4>
                <div class="card-text text-justify abstract">{!! $article->abstract !!}</div>
                <div class="text-left">
                    <small>
                        <a href="{{ route('articles.show', ['slaug' => $article->slug]) }}" class="card-link" target="_blank">ادامه مطلب</a>
                    </small>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="text-center">
        {{ $articles->render() }}
    </div>
</div>
@else
<div class="alert alert-warning text-center">
    <h4>هیچ موردی برای نمایش وجود ندارد.</h4>
</div>
@endif
@endsection
