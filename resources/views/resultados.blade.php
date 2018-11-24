@if (auth()->user()->survey == false)
	<script>window.location = "/paso1";</script>
@endif

@extends('app')

@section('title', 'Tus resultados / Mr. Movy')

@section('container')

	<section class="contenedor">

		<h2 class="titulo-resultados"><span>¡Felicitaciones!</span> Estas son nuestras recomendaciones según tus gustos, prometemos no defraudarte :)</h2>

		@foreach ($peliculas as $key => $pelicula)
			<article class="tarjeta-resultados resultado{{ $key }}">
				<img src="{{ asset($pelicula->cover) }}" class="tarjeta-pelicula" alt="">
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
				        <a href="/info/{{ $pelicula->id }}">
				        	<div class="boton-gris">Más info</div>
				    	</a>
				    	@if ($pelicula->netflix)
							<a href="{{ $pelicula->netflix }}" target="_blank">
								<div class="boton-gris boton-netflix">
									<img src="images/logo-netflix.png" alt="">
								</div>
							</a>
				    	@endif
				        
				        @if ($pelicula->trailer)
							<a href="{{ $pelicula->trailer }}" target="_blank">
						        <div class="boton-gris trailer">
						         	<img src="images/ver-trailer.png" alt="">Trailer
						        </div>
				        	</a>
				    	@endif
				        
				        <button name="{{ $pelicula->id }}" onclick="ck(this)"class="lavi boton lv lvi{{ $key }}" value="{{ $key }}">
				          La ví
				        </button>
				    </div>
				</div>
			</article>
		@endforeach

	</section>

	<script type="text/javascript">

		function actualizarView (movieId) {
			var campos = {
				movieId: movieId,
			}

			var datosDelFormulario = new FormData();
			datosDelFormulario.append('datos', JSON.stringify(campos))

			fetch("/insertar", { 
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					},
				method: 'POST',
				body: datosDelFormulario,
			}
			)
			.then(function (response) {
				return response.text();
			})
			.then(function (data) {
				console.log(data)
			})

		}

		var largo = {!! count($peliculas) !!};

		for (var i = 3; i < largo; i++) {
			document.querySelector('.resultado' + i).style.display = "none"
		}

		var clickT = 4
		
		var botonLV = document.querySelectorAll('.lv')

		function ck (elemento) {
			var tarjeta = document.querySelector('.resultado' + elemento.value)
			tarjeta.style.display = 'none'

			actualizarView(elemento.name)

			document.querySelector('.resultado' + clickT).style.display = "block"
			clickT ++
		}

	</script>

@endsection
