window.onload = function(){
	var mail = document.querySelector('input[name="email"]');

	var pass = document.querySelector('input[name="password"]');

	var rePass = document.querySelector('input[name="password_confirmation"]');

	arrayForm = [mail, pass, rePass];


	arrayForm.forEach(function(element, index){
		addEventListener('submit', function(event){
			if (element.value.trim() === "") {
				event.preventDefault();
				var errores = document.querySelectorAll('.invalid-feedback');
				errores[index].innerText = 'Debes completar todos los campos';
			}
			else if (element.name == 'email') {
				var regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
				var mail = element.value;
				if (!(regexEmail.test(mail))) {
					event.preventDefault();
					var errores = document.querySelectorAll('.invalid-feedback');
					errores[index].innerText = 'Debes ingresar un formato email valido';
				}else{
					var errores = document.querySelectorAll('.invalid-feedback');
					errores[index].innerText = '';
				}
			}
			else if (element.name == 'password') {
				var regexPass = new RegExp("^(?=.*[a-z])(?=.*[0-9])(?=.{8,})");
				var contrasena = element.value;
				if (!(regexPass.test(contrasena))) {
					event.preventDefault();
					var errores = document.querySelectorAll('.invalid-feedback');
					errores[index].innerText = 'La contraseña debe contener al menos 8 caracteres y contener al menos un número y una letra';
				}else{
					var errores = document.querySelectorAll('.invalid-feedback');
					errores[index].innerText = '';
				}

			}
			else if (element.name == 'password_confirmation') {
				if (rePass.value.trim() !== pass.value.trim()) {
					event.preventDefault();
					var errores = document.querySelectorAll('.invalid-feedback');
					errores[index].innerText = 'Las contraseñas no coinciden';
				}else{
					var errores = document.querySelectorAll('.invalid-feedback');
					errores[index].innerText = '';
				}
			}
			else{
				var errores = document.querySelectorAll('.invalid-feedback');
				errores[index].innerText = '';
			}
		});
	});
}