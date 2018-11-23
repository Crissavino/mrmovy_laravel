var userGenres = document.querySelectorAll('.userGenres')
var userTags = document.querySelectorAll('.userTag')


function actualizar (genreId,score) {
	var campos = {
		genreId: genreId,
		score: score
	}

	var datosDelFormulario = new FormData();
	datosDelFormulario.append('datos', JSON.stringify(campos))

	fetch("/paso3", { 
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

function actualizarTag (tagId,score) {
	var campos = {
		tagId: tagId,
		score: score
	}

	var datosDelFormulario = new FormData();
	datosDelFormulario.append('datos', JSON.stringify(campos))

	fetch("/paso3Tag", { 
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

function actualizarTarjeta (puntaje) {

	var generoUno = document.querySelectorAll('.genero' + click)
	var tags = document.querySelectorAll('.tag' + click)

	generoUno.forEach( function(element, index) {
		userGenres.forEach( function(userGenre) {
			if (userGenre.innerText == element.innerText) {
				actualizar(userGenre.innerText, puntaje)
			}
		});
	});

	tags.forEach( function(element, index) {
		userTags.forEach( function(userTag) {
			if (userTag.innerText == element.innerText) {
				actualizarTag(userTag.innerText, puntaje)
			}
		});
	});

	tarjetaActual.style.display = "none"
	proximaTarjeta.style.display = ""

	click++
	nextClick++

	tarjetaActual = document.querySelector('#tarjeta' + click)
	proximaTarjeta = document.querySelector('#tarjeta' + nextClick)

}

function finalEncuesta () {
	fetch("/paso3Final", { 
		headers: {
		  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		},
		method: 'POST',
		}
	)
	.then(function (response) {
		return response.text();
	})
	.then(function (data) {
	})
}

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

var click = 0
var nextClick = 1

var generoUno = document.querySelectorAll('.genero' + click)

var tarjetaActual = document.querySelector('#tarjeta' + click)
var proximaTarjeta = document.querySelector('#tarjeta' + nextClick)

var botonLaViMeGustoUno = document.querySelector('#la-vi-mg0')
var botonLaViMeGustoDos = document.querySelector('#la-vi-mg1')
var botonLaViMeGustoTres = document.querySelector('#la-vi-mg2')
var botonLaViMeGustoCuatro = document.querySelector('#la-vi-mg3')
var botonLaViMeGustoCinco = document.querySelector('#la-vi-mg4')
var botonLaViMeGustoSeis = document.querySelector('#la-vi-mg5')
var botonLaViMeGustoSiete = document.querySelector('#la-vi-mg6')
var botonLaViMeGustoOcho = document.querySelector('#la-vi-mg7')
var botonLaViMeGustoNueve = document.querySelector('#la-vi-mg8')
var botonLaViMeGustoDiez = document.querySelector('#la-vi-mg9')

var botonLaViMeDaIgualUno = document.querySelector('#la-vi-mdi0')
var botonLaViMeDaIgualDos = document.querySelector('#la-vi-mdi1')
var botonLaViMeDaIgualTres = document.querySelector('#la-vi-mdi2')
var botonLaViMeDaIgualCuatro = document.querySelector('#la-vi-mdi3')
var botonLaViMeDaIgualCinco = document.querySelector('#la-vi-mdi4')
var botonLaViMeDaIgualSeis = document.querySelector('#la-vi-mdi5')
var botonLaViMeDaIgualSiete = document.querySelector('#la-vi-mdi6')
var botonLaViMeDaIgualOcho = document.querySelector('#la-vi-mdi7')
var botonLaViMeDaIgualNueve = document.querySelector('#la-vi-mdi8')
var botonLaViMeDaIgualDiez = document.querySelector('#la-vi-mdi9')

var botonLaViNoMgUno = document.querySelector('#la-vi-nmg0')
var botonLaViNoMgDos = document.querySelector('#la-vi-nmg1')
var botonLaViNoMgTres = document.querySelector('#la-vi-nmg2')
var botonLaViNoMgCuatro = document.querySelector('#la-vi-nmg3')
var botonLaViNoMgCinco = document.querySelector('#la-vi-nmg4')
var botonLaViNoMgSeis = document.querySelector('#la-vi-nmg5')
var botonLaViNoMgSiete = document.querySelector('#la-vi-nmg6')
var botonLaViNoMgOcho = document.querySelector('#la-vi-nmg7')
var botonLaViNoMgNueve = document.querySelector('#la-vi-nmg8')
var botonLaViNoMgDiez = document.querySelector('#la-vi-nmg9')

var botonNoLaViUno = document.querySelector('#no-vi0')
var botonNoLaViDos = document.querySelector('#no-vi1')
var botonNoLaViTres = document.querySelector('#no-vi2')
var botonNoLaViCuatro = document.querySelector('#no-vi3')
var botonNoLaViCinco = document.querySelector('#no-vi4')
var botonNoLaViSeis = document.querySelector('#no-vi5')
var botonNoLaViSiete = document.querySelector('#no-vi6')
var botonNoLaViOcho = document.querySelector('#no-vi7')
var botonNoLaViNueve = document.querySelector('#no-vi8')
var botonNoLaViDiez = document.querySelector('#no-vi9')

var idUno = document.querySelector('#id0').innerText
var idDos = document.querySelector('#id1').innerText
var idTres = document.querySelector('#id2').innerText
var idCuatro = document.querySelector('#id3').innerText
var idCinco = document.querySelector('#id4').innerText
var idSeis = document.querySelector('#id5').innerText
var idSiete = document.querySelector('#id6').innerText
var idOcho = document.querySelector('#id7').innerText
var idNueve = document.querySelector('#id8').innerText
var idDiez = document.querySelector('#id9').innerText


botonLaViMeGustoUno.addEventListener('click', function(){ actualizarTarjeta(2) })
botonLaViMeGustoDos.addEventListener('click', function(){ actualizarTarjeta(2) })
botonLaViMeGustoTres.addEventListener('click', function(){ actualizarTarjeta(2) })
botonLaViMeGustoCuatro.addEventListener('click', function(){ actualizarTarjeta(2) })
botonLaViMeGustoCinco.addEventListener('click', function(){ actualizarTarjeta(2) })
botonLaViMeGustoSeis.addEventListener('click', function(){ actualizarTarjeta(2) })
botonLaViMeGustoSiete.addEventListener('click', function(){ actualizarTarjeta(2) })
botonLaViMeGustoOcho.addEventListener('click', function(){ actualizarTarjeta(2) })
botonLaViMeGustoNueve.addEventListener('click', function(){ actualizarTarjeta(2) })
botonLaViMeGustoDiez.addEventListener('click', function(){ actualizarTarjeta(2) })
botonLaViMeGustoDiez.addEventListener('click', function () {
	finalEncuesta()
	window.location.href = "/resultados";
})


botonLaViMeDaIgualUno.addEventListener('click', function(){ actualizarTarjeta(1) })
botonLaViMeDaIgualDos.addEventListener('click', function(){ actualizarTarjeta(1) })
botonLaViMeDaIgualTres.addEventListener('click', function(){ actualizarTarjeta(1) })
botonLaViMeDaIgualCuatro.addEventListener('click', function(){ actualizarTarjeta(1) })
botonLaViMeDaIgualCinco.addEventListener('click', function(){ actualizarTarjeta(1) })
botonLaViMeDaIgualSeis.addEventListener('click', function(){ actualizarTarjeta(1) })
botonLaViMeDaIgualSiete.addEventListener('click', function(){ actualizarTarjeta(1) })
botonLaViMeDaIgualOcho.addEventListener('click', function(){ actualizarTarjeta(1) })
botonLaViMeDaIgualNueve.addEventListener('click', function(){ actualizarTarjeta(1) })
botonLaViMeDaIgualDiez.addEventListener('click', function(){ actualizarTarjeta(1) })
botonLaViMeDaIgualDiez.addEventListener('click', function () {
	finalEncuesta()
	window.location.href = "/resultados";
})

botonLaViNoMgUno.addEventListener('click', function(){ actualizarTarjeta(-2) })
botonLaViNoMgDos.addEventListener('click', function(){ actualizarTarjeta(-2) })
botonLaViNoMgTres.addEventListener('click', function(){ actualizarTarjeta(-2) })
botonLaViNoMgCuatro.addEventListener('click', function(){ actualizarTarjeta(-2) })
botonLaViNoMgCinco.addEventListener('click', function(){ actualizarTarjeta(-2) })
botonLaViNoMgSeis.addEventListener('click', function(){ actualizarTarjeta(-2) })
botonLaViNoMgSiete.addEventListener('click', function(){ actualizarTarjeta(-2) })
botonLaViNoMgOcho.addEventListener('click', function(){ actualizarTarjeta(-2) })
botonLaViNoMgNueve.addEventListener('click', function(){ actualizarTarjeta(-2) })
botonLaViNoMgDiez.addEventListener('click', function(){ actualizarTarjeta(-2) })
botonLaViNoMgDiez.addEventListener('click', function () {
	finalEncuesta()
	window.location.href = "/resultados";
})

botonNoLaViUno.addEventListener('click', function(){ actualizarTarjeta(0) })
botonNoLaViDos.addEventListener('click', function(){ actualizarTarjeta(0) })
botonNoLaViTres.addEventListener('click', function(){ actualizarTarjeta(0) })
botonNoLaViCuatro.addEventListener('click', function(){ actualizarTarjeta(0) })
botonNoLaViCinco.addEventListener('click', function(){ actualizarTarjeta(0) })
botonNoLaViSeis.addEventListener('click', function(){ actualizarTarjeta(0) })
botonNoLaViSiete.addEventListener('click', function(){ actualizarTarjeta(0) })
botonNoLaViOcho.addEventListener('click', function(){ actualizarTarjeta(0) })
botonNoLaViNueve.addEventListener('click', function(){ actualizarTarjeta(0) })
botonNoLaViDiez.addEventListener('click', function(){ actualizarTarjeta(0) })
botonNoLaViDiez.addEventListener('click', function () {
	finalEncuesta()
	window.location.href = "/resultados";
})

// ACTUALIZAR VISTA EN TABLA VIEWS

	botonLaViMeGustoUno.addEventListener('click', function(){ actualizarView(idUno) })
	botonLaViMeGustoDos.addEventListener('click', function(){ actualizarView(idDos) })
	botonLaViMeGustoTres.addEventListener('click', function(){ actualizarView(idTres) })
	botonLaViMeGustoCuatro.addEventListener('click', function(){ actualizarView(idCuatro) })
	botonLaViMeGustoCinco.addEventListener('click', function(){ actualizarView(idCinco) })
	botonLaViMeGustoSeis.addEventListener('click', function(){ actualizarView(idSeis) })
	botonLaViMeGustoSiete.addEventListener('click', function(){ actualizarView(idSiete) })
	botonLaViMeGustoOcho.addEventListener('click', function(){ actualizarView(idOcho) })
	botonLaViMeGustoNueve.addEventListener('click', function(){ actualizarView(idNueve) })
	botonLaViMeGustoDiez.addEventListener('click', function(){ actualizarView(idDiez) })

	botonLaViMeDaIgualUno.addEventListener('click', function(){ actualizarView(idUno) })
	botonLaViMeDaIgualDos.addEventListener('click', function(){ actualizarView(idDos) })
	botonLaViMeDaIgualTres.addEventListener('click', function(){ actualizarView(idTres) })
	botonLaViMeDaIgualCuatro.addEventListener('click', function(){ actualizarView(idCuatro) })
	botonLaViMeDaIgualCinco.addEventListener('click', function(){ actualizarView(idCinco) })
	botonLaViMeDaIgualSeis.addEventListener('click', function(){ actualizarView(idSeis) })
	botonLaViMeDaIgualSiete.addEventListener('click', function(){ actualizarView(idSiete) })
	botonLaViMeDaIgualOcho.addEventListener('click', function(){ actualizarView(idOcho) })
	botonLaViMeDaIgualNueve.addEventListener('click', function(){ actualizarView(idNueve) })
	botonLaViMeDaIgualDiez.addEventListener('click', function(){ actualizarView(idDiez) })

	botonLaViNoMgUno.addEventListener('click', function(){ actualizarView(idUno) })
	botonLaViNoMgDos.addEventListener('click', function(){ actualizarView(idDos) })
	botonLaViNoMgTres.addEventListener('click', function(){ actualizarView(idTres) })
	botonLaViNoMgCuatro.addEventListener('click', function(){ actualizarView(idCuatro) })
	botonLaViNoMgCinco.addEventListener('click', function(){ actualizarView(idCinco) })
	botonLaViNoMgSeis.addEventListener('click', function(){ actualizarView(idSeis) })
	botonLaViNoMgSiete.addEventListener('click', function(){ actualizarView(idSiete) })
	botonLaViNoMgOcho.addEventListener('click', function(){ actualizarView(idOcho) })
	botonLaViNoMgNueve.addEventListener('click', function(){ actualizarView(idNueve) })
	botonLaViNoMgDiez.addEventListener('click', function(){ actualizarView(idDiez) })

tarjetaActual.style.display = ""
