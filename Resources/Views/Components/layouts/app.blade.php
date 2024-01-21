<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">

        <meta name="application-name" content="{{ $_ENV['APP_NAME'] }}">
        {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $_ENV['APP_NAME'] }}</title>

     
        {!! vite('js/styles.js') !!}

        {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

                {{-- {{ Core\Helper::asset('build/styles.js') }} --}}

        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>

    </head>

    <body class="antialiased">

    @php
        $homepage = route('homepage');
        $portfolio = route('portfolio');
    @endphp

    <section class="navigation w-full antialiased bg-white">

        @if (is_current_route('homepage'))
            <x-frontend.navbar />
        @elseif (($_SERVER['REQUEST_URI'] == $portfolio))
         {{-- <x-navbar.secondary></x-navbar.secondary> --}}

        @endif
    </section>

            {{ $slot }}

        <x-frontend.footer />

            {{-- {{ Core\Helper::asset('build/libs.js') }}  --}}
            {!! vite('js/libs.js') !!}

@if ($_SERVER['REQUEST_URI'] == $homepage)
            {{-- {{ Core\Helper::asset('build/homepage.js') }} --}}
    {!! vite('js/homepage.js') !!}

@elseif (($_SERVER['REQUEST_URI'] == $portfolio))
    {{-- <x-navbar.secondary></x-navbar.secondary> --}}
            {{-- {{ Core\Helper::asset('build/main.js') }} --}}
    {!! vite('js/main.js') !!}
@endif

    </body>
</html>
