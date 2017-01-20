<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') | CKBROX</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('gentelella/css/gentelella.css') }}">

        @yield('custom_css')
    </head>

    <body class="login">
        @yield('content')
    </body>

    <script type="application/javascript" src="{{ asset('gentelella/js/gentelella.js') }}"></script>

    @yield('custom_js')
</html>