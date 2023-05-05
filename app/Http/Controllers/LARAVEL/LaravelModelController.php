<?php

namespace App\Http\Controllers\LARAVEL;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class LaravelModelController extends Controller
{
    public function index(){

        $movies = Movie::all(); //seleziona tutti i movie da movies
/*             dd($movies);
 */        return view('welcome', compact('movies'));
    }
}
