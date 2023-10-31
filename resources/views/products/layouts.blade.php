<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>@yield('title','Laravel 10 CRUD Application Tutorial - AllPHPTricks.com')</title>
    
    <link rel="stylesheet" href="{{ asset('assets/css/bs5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bs5i.css') }}">

    @yield('styles')

</head>
<body>  
    <header>
        @include('layouts.partials.navbar')
        <h1 class="mt-3">@yield('h1','Simple Laravel 10 CRUD Application')</h1>
    </header>
<div class="container">
    @yield('content')
</div>
<footer class="text-center">
    @include('layouts.partials.footer')
</footer>
    @yield('scripts')
    <script src="{{ asset('assets/js/bs5.js') }}"></script>
</body>
</html>