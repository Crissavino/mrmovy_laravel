<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultadosController extends Controller
{
    public function index()
    {
    	$peliculas = \App\Movie::all();

    	return view('resultados', ['peliculas' => $peliculas]);
    }
}
