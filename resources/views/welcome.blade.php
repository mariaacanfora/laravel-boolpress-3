<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <header class="py-5">
            <nav>
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ route('admin.home') }}">Profilo</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </nav>
        </header>
        
        <main>
            <div class="container">
                @auth
                    sì login
                @else
                    no login
                @endauth
            </div>
        </main>
        
    </body>
</html>
