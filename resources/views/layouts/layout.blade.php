<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

            {{--Линкс--}}
            @include('layouts.head')
            {{--Линкс--}}

</head>
    <body>

            {{--Хеадер--}}
            @include('layouts.app')
            {{--Хеадер--}}

            {{--Хеадер--}}
            @include('layouts.header')
            {{--Хеадер--}}

            {{--Контент--}}
            @include('layouts.content')
            {{--Контент--}}

            {{--Футер--}}
            @include('layouts.footer')
            {{--Футер--}}

            {{--Скрипт--}}
            @include('layouts.script')
            {{--Скрипт--}}

    </body>
</html>
