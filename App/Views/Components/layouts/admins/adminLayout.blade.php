<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">

        <meta name="application-name" content="{{ $_ENV['APP_NAME'] }}">
        {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $_ENV['APP_NAME'] }}</title>
{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" /> --}}

                {{ Core\Helper::asset('build/styles.js') }}

        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>

    </head>

    <body class="antialiased">


        <x-admins.navbar.primary></x-admins.navbar.primary>

        <x-admins.sidebar.primary></x-admins.sidebar.primary>

        <div class="content p-4 sm:ml-64">

            {{ $slot }}
                
            <x-footer.primary></x-footer.primary>
            
        </div>

        {{ Core\Helper::asset('build/libs.js') }} 

        {{ Core\Helper::asset('build/main.js') }}



{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script> --}}

    </body>
</html>
