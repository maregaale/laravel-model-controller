<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie - {{$movie->id}}</title>

    {{-- foglio di stile --}}
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
  </head>
  <body>

      <div class="show_container">

        <h1>{{$movie->title}}</h1>

        <div class="info">

          <p><span>Autore/i:</span> {{$movie->author}}</p>
          <p><span>Genere:</span> {{$movie->genre}}</p>
          <p><span>Trama:</span> {{$movie->plot}}</p>
        </div>
      </div>
  </body>
</html>