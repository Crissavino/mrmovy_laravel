@if (auth()->user()->survey == false)
	<script>window.location = "/paso1";</script>
@endif

@extends('app')

@section('title', 'Tus resultados / Mr. Movy')

@section('container')

	<section class="contenedor">


		<h2 class="titulo-resultados"><span>¡Felicitaciones!</span> Estas son nuestras recomendaciones según tus gustos, prometemos no defraudarte :)</h2>

		@foreach ($peliculas as $pelicula)
			<article class="tarjeta-resultados">
				<img src="{{ $pelicula->cover }}" class="tarjeta-pelicula" alt="">
				<div class="pelicula">
				    <h2>{{ $pelicula->title }}</h2>
				    <p class="fecha">{{ $pelicula->year }}</p>
				   	
				    <p class="generos">
				    	@foreach ($pelicula->genres as $genre)
				   			{{ $genre->name }}
				   		@endforeach
				    </p>
				    <p class="actores">
				    	@foreach ($pelicula->actors as $actor)
				   			{{ $actor->name }}
				   		@endforeach
				    </p>
				    <p class="director">Dirigida por <strong>
				    	@foreach ($pelicula->producers as $producer)
				   			{{ $producer->name }}
				   		@endforeach
				    </strong></p>
				    <div class="botones">
				        <a href="info.php"><div class="boton-gris">
				          Más info
				        </div></a>
				        <div class="boton-gris boton-netflix">
				          <img src="images/logo-netflix.png" alt="">
				        </div>
				        <div class="boton-gris trailer">
				          <img src="images/ver-trailer.png" alt="">Trailer
				        </div>
				        <div class="lavi boton">
				          La ví
				        </div>
				    </div>
				</div>
			</article>
		@endforeach

	</section>

@endsection
