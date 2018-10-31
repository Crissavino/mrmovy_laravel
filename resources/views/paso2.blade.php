@auth

@if (auth()->user()->survey === 0)

	@extends('app')

	@section('title', 'Paso 2 de 3')

	@section('container')

		<section class="contenedor">

			<h2><span>Paso 2 de 3:</span> Elije tematicas de preferencia</h2>
            <p>¿Qué temas tiene que contener la trama de una buena película? <b>Solo puedes elegir hasta 3 opciones.</b></p>

			<section class="tematica">
				<form class="" action="" method="post">
					{{ csrf_field() }}
					{!! $errors->first('tag_id', '<p class="help-block" style="color:red";>:message</p>') !!}
						@foreach ($datosTag as $tag)
							<div class="fondo-blanco-pasos" {{ $errors->has('tag_id') ? 'has-error' : ''}}>
								<label for="" class="labelGeneroTag">{{ $tag->getName() }}
									<input type="checkbox" name="tag_id[]" value="{{ $tag->getId() }}">
	        						<span class="checkmark"></span>
								</label>
							</div>
						@endforeach

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