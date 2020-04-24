<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Codeist</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

    <div id="app">
        <navbar-component></navbar-component>
        <hero-component></hero-component>
        <content_one-component></content_one-component>
        <content_four-component></content_four-component>
        <content_two-component></content_two-component>
        <content_three-component></content_three-component>
        <footer-component></footer-component>
    </div>

</body>
</html>
