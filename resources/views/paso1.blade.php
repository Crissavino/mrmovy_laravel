@auth

@if (auth()->user()->survey === 0)

	@extends('app')

	@section('title', 'Paso 1 de 3')

	@section('container')

		<section class="contenedor">
			<section class="generos">

				<div class="notificacion">
					<p><span>¡Bienvenido {{ auth()->user()->email }}!</span> Ayúdanos a configurar tus gustos y preferencias, será breve :)</p>
				</div>

				<h2><span>Paso 1 de 3:</span> elije tus géneros preferidos</h2>
				<p>Elije tus géneros de preferencia, <b>solo puedes elegir hasta 3 géneros.</b></p>

				<form class="" action="" method="post">
					{{ csrf_field() }}
					{!! $errors->first('genre_id', '<p class="help-block" style="color:red;padding-top:25px";>:message</p>') !!}
					<div class="lista-checkbox">
						@foreach ($datosGenero as $genero)
							<label for="{{ $genero->getName() }}" class="label-cbx">
								<input id="{{ $genero->getName() }}" type="checkbox" class="invisible" name="genre_id[]" value="{{ $genero->getId() }}">
								<div class="checkbox">
									<svg width="20px" height="20px" viewBox="0 0 20 20">
										<path d="M3,1 L17,1 L17,1 C18.1045695,1 19,1.8954305 19,3 L19,17 L19,17 C19,18.1045695 18.1045695,19 17,19 L3,19 L3,19 C1.8954305,19 1,18.1045695 1,17 L1,3 L1,3 C1,1.8954305 1.8954305,1 3,1 Z"></path>
										<polyline points="4 11 8 15 16 6"></polyline>
									</svg>
								</div>
								<span>{{ $genero->getName() }}</span>
							</label>
						@endforeach
					</div>
					<button type="submit" name="button" class="boton" style="display: block;">Siguiente paso</button>
				</form>
			</section>
		</section>

	@endsection
@else
	@php
		header('location: resultados.php');
	@endphp

@endif





@endauth