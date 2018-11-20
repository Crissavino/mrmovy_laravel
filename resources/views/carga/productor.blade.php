@if (auth()->user()->is_admin == 0)
	<script>window.location = "/resultados";</script>
@endif

@extends('app')

@section('title', 'Carga de Productores')

@section('container')
	<section class="contenedor">
		<h1 class="titulo-carga">Cargar un productor</h1>
		<form action="" class="formulario-carga" method="POST">
			@csrf
			<label for="actor">Nombre del productor</label>
			<br>
			<input type="" name="name" id="actor">
			<br>
			<button type="submit" class="boton">Cargar productor</button>
		</form>
	</section>
@endsection
