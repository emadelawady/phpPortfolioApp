<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="application-name" content="{{ $_ENV['APP_NAME'] }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

        <title>{{ $_ENV['APP_NAME'] }}</title>

                {{ Core\Helper::asset('build/styles.js') }}

        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>


    <script>
    // deal with Dark mode via Tailwind Css

    if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark')
        } else {
        document.documentElement.classList.remove('dark')
        }

    </script>



@php
$route = route('admin.dashboard.index',['req' => 'aa']);
@endphp

    <script>

    let ro = "<?php echo $route ?>";

    console.log(ro);
     /*   function showHint(str) {

            if (str.length == 0) {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
                };
                xmlhttp.open("GET", ro + str, true);
                xmlhttp.send();
            }
        } */
    </script>



    </head>

    <body class="antialiased">


        <x-admins.navbar.primary></x-admins.navbar.primary>


        <x-globals.admins.sidebar/>

        <div class="content p-10 sm:ml-64">

            {{ $slot }}
                
            <x-admins.footer.primary></x-admins.footer.primary>
            
        </div>

        {{ Core\Helper::asset('build/libs.js') }} 

        {{ Core\Helper::asset('build/main.js') }}



    </body>
</html>
