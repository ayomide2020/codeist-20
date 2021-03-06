<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Welcome to Codeist') }}</title> -->
    <title>Codeist</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito|Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    {{-- Prism --}}
    <link href="{{ asset('prism/prism.css') }}" rel="stylesheet" />
    <script src="{{ asset('prism/prism.js') }}"></script>

    {{-- App CSS --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Vue Clipboard--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-clipboard2/0.3.1/vue-clipboard.min.js"></script> 
</head>
<body>

    <div id="app">

        <main class="">
            @yield('content')
        </main>

    </div>

</body>
</html>
