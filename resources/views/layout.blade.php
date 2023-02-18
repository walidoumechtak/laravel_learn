<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield("title")</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="{{url('css/main.css')}}" rel="stylesheet"/>

        <!-- Styles -->
      
       
    </head>
    <body class="antialiased">
        <div class="relative">
            <nav>
                <a href="/"> Home </a>
                <a href="/about"> about </a>
            </nav>
        </div>
        
        @yield("content")
        
    </body>
</html>
