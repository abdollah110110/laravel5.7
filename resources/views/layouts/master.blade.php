<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }} @yield('title')</title>

        <!-- Fonts -->
        <!--<link href="" rel="stylesheet" type="text/css">-->
        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/css/bootstrap-rtl.css" rel="stylesheet" type="text/css">
        <link href="/css/themify-icons.css" rel="stylesheet" type="text/css">
        <link href="/css/vazir.css" rel="stylesheet" type="text/css">
        <link href="/css/styles.css" rel="stylesheet" type="text/css">

    </head>
    <body>

		@yield('breadcrumb')

		@include('includes.flash')
		
		@yield('content')

		@yield('proposal-products')

		@include('includes.footer')

		
        <script src="/js/jquery.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/holder.js"></script>
        <script src="/js/scripts.js"></script>
    </body>
</html>
