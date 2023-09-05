<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- @vite(['resources/js/app.js']) --}}
        <script src="{{asset("build/assets/app-6abf9859.js")}}" ></script>

    
    </head>
    <body class="">
       
    </body>

    <script type="module" >

        Echo.channel("message")
        .listen("MessageSent", (event) => {
            document.body.insertAdjacentHTML("afterbegin", `<h4>${event.message}</h4>`);
        });
        
    </script>

</html>

