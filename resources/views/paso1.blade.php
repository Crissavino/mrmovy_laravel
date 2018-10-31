@auth

@if (auth()->user()->survey === 0)

	@extends('app')

	@section('title', 'Paso 1 de 3')

	@section('container')

		<section class="contenedor">

			<div class="notificacion">
				<p><span>¡Bienvenido {{ auth()->user()->email }}!</span> Ayúdanos a configurar tus gustos y preferencias, será breve :)</p>
			</div>

			<h2><span>Paso 1 de 3:</span> elije tus géneros preferidos</h2>
			<p>Elije tus géneros de preferencia, <b>solo puedes elegir hasta 3 géneros.</b></p>

			<section class="generos">
				<form class="" action="" method="post">
					{{ csrf_field() }}
					{!! $errors->first('genre_id', '<p class="help-block" style="color:red";>:message</p>') !!}
						@foreach ($datosGenero as $genero)
							<div class="fondo-blanco-pasos" {{ $errors->has('genre_id') ? 'has-error' : ''}}>
								<label for="" class="labelGeneroTag">{{ $genero->getName() }}
									<input type="checkbox" name="genre_id[]" value="{{ $genero->getId() }}">
	        						<span class="checkmark"></span>
								</label>
							</div>
						@endforeach


					el foreach no me esta dejando cheackear el checkbox <br>

					<label class="labelGenero">One
			            <input type="checkbox" checked="checked">
			            <span class="checkmark"></span>
			        </label>

			        <label class="labelGenero">Two
			            <input type="checkbox">
			            <span class="checkmark"></span>
			        </label>

			        <label class="labelGenero">Three
			            <input type="checkbox">
			            <span class="checkmark"></span>
			        </label>

			        <label class="labelGenero">Four
			            <input type="checkbox">
			            <span class="checkmark"></span>
			        </label>

					<button type="submit" name="button" class="boton" >Siguiente paso</button>
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