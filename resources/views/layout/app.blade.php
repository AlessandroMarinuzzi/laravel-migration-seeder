<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Main Page')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <!-- @foreach($packages as $package)
            <h1>{{$package->hotel}}</h1>
        @endforeach -->
        <header id="site_header">
            @include('partials.header')
        </header>

        <main id="site_main">
            @yield('main_content')
        </main>

        <footer id="site_footer"></footer>
    </body>
</html>