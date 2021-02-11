<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
            <!-- Линк -->
            @include('layouts.head')
            <!-- Линк -->
</head>
    <body>

            <!-- Хеадер -->
            @include('layouts.app')
            <!-- Хеадер -->

            @include('layouts.header')
            <!-- Хеадер -->

            <!-- Основной -->
            @include('layouts.content')
            <!-- Основной -->

            <!-- Футер -->
            @include('layouts.footer')
            <!-- Футер -->

            <!-- Скрипт -->
            @include('layouts.script')
            <!-- Скрипт -->

    </body>
</html>
