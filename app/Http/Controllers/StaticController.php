<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index()
    {
    	return view('index');
    }

    public function info($id)
    {
    	$movie = \App\Movie::find($id);

    	return view('info', ['movie' => $movie]);
    }

}
