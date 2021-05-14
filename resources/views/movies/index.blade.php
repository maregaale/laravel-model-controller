<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>
    @foreach ($movies as $movie)
      <h2>Film - {{$movie->id}}:</h2>
      <p>Titolo: {{$movie->title}}</p>
      <p>Autore/i: {{$movie->author}}</p>
      <p>Genere: {{$movie->genre}}</p>
      <p>Trama: {{$movie->plot}}</p>
    @endforeach
  </body>
</html>