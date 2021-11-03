<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $movies = Movie::all(); // metotodo statico della classe model che la classe mouvie sta estendendo, perche movie eredita tutti i motodi della classe model       
        return view("home", compact("movies"));
    }

    
}
