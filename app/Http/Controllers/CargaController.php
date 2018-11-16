<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CargaController extends Controller
{
    public function createCarga()
    {
    	$datosTags = \App\Tag::all();
    	$datosGeneros = \App\Genre::all();
    	// $datosActores = \App\Actos::all();
    	// $datosProductores = \App\Producer::all();

    	return view('carga', ['datosTags' => $datosTags,
    						  'datosGeneros' => $datosGeneros]);
    }

    public function insertCarga()
    {
    	//agarro el id del usuario registrado (ver si sirve)
    	// $userId = auth()->user()->id;

    	request()->validate(
				    		[
					    		'cover' => 'required|file|mimes:jpeg,jpg,png',
					    		'title' => 'required',
								'genre_id' => 'required',
								'tag_id' => 'required',
								'year' => 'required',
								'length' => 'required',
								'resume' => 'required',
								'actor' => 'required',
								'producer' => 'required',
								'netflix' => 'required',
								'trailer' => 'required',
					    	],
					    	[
						    	'cover.required' => 'Esta campo es obligatorio',
						    	'cover.mimes' => 'El cover solamente puede ser jpeg, jpg o png',
						    	'title.required' => 'Esta campo es obligatorio',
								'genre_id.required' => 'Esta campo es obligatorio',
								'tag_id.required' => 'Esta campo es obligatorio',
								'year.required' => 'Esta campo es obligatorio',
								'length.required' => 'Esta campo es obligatorio',
								'resume.required' => 'Esta campo es obligatorio',
								'actor.required' => 'Esta campo es obligatorio',
								'producer.required' => 'Esta campo es obligatorio',
								'netflix.required' => 'Esta campo es obligatorio',
								'trailer.required' => 'Esta campo es obligatorio',
					    	]);

		$data = request()->all();
		// $data['user_id'] = $userId;

		$titulo = str_slug($data['title']);

		$titulo .=  '.' . request()->file('cover')->extension();

		$path = request()->file('cover')->storeAs('images/covers', $titulo);


		$data['cover'] = $path;

		$guardoPelicula = \App\Movie::create($data);

		$idUltimaPelicula = $guardoPelicula->id;

		$pelicula = \App\Movie::find($idUltimaPelicula);

		$arrayGeneros = $data['genre_id'];

		$guardoGeneros = $pelicula->genres()->sync($arrayGeneros);

		$arrayTags = $data['tag_id'];

		$guardoTags = $pelicula->tags()->sync($arrayTags);

		return redirect('carga');
    }
    //estaba intentando hace runa funcion para guardar la imagen pero no me la reconoce
  //   public function guardarCover()
  //   {
  //   	$titulo = str_slug($data['title']);

		// $titulo .=  '.' . request()->file('cover')->extension();

		// $path = request()->file('cover')->storeAs('images/covers', $titulo);

		// return $path;
  //   }
}
