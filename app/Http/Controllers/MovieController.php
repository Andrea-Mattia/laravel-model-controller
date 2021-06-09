<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index() {

        // GET FILMS FROM DB
        $movies = Movie::get();

        return view('home', compact('movies'));
    }
}
