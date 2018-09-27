@extends('layouts.master')


@section('title')
- صفحه اصلی سایت
@endsection


@section('content')
<div class="jumbotron text-center">
    <h1 class="mb-5">صفحه اصلی سایت</h1>
    <p class="mt-5">در این پروژه ایجاد موضوعات و مقالات رو یاد میگیریم:</p>
    <a class="btn btn-info mt-3" href="/categories">ورود به بخش موضوعات</a>
    <a class="btn btn-primary mt-3" href="/articles">ورود به بخش مقالات</a>
</div>
@endsection
