<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Gospel Coalition Job Board - @yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="/bootstrap.css">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">

    @include('partials.nav')

    <div class="container">
        @include('partials.alerts.flash')
        @yield('content')
        @include('partials.alerts.errors')
    </div>

    <!-- JavaScripts -->
    <script src="/jquery.js"></script>
    <script src="/bootstrap.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    @yield('scripts')
</body>
</html>
