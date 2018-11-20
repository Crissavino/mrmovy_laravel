<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CargaController extends Controller
{
    public function createCarga()
    {
    	$datosTags = \App\Tag::all();
    	$datosGeneros = \App\Genre::all();
    	$actores = \App\Actor::all();
    	$productores = \App\Producer::all();

    	// $datosActores = \App\Actos::all();
    	// $datosProductores = \App\Producer::all();

    	return view('carga/peliculas', ['datosTags' => $datosTags,
    						  'datosGeneros' => $datosGeneros, 'actores' => $actores, 'producers' => $productores]);
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
								'actor_id' => 'required',
								'producer_id' => 'required',
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
								'actor_id.required' => 'Esta campo es obligatorio',
								'producer_id.required' => 'Esta campo es obligatorio',
					    	]);

		$data = request()->all();
		// $data['user_id'] = $userId;

		$titulo = str_slug($data['title']);

		$titulo .=  '.' . request()->file('cover')->extension();

		$path = request()->file('cover')->storeAs('public/images/covers', $titulo);

		$path = str_replace('public', 'storage', $path);

		$data['cover'] = $path;

		$guardoPelicula = \App\Movie::create($data);

		$idUltimaPelicula = $guardoPelicula->id;

		$pelicula = \App\Movie::find($idUltimaPelicula);

		$arrayGeneros = $data['genre_id'];

		$guardoGeneros = $pelicula->genres()->sync($arrayGeneros);

		$arrayActores = $data['actor_id'];

		$guardoActores = $pelicula->actors()->sync($arrayActores);

		$arrayProductores = $data['producer_id'];

		$guardoProductores = $pelicula->producers()->sync($arrayProductores);


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

    public function cargaActor()
    {
    	return view('carga/actor');
    }

    public function insertActor()
    {
    	$data = request()->all();

		$guardoActor = \App\Actor::create($data);
    	
    	return redirect('carga/actor');

    }

    public function cargaProductor()
    {
    	return view('carga/productor');
    	
    }

     public function insertProductor()
    {
    	$data = request()->all();

		$guardoActor = \App\Producer::create($data);
    	
    	return redirect('carga/productor');

    }
}
