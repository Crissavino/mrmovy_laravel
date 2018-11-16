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

				<div class="tarjeta" id="tarjeta-1">
					<div class="c1">
						<img src="">
					</div>

					<div class="c2">
						<span>1 de 10</span>
						<h3>Batman: el caballero de la noche <span>2011</span></h3>

						<div class="botones">
							<div class="boton-interno" id="la-vi-mg-1">
								<img src="">
								La ví y me gustó
							</div>

							<div class="boton-interno" id="la-vi-mi-1">
								<img src="">
								La ví y me da igual
							</div>

							<div class="boton-interno" id="la-vi-nmg-1">
								<img src="">
								La ví y no me gustó
							</div>

							<div class="boton-interno" id="no-vi-1">
								<img src="">
								No la vi
							</div>
						</div>
					</div>
				</div>

				<div class="tarjeta" id="tarjeta-2" style="display: none;">
					<div class="c1">
						<img src="">
					</div>

					<div class="c2">
						<span>1 de 10</span>
						<h3>La era de Hielo <span>2011</span></h3>
						<p class="genero">$pelicula[0].genre</p>

						<div class="botones">
							<div class="boton-interno" id="la-vi-mg-2">
								<img src="">
								La ví y me gustó
							</div>

							<div class="boton-interno" id="la-vi-mi-2">
								<img src="">
								La ví y me da igual
							</div>

							<div class="boton-interno" id="la-vi-nmg-2">
								<img src="">
								La ví y no me gustó
							</div>

							<div class="boton-interno" id="no-vi-2">
								<img src="">
								No la vi
							</div>
						</div>
					</div>
				</div>

				<div class="tarjeta" id="tarjeta-3" style="display: none;">
					<div class="c1">
						<img src="">
					</div>

					<div class="c2">
						<span>1 de 10</span>
						<h3>Batman 2: el caballero de la noche <span>2011</span></h3>

						<div class="botones">
							<div class="boton-interno" id="la-vi-mg-3">
								<img src="">
								La ví y me gustó
							</div>

							<div class="boton-interno" id="la-vi-mi-3">
								<img src="">
								La ví y me da igual
							</div>

							<div class="boton-interno" id="la-vi-nmg-3">
								<img src="">
								La ví y no me gustó
							</div>

							<div class="boton-interno" id="no-vi-3">
								<img src="">
								No la vi
							</div>
						</div>
					</div>
				</div>

			</section>

			
		</section>
	</section>

	<script type="text/javascript">

	
	var botonLaViMeGustoUno = document.querySelector('#la-vi-mg-1')
	var botonLaViMeDaIgualUno = document.querySelector('#la-vi-mi-1')
	var botonLaViNoMeGustoUno = document.querySelector('#la-vi-nmg-1')
	var botonNoLaViUno = document.querySelector('#no-vi-1')

	var botonLaViMeGustoDos = document.querySelector('#la-vi-mg-2')
	var botonLaViMeDaIgualDos = document.querySelector('#la-vi-mi-2')
	var botonLaViNoMeGustoDos = document.querySelector('#la-vi-nmg-2')
	var botonNoLaViDos = document.querySelector('#no-vi-2')

	var botonLaViMeGustoTres = document.querySelector('#la-vi-mg-3')
	var botonLaViMeDaIgualTres = document.querySelector('#la-vi-mi-3')
	var botonLaViNoMeGustoTres = document.querySelector('#la-vi-nmg-3')
	var botonNoLaViTres = document.querySelector('#no-vi-3')
	// var tarjetas = document.querySelectorAll('.tarjeta)

	var tarjetaUno = document.querySelector('#tarjeta-1')
	var tarjetaDos = document.querySelector('#tarjeta-2')
	var tarjetaTres = document.querySelector('#tarjeta-3')


	botonLaViMeGustoUno.addEventListener('click', function (argument) {
		tarjetaUno.style.display = "none"
		tarjetaDos.style.display = "block"

		

	})

	botonLaViMeGustoDos.addEventListener('click', function (argument) {
		tarjetaDos.style.display = "none"
		tarjetaTres.style.display = "block"
	})

	botonLaViMeGustoTres.addEventListener('click', function (argument) {
		alert("ultimo paso")
	})



	// for (var i = 1; i <= 3; i++) {
	// 	var tarjeta = document.querySelector('#tarjeta-'+i)
	// 	var boton = botonLaViMeGusto[i-1]
	// 	boton.addEventListener('click', function (argument) {
	// 		tarjeta.style.display = "none"
	// 		tarjeta[i++].style.display = "none"
	// 	})


	// }


	// tarjetas.forEach( function(element,index) {
	// 	botonLaViMeGusto.addEventListener('click', function (event) {
	// 		// Hace la logica
	// 		console.log(element)
	// 		element.style.display = "none"
	// 		i++
	// 		console.log(i)
	// 		if (i < tarjetas.length) {
	// 			tarjetas[i].style.display = ""
	// 		}
	// 	})
	// });




</script>

@endsection