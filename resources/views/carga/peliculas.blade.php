@if (auth()->user()->is_admin == 0)
	<script>window.location = "/resultados";</script>
@endif

@extends('app')

@section('title', 'Carga de Peliculas')

@section('head')

<link href="/css/multi-select.css" media="screen" rel="stylesheet" type="text/css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

@endsection

@section('container')
	<section class="contenedor">
		<h1 class="titulo-carga">Cargá una película</h1>
		<form class="formulario-carga" action="" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
			<label for="name">Portada de la pélicula</label><br>
			{!! $errors->first('cover', '<p class="help-block" style="color:red;padding-top:25px";>:message</p>') !!}
	        <input type="file" name="cover" value=""><br>
	        

	        <label for="">Título: </label><br>
	        {!! $errors->first('title', '<p class="help-block" style="color:red;padding-top:25px";>:message</p>') !!}
	        <input type="text" name="title" value="{{old('title')}}"><br>
	        

	        <label for="">Géneros: </label><br>
			{!! $errors->first('genre_id', '<p class="help-block" style="color:red;padding-top:25px";>:message</p>') !!}
	        <div class="lista-checkbox">
				@foreach ($datosGeneros as $genero)
					<label for="{{ $genero->getName() }}" class="label-cbx">
						<input {{ old('genre_id') == $genero->getId() ? 'checked' : '' }} id="{{ $genero->getName() }}" type="checkbox" class="invisible" name="genre_id[]" value="{{ $genero->getId() }}">
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

	        <label for="">Tags: </label><br>
			{!! $errors->first('tag_id', '<p class="help-block" style="color:red;padding-top:25px";>:message</p>') !!}
	        <div class="lista-checkbox">
	        	@foreach ($datosTags as $tag)
					<label for="{{ $tag->getName() }}" class="label-cbx">
						<input {{ old('tag_id') == $tag->getId() ? 'checked' : '' }} id="{{ $tag->getName() }}" type="checkbox" class="invisible" name="tag_id[]" value="{{ $tag->getId() }}">
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

	        <label for="">Año: </label><br>
	        {!! $errors->first('year', '<p class="help-block" style="color:red;padding-top:25px";>:message</p>') !!}
	        <input type="text" name="year" value="{{old('year')}}"><br>
	        

	        <label for="">Duración: </label><br>
	        {!! $errors->first('length', '<p class="help-block" style="color:red;padding-top:25px";>:message</p>') !!}
	        <input type="text" name="length" value="{{old('length')}}"><br>
	        

	        <label for="">Resúmen: </label><br>
	        {!! $errors->first('resume', '<p class="help-block" style="color:red;padding-top:25px";>:message</p>') !!}
	        <textarea name="resume" rows="8" cols="80" value="{{old('resume')}}"></textarea><br>


	        <label for="keep-order">Actores: </label><br>
	        <br>

			<select id='keep-order' multiple='multiple' name="actor_id[]">
				@foreach ($actores as $actor)
					<option value='{{ $actor->id }}' {{ old('actor_id') == $actor->getId() ? 'selected' : '' }}>{{ $actor->name }}</option>
				@endforeach
			</select>
	        <br>
	        

	        {!! $errors->first('actor_id', '<p class="help-block" style="color:red;padding-top:25px";>:message</p>') !!}
	        

	        <label for="">Productores: </label><br>
	        <br>
			<select id='keep-order2' multiple='multiple' name="producer_id[]">
				@foreach ($producers as $producer)
					<option value='{{ $producer->id }}' {{ old('producer_id') == $producer->getId() ? 'selected' : '' }}>{{ $producer->name }}</option>
				@endforeach
			</select>

	        {!! $errors->first('producer_id', '<p class="help-block" style="color:red;padding-top:25px";>:message</p>') !!}
	        <br>
	        

	        <label for="">Enlace a Netflix: </label><br>
	        {!! $errors->first('netflix', '<p class="help-block" style="color:red;padding-top:25px";>:message</p>') !!}
	        <input type="text" name="netflix" value="{{old('netflix')}}"><br>
	        

	        <label for="">Trailer: </label><br>
	        {!! $errors->first('trailer', '<p class="help-block" style="color:red;padding-top:25px";>:message</p>') !!}
	        <input type="text" name="trailer" value="{{old('trailer')}}"><br>
	        

	        <button type="boton" class="boton" name="button">Enviar Película</button>
		</form>
	</section>

	<script src="/js/jquery.multi-select.js" type="text/javascript"></script>
	<script src="/js/multiselect.js" type="text/javascript"></script>
	
@endsection
