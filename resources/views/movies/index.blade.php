@extends('../layouts/main_layout')

@section('page_title')
  Lista di tutti i film 
@endsection

@section('content')
  <div class="container mt-5">
    <div class="mb-3 text-right">
      <a href="{{route('movies.create')}}"><button type="button" class="btn btn-success">Aggiungi Film</button></a>
    </div>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Titolo</th>
          <th scope="col">Autore</th>
          <th scope="col">Genere</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($movies as $movie)
        <tr>
          <td>{{$movie->title}}</td>
          <td>{{$movie->author}}</td>
          <td>{{$movie->genre}}</td>
          <td>
            <a href="{{route('movies.show', [ 'movie' => $movie->id ])}}"><button type="button" class="btn btn-primary">Visualizza</button></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection