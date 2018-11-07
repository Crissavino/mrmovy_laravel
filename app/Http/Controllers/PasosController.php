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

		$usuario->survey = 1;
		$usuario->save();

		$guardoTags = $usuario->tags()->sync($tags);

    	return redirect('resultados');
    }
}
