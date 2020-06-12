<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Game Art') }}</title>


    <!-- Styles -->
    <link href="{{ asset('dists/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dists/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/contact.css')}}" rel="stylesheet"> --}}
    <link href="{{ asset('css/comments.css')}}" rel="stylesheet">
    @yield('style')
    {{-- <link href="{{ asset('custom-css/about.css') }}" rel="stylesheet">
    <link href="{{ asset('custom-css/contact.css')}}" rel="stylesheet"> --}}
</head>
<body>
    
    @include('layouts.navbar')

    <main class="container py-4">
        @yield('content')
    </main>
    
    @include('layouts.footer')
    @include('sweetalert::alert')
    @yield('script')


    <!-- jQuery -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{asset('dists/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('dists/js/bootstrap.bundle.min.js')}}"></script>

</body>
</html>
