@component('layouts.master-component')

@slot('title')
- component and slot learning
@endslot


@slot('styles')
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap-rtl.css" rel="stylesheet" type="text/css">
    <link href="/css/vazir.css" rel="stylesheet" type="text/css">
    <link href="/css/styles.css" rel="stylesheet" type="text/css">
@endslot


@slot('content')
    <div class="alert alert-success">
        <h3>این بخش از کدها بجای همان سکشن در لیوتها استفاده میشود.</h3>
    </div>
@endslot


@slot('script')
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
@endslot

@endcomponent