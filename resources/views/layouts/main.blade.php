<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{ seo()->render() }}
        <link href="/src/fa-pro-5.15.3/css/all.min.css" rel="stylesheet" />

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body class="antialiased">
       
        @yield('content')

    </body>
</html>
