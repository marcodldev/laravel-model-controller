<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index() {

        $movies = Movie::all();

        // $movies = Movie::where('title', 'Il padrino')->get();
        // ->get() per recuperare il risultato di un filtraggio

        // dd($movies);

        return view('welcome',compact('movies'));
    }

    
}
