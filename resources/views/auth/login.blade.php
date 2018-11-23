@extends('app')

@section('title', 'Iniciar sesión')

@section('container')

   <section class="login">
        <div class="contenedor">
            <div class="texto-formulario">
                <h2><span>Hola</span>, logueate para continuar</h2>
                <p>Bienvenido, ingresa para ver tus películas.</p>
                <a href="#">Olvidé la contraseña</a> / <a href="/register">Registrarse</a>
            </div>

            <div class="formulario">
                <form method="POST" id="login-form" action="{{ route('login') }}">
                    @csrf
                    <input type="text" class="" id="email" placeholder="Direccion de correo electrónico" name="email" value="{{ old('email') }}">
                    <div class="invalid-feedback" style="color:red;";></div>
                    
                    @if ($errors->has('email'))
                        {{ $errors->first('email') }}
                    @endif

                    <input type="password" class="" id="password" placeholder="Tu contraseña" name="password">
                    <div class="invalid-feedback" style="color:red;";></div>

                    @if ($errors->has('password'))
                        {{ $errors->first('password') }}
                    @endif

                    <label class="label-checkbox" for="recordar">Recordarme</label>
                    <input class="checkbox-recordar" type="checkbox" name="recordar" value="" id="recordar">

                    <button type="submit" name="button" class="boton" >Iniciar sesión</button>
                </form>
              </div>
        </div>
    </section>

 <script src="js/login.js"></script>

@endsection
