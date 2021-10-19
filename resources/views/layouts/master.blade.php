<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
        @yield('head')
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div>
                @include('layouts/navigasi')
                <div class="container py-4">
                @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>