<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BeersOClock</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="assets/css/monstyle.css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Se connecter</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">S'inscrire</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Beers O'Clock
                </div>
                <div>
                    <h2>Quoi de mieux qu'une petite mousse pour se détendre</h2>
                </div>
                <div>
                    <img src="../../assets/img/tictac.jpg" alt="">
                </div>
                <div class="links">
                    <a href="#">Mentions Légales</a>
                    <a href="#">Contact</a>
                    <a href="#">News</a>
                    <a href="#">Le Blog</a>
                    <a href="#">GitHub</a>
                </div>
            </div>
        </div>
    </body>

</html>
