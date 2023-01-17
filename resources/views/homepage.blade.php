<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        

        <style>
            .cards-container{
                display: flex;
            }

            .cards{
                border: 1px dashed red;
                width: 200px;
                height: 200px;
            }

            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="cards-container">
            @foreach($movies as $movie)
            <div class="cards">

            </div>
            @endforeach
        </div>
    </body>
</html>
