<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ URL::asset('img/favicon.ico') }}"
        type="image/x-icon" />
    <link rel="shortcut icon" href="{{ URL::asset('img/favicon.ico') }}"
        type="image/x-icon" />

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

</head>

<body>
    <header>
        <div>
            <a href="{{ route('dashboard') }}">Dashboard</a>
        </div>

        <div>
            @if (Route::has('login'))
            <div>
                @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
                @endif
                @endauth
            </div>
            @endif
        </div>
    </header>

    <div class="content">
        <div class="title">
            Test
        </div>
    </div>
</body>

</html>
