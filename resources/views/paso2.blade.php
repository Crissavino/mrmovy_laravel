@auth

@if (auth()->user()->survey === 0)

	@extends('app')

	@section('title', 'Paso 2 de 3')

	@section('container')

		<section class="contenedor">
		<section class="tematica">
			<h2><span>Paso 2 de 3:</span> Elije tematicas de preferencia</h2>
            <p>¿Qué temas tiene que contener la trama de una buena película? <b>Solo puedes elegir hasta 3 opciones.</b></p>

			
				<form class="" action="" method="post">
					{{ csrf_field() }}
					{!! $errors->first('tag_id', '<p class="help-block" style="color:red;padding-top:25px";>:message</p>') !!}
					<div class="lista-checkbox">
						@foreach ($datosTag as $tag)
							<label for="{{ $tag->getName() }}" class="label-cbx">
								<input id="{{ $tag->getName() }}" type="checkbox" class="invisible" name="tag_id[]" value="{{ $tag->getId() }}">
								<div class="checkbox">
									<svg width="20px" height="20px" viewBox="0 0 20 20">
										<path d="M3,1 L17,1 L17,1 C18.1045695,1 19,1.8954305 19,3 L19,17 L19,17 C19,18.1045695 18.1045695,19 17,19 L3,19 L3,19 C1.8954305,19 1,18.1045695 1,17 L1,3 L1,3 C1,1.8954305 1.8954305,1 3,1 Z"></path>
										<polyline points="4 11 8 15 16 6"></polyline>
									</svg>
								</div>
								<span>{{ $tag->getName() }}</span>
							</label>
						@endforeach
					</div>
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