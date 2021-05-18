@extends('../layouts/main_layout')

@section('page_title')
  Lista di tutti i film 
@endsection

@section('content')
  <div class="container mt-5">
    <div class="mb-3 text-right">
      <a href="{{route('movies.create')}}"><button type="button" class="btn btn-success">Aggiungi Film</button></a>
    </div>

    {{-- tabella elementi database --}}
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
            {{-- link a pagina 'show' per visualizzazione--}}
            <a href="{{route('movies.show', [ 'movie' => $movie->id ])}}"><button type="button" class="btn btn-primary m-2">Visualizza</button></a>
            {{-- /link a pagina 'show' per visualizzazione--}}

            {{-- link a pagina 'edit' per modifica--}}
            <a href="{{route('movies.edit', [ 'movie' => $movie->id ])}}"><button type="button" class="btn btn-secondary m-2">Modifica</button></a>
            {{-- /link a pagina 'edit' per modifica--}}

            {{-- form per eliminazione --}}
            <form action="{{route('movies.destroy', ['movie' => $movie->id])}}" method='POST'>
              @csrf
              @method('DELETE')

              <button class="btn btn-dark m-2" type="submit">elimina film</button>
            </form>
            {{-- /form per eliminazione --}}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{-- /tabella elementi database --}}


    {{-- stampa messaggio alert --}}
    @if (session('alert'))
      <div class="alert alert-success" style="position: fixed; bottom: 30px; right: 30px">
          {{ session('alert') }}
      </div>
    @endif
    {{-- /stampa messaggio alert --}}
  </div>
@endsection