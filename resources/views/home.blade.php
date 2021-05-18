<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
    <div class="cards">
        @foreach ($movies as $movie)
                <div class="card">
                    <h3>{{ $movie->title }}</h3>
                    <span>{{ $movie->original_title }}</span>
                    <span>{{ $movie->nationality }}</span>
                    <span>{{ $movie->date }}</span>
                    <span>{{ $movie->vote }}</span>
                </div>
        @endforeach
    </div>
    </body>
</html>
