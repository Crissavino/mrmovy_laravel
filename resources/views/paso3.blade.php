@if (auth()->user()->survey == true)
	<script>window.location = "/resultados";</script>
@endif

<ul style="display: none;">
	@foreach ($userGenres as $userGenre)
		<li class="userGenres">{{ $userGenre->id }}</li>
	@endforeach
</ul>

<ul style="display: none;">
	@foreach ($userTags as $userTag)
		<li class="userTag">{{ $userTag->id }}</li>
	@endforeach
</ul>

@extends('app')

@section('title', 'Paso 3 de 3')

@section('container')

	<section class="contenedor">
		<section class="generos">

			<h2><span>Paso 3 de 3:</span> Un poco de lo que ya viste</h2>
			<p>Cuéntanos un poco acerca de lo que ya viste</p>

			<section class="tarjetas">

				@foreach ($peliculas as $key => $pelicula)
					<div class="tarjeta" id="tarjeta{{ $key }}" style="display: none;">
						<div class="c1">
							<img src="">
						</div>

						<ul style="display: none;">
							@foreach ($pelicula->tags as $keyTag => $tag)
								<li class="genero{{ $key }}">{{ $tag->id }}</li>
							@endforeach
						</ul>

						<ul style="display: none;">
							@foreach ($pelicula->genres as $keyGenre => $genre)
								<li class="tag{{ $key }}">{{ $genre->id }}</li>
							@endforeach
						</ul>

						<div class="c2">
							<span>{{ $key+1 }}  de 10</span>
							<h3>{{ $pelicula->title }} <span>{{ $pelicula->year }}</span></h3>

							<div class="botones">
								<div class="boton-interno" id="la-vi-mg{{ $key }}">
									<img src="">
									La ví y me gustó
								</div>

								<div class="boton-interno" id="la-vi-mdi{{ $key }}">
									<img src="">
									La ví y me da igual
								</div>

								<div class="boton-interno" id="la-vi-nmg{{ $key }}">
									<img src="">
									La ví y no me gustó
								</div>

								<div class="boton-interno" id="no-vi{{ $key }}">
									<img src="">
									No la vi
								</div>
							</div>
						</div>
					</div>
				@endforeach
			

			</section>

			
		</section>
	</section>

	<script type="text/javascript" src=/js/pasos.js></script>

@endsection