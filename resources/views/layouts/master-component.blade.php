<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel {{ $title }}</title>
        
        {{ $styles ?? '' }}
        
    </head>
    <body>
        
        <section id="content" class="container-fluid my-3">
            {{ $content }}
        </section>

    {{ $script ?? '' }}
    
    </body>
</html>
