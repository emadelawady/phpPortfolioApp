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

                {!! vite('js/styles.js') !!}
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

    <body x-cloak x-data="{darkMode: $persist(false)}" :class="{'dark': darkMode === true }" class="antialiased">


        <x-admins.navbar.primary></x-admins.navbar.primary>


        <x-globals.admins.sidebar/>

        <div class="content p-10 sm:ml-64">

            {{ $slot }}
                
            <x-admins.footer.primary></x-admins.footer.primary>
            
        </div>

        {!! vite('js/libs.js') !!} 
        

        {!! vite('js/main.js') !!}



    </body>
</html>
