@if (auth()->user()->is_admin == 0)
	<script>window.location = "/resultados";</script>
@endif

@extends('app')

@section('title', 'Carga de Actores')

@section('container')
	<section class="contenedor">
		<h1 class="titulo-carga">Cargar un actor</h1>
		<form class="formulario-carga">
			<label for="actor">Nombre de actor</label>
			<br>
			<input type="" name="actor" id="actor">
			<br>
			<button type="submit" class="boton">Cargar actor</button>
		</form>
	</section>
@endsection
