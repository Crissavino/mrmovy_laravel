{{-- @if (auth()->user()->survey == true)
	<script>window.location = "/resultados";</script>
@endif --}}



@extends('app')

@section('title', 'Paso 3 de 3')

@section('container')

	<section class="contenedor">
		<section class="generos">

			<h2><span>Paso 1 de 3:</span> elije tus géneros preferidos</h2>
			<p>Elije tus géneros de preferencia, <b>solo puedes elegir hasta 3 géneros.</b></p>

			<section class="tarjetas">

				@foreach ($peliculas as $key => $pelicula)
					<div class="tarjeta" id="tarjeta{{ $key }}" style="display: none;">
						<div class="c1">
							<img src="">
						</div>

						<div class="c2">
							<span>1 de 10</span>
							<h3>{{ $pelicula->title }} <span>{{ $pelicula->year }}</span></h3>

							<div class="botones">
								<div class="boton-interno" id="la-vi-mg{{ $key }}">
									<img src="">
									La ví y me gustó
								</div>

								<div class="boton-interno" id="la-vi-mi{{ $key }}">
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

	<script type="text/javascript">



		var tarjetaUno = document.querySelector('#tarjeta0')

		tarjetaUno.style.display = "" 

	</script>

@endsection