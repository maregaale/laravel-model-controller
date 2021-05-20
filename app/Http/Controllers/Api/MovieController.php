<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{   
    // metodo index - tutti i film
    public function index()
    {
        $movies = Movie::all();

        return response()->json($movies);
    }

    // metodo show - singolo film
    public function show(Movie $movie)
    {

        return response()->json($movie);
    }
}
