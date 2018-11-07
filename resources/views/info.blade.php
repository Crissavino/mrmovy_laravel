@extends('app')

@section('title', 'Información de la película')

@section('container')

<section class="contenedor mas-info">

	<div class="sidebar">
	    <div class="portada-sidebar">
	        <img src="{{ $movie->cover }}" alt="" class="portada-pelicula">
	    </div>

	    <div class="botones-sidebar">
			<a href="/resultados">
				<div class="boton">
					Volver a los resultados
				</div>
			</a>

	        <div class="boton-verde">
	          Marcar como favorita
	        </div>

	        <div class="botones-extras">

				<a href="{{ $movie->netflix }}">
					<div class="boton-gris">
						<img src="/images/logo-netflix.png" alt="Icono para ver {{ $movie->name }} en netflix">
					</div>
				</a>

				<a href="{{ $movie->trailer }}">
					<div class="boton-gris trailer">
						<img src="/images/ver-trailer.png" alt="">Trailer
					</div>
				</a>

	        </div>
	    </div>
	</div>

	<div class="info-pelicula">

		<h1>{{ $movie->title }}</h1>

		<div class="boton-info text-azul">
			@foreach ($movie->genres as $genre)
	   			{{ $genre->name }}
	   		@endforeach
		</div>
		<div class="boton-info">
			{{ $movie->year }}
		</div>
		<div class="boton-info">
			{{ $movie->length }} minutos
		</div>

	<div class="resumen-pelicula">
		<p>
			{{ $movie->resume }}
		</p>
	</div>

	<h2>Actores</h2>
	@foreach ($movie->actors as $actor)
		<div class="boton-info">
			{{ $actor->name }}
		</div>
	@endforeach

	<h2>Producción</h2>
	@foreach ($movie->producers as $producer)
		<div class="boton-info">
			{{ $producer->name }}
		</div>
	@endforeach

	</div>

</section>

@endsection