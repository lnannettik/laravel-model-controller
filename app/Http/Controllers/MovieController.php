<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    // Movie Archieve

    public function index() {

        // ottengo tutti i nmovies

        $movies = Movie::all();
        @dump($movies);


    return view('movies');
    }

}
