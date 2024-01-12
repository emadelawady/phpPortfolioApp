<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">

        <meta name="application-name" content="{{ $_ENV['APP_NAME'] }}">
        {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $_ENV['APP_NAME'] }}</title>

                {!! vite('js/styles.js') !!}

        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>

    </head>

    <body class="antialiased">


            {{ $slot }}


            {!! vite('js/main.js') !!}
            {!! vite('js/libs.js') !!}
    </body>
</html>
