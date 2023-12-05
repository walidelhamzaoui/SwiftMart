<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/logo1.png">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<style>

</style>
<body>
<div class="d-lg-block  d-none ">
    @include('shared.nav')</div>
    <main class="py-4">
        <div class="col-lg-9 col-7">
            @yield('header')
      
    </div>
    <div id="app" class="container">
    <div class="row d-flex">
     <div class="col-lg-3 col-5  ">
     @include('shared.sidebare')
     
     </div>
<div class="col-lg-9  col-7 ">
            @yield('content')
      
    </div>
    </div> 
    
</main>
</body>
</html>
