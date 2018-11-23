window.onload = function() {

	var mail = document.querySelector('input[name="email"]');

	var pass = document.querySelector('input[name="password"]');

	arrayForm = [mail, pass];

	arrayForm.forEach(function(element, index){
		addEventListener('submit', function(event){
			if (element.value == "") {
				event.preventDefault();
				var errores = document.querySelectorAll('.invalid-feedback');
				errores[index].innerText = 'Debes completar todos los campos';
			}else{
				if (element.name == 'email') {
					var regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
					var mail = element.value;
					if (!(regexEmail.test(mail))) {
						event.preventDefault();
						var errores = document.querySelectorAll('.invalid-feedback');
						errores[index].innerText = 'Debes ingresar un formato email validojs';
					}
				}
				else if (element.name == 'password') {
					pass = element.value;
					if (pass.length < 6) {
						event.preventDefault();
						var errores = document.querySelectorAll('.invalid-feedback');
						errores[index].innerText = 'La contraseña debe tener mas de 6 caracteres';
					}
				}
			}
		});
	});

}