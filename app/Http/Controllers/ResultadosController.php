<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultadosController extends Controller
{
    public function index()
    {
    	$peliculas = \App\Movie::all();
    	$userGenre = auth()->user()->genres;
        $userView = auth()->user()->views;


    	$array = [];

        foreach ($peliculas as $keyP => $pelicula) {
           foreach ($userView as $key => $value) {
               if ($value->id == $pelicula->id) {
                    $peliculas->forget($keyP);
               }
           }
        }

    	foreach ($peliculas as $keyP => $pelicula) {
    		foreach ($pelicula->genres as $key => $genre) {
    			foreach ($pelicula->tags as $key => $tag) {
    				if (auth()->user()->genre_id == $genre->id && auth()->user()->tag_id == $tag->id) {
    					array_push($array, $pelicula);
    					$peliculas->forget($keyP);
    				}
    			}
			}
		}

		foreach ($peliculas as $keyP => $pelicula) {
    		foreach ($pelicula->genres as $key => $genre) {
    				if (auth()->user()->genre_id == $genre->id) {
    					array_push($array, $pelicula);
    					$peliculas->forget($keyP);

    				}
			}
		}

		foreach ($peliculas as $keyP => $pelicula) {
    			foreach ($pelicula->tags as $key => $tag) {
    				if (auth()->user()->tag_id == $tag->id) {
    					array_push($array, $pelicula);
    					$peliculas->forget($keyP);

    				}
    			}
		}

    	return view('resultados', ['peliculas' => $array]);
    }
}
