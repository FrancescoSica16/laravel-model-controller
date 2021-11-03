<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movies | @yield('title')</title>

        <!-- Fonts -->
        
        <!-- Aggiungo style del css compilato. lo faccio attraverso ASSET -->
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        @yield("cdn-import")
       
    </head>
<body>
    
    <main>
        @yield("contenuto")
    </main>


</body>
</html>