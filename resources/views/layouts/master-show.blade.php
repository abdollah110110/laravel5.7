<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <!--<link href="" rel="stylesheet" type="text/css">-->
        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/css/bootstrap-rtl.css" rel="stylesheet" type="text/css">
        <link href="/css/themify-icons.css" rel="stylesheet" type="text/css">
        <link href="/css/vazir.css" rel="stylesheet" type="text/css">
        <link href="/css/styles.css" rel="stylesheet" type="text/css">
        
        <link href="/ckeditor/plugins/codesnippet/lib/highlight/styles/monokai.css" rel="stylesheet"/>
        <script src="/ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js"></script>

    </head>
    <body class="bg-light">
        
        <section id="content">
            @yield('content')
        </section>


        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src='/ckeditor/ckeditor.js'></script>
        <script src='/ckeditor/ckfinder/ckfinder.js'></script>
        <script src='/ckeditor/config.js'></script>
        <script>hljs.initHighlightingOnLoad();</script>
    </body>
</html>
