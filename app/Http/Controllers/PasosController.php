<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasosController extends Controller
{
    public function createPaso1()
    {
    	$datosGenero = \App\Genre::all();

    	return view('paso1', ['datosGenero' => $datosGenero]);
    }

    public function insertPaso1()
    {
		$userId = auth()->user()->id;

		request()->validate(
			[
				'genre_id' => 'required|size: 3'
			],
			[
				'genre_id.required' => 'Tenes que seleccionar generos',
				'genre_id.size' => 'Debes elegir 3 géneros que te gusten'
			]);

		$generos = request()->input('genre_id');

		$usuario = \App\User::find($userId);

		$guardoGeneros = $usuario->genres()->sync($generos);

    	return redirect('paso2');
    }

    public function createPaso2()
    {
    	$datosTag = \App\Tag::all();
    	;
    	return view('paso2', ['datosTag' => $datosTag]);
    }

    public function insertPaso2()
    {
    	$userId = auth()->user()->id;

		request()->validate(
			[
				'tag_id' => 'required|size: 3'
			],
			[
				'tag_id.required' => 'Tenes que seleccionar temáticas',
				'tag_id.size' => 'Debes elegir 3 temáticas que te gusten'
			]);

		$tags = request()->input('tag_id');

        $usuario = \App\User::find($userId);

		$guardoTags = $usuario->tags()->sync($tags);

    	return redirect('paso3');
    }

    public function createPaso3()
    {

    	$peliculas = \App\Movie::all();
        $userGenres = auth()->user()->genres;
        $userTags = auth()->user()->tags;

        $array = [];

        foreach ($peliculas as $keyP => $pelicula) {
           foreach ($userGenres as $key => $genreU) {
               foreach ($userTags as $keyTU => $tagU) {
                 foreach ($pelicula->genres as $keyG => $genre) {
                    foreach ($pelicula->tags as $keyT => $tag) {
                        if ($tag->id == $tagU->id && $genre->id == $genreU->id) {
                            array_push($array, $pelicula);
                            $peliculas->forget($keyP);
                            $pelicula->tags->forget($keyT);
                            $pelicula->genres->forget($keyG);
                        }
                    }
                 }
               }
           }
        }


        while (count($array) < 10) {
           foreach ($peliculas as $key => $pelicula) {
                array_push($array, $pelicula);
                $peliculas->forget($keyP);

                if (count($array) > 9 ) {
                    break;
                }
           }
        }

        while (count($array) > 10) {
            array_pop($array);
        }

        $score = \App\Score::where('user_id', auth()->user()->id)->first();

        if (is_null($score)) {
            
            for ($i=0; $i < 3 ; $i++) { 
                $data = [
                    'user_id' => auth()->user()->id,
                    'genre_id' => $userGenres[$i]->id,
                    'genre_score' => 0,
                    'tag_id' => $userTags[$i]->id,
                    'tag_score' => 0,
                ];

                $guardoScore = \App\Score::create($data);

            }
        }

    	return view('paso3', ['peliculas' => $array, 'userGenres' => $userGenres, 'userTags' => $userTags]);

    }

    public function insertPaso3()
    {

        $userGenres = auth()->user()->genres;

        $datos = json_decode($_POST['datos'], true);


        $scores = auth()->user()->scores;

        foreach ($scores as $key => $value) {

           if ($value->genre_id == $datos['genreId']) {
                $value->genre_score += $datos['score'];
                $value->save();
           }
        }

        
    }

    public function insertPaso3Tag()
    {
        $userTags = auth()->user()->tags;

        $datos = json_decode($_POST['datos'], true);

        $scores = auth()->user()->scores;

        foreach ($scores as $key => $value) {

           if ($value->tag_id == $datos['tagId']) {
                $value->tag_score += $datos['score'];
                $value->save();
           }
        }
    }

    public function insertFinal()
    {   
        $usuario = \App\User::find(auth()->user()->id);
        $usuario->survey = 1;
        $usuario->save();

        $generoMasVotado = 0;
        $puntajeGenero = 0;
        $tagMasVotado = 0;
        $puntajeTag = 0;

        foreach ($usuario->scores as $key => $score) {
           if ($score->tag_score > $puntajeTag) {
               $tagMasVotado = $score->tag_id;
               $puntajeTag = $score->tag_score;
           }

           if ($score->genre_score > $puntajeGenero ) {
               $generoMasVotado = $score->genre_id;
               $puntajeGenero = $score->genre_score;
           }
        }

        $usuario->tag_id = $tagMasVotado;
        $usuario->genre_id = $generoMasVotado;
        $usuario->save();

    }

    public function insertView()
    {   
        $datos = json_decode($_POST['datos'], true);
        $userId = auth()->user()->id;
        $usuario = \App\User::find($userId);
        $guardoViews = $usuario->views()->attach($datos['movieId']);
    }

}
