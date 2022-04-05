<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content=" afnan">
    <meta name="keywords" content="Job , وظائف">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
      <!-- Bootstrap CSS -->
      {{-- Css File --}}
    @include('layouts.web.style')
</head>
<body>
    <header>
    @include('layouts.web.navbar')
    </header>
    
<main>
    @yield('content')
</main>


{{-- Footer Section --}}
@include('layouts.web.footer')

{{-- Script File --}}
@include('layouts.web.script')


</body>
</html>