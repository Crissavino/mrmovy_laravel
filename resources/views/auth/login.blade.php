@extends('app')

@section('title', 'Iniciar sesión')

@section('container')

   <section class="login">
        <div class="contenedor">
            <div class="texto-formulario">
                <h2><span>Hola</span>, logueate para continuar</h2>
                <p>Bienvenido, ingresa para ver tus películas.</p>
                <a href="#">Olvidé la contraseña</a> / <a href="registro.php">Registrarse</a>
            </div>

            <div class="formulario">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <input type="text" class="" id="email" placeholder="Direccion de correo electrónico" name="email" value="{{ old('email') }}">
                    
                    @if ($errors->has('email'))
                        {{ $errors->first('email') }}
                    @endif

                    <input type="password" class="" id="password" placeholder="Tu contraseña" name="password" required>

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

@endsection