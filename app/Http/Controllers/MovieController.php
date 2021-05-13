<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// model
use App\Movie;


class MovieController extends Controller
{
    // metodi
    public function index() {
        // query
        $movies = Movie::all();

        return view('/pages/home', ['movies' => $movies]);
    }

}
