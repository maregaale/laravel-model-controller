<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // query
        $movies = Movie::all();

        // view
        return view('movies.index', ['movies' => $movies]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        // validazione
        $request->validate([
            'title' => 'required | string| max:100',
            'author' => 'required | string| max:100',
            'genre' => 'required | string| max:100',
            'plot' => 'required|string',
        ]);
        
        // istanza nuovo elemento
        $newMovie = new Movie();
        $newMovie->title = $data['title'];
        $newMovie->author = $data['author'];
        $newMovie->genre = $data['genre'];
        $newMovie->plot = $data['plot'];
        $newMovie->save();

        // ritorno rotta
        return redirect()->route('movies.index')->with('alert', 'è stato appena aggiunto il film ' . $newMovie->title);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        // view
        return view('movies.show', ['movie' => $movie]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {   
        return view('movies.edit', ['movie' => $movie]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
         // validazione
         $request->validate([
            'title' => 'required | string| max:100',
            'author' => 'required | string| max:100',
            'genre' => 'required | string| max:100',
            'plot' => 'required|string',
        ]);

        // istanza
        $data = $request->all();
        $movie -> update($data);

        // ritorno rotta
        return redirect()->route('movies.index', $movie)->with('alert', 'il film ' . $movie->title . ' è stato modificato');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie -> delete();

        // ritorno rotta
        return redirect()->route('movies.index')->with('alert', 'il film ' . $movie->title . ' è stato eliminato');
    }
}
