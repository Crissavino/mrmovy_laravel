@extends('app')

@section('title', 'Registarte para comenzar')

@section('container')

    <section class="login">
      <div class="contenedor">
        <div class="texto-formulario">
            <h2><span>Hola</span>, registrate para comenzar</h2>
            <p>La contraseña debe contener al menos 8 caracteres y contener al menos un número y una letra</p>
            <a href="/login">Ya tengo una cuenta</a>
        </div>

        <div class="formulario">
            <form method="post" action="{{ route('register') }}">
                @csrf
                <input type="text" class="" id="email" placeholder="Direccion de correo electrónico" name="email" value="{{ old('email') }}" >
                <div class="invalid-feedback" style="color:red;";></div>
                @if ($errors->has('email'))
                    {{ $errors->first('email') }}
                @endif

                <input type="password" class="" id="pass" placeholder="Escribe una contraseña" name="password" >
                <div class="invalid-feedback" style="color:red;";></div>

                <input type="password" class="" id="rpass"  placeholder="Repetí la contraseña" name="password_confirmation" >
                <div class="invalid-feedback" style="color:red;";></div>
                @if ($errors->has('password'))
                    {{ $errors->first('password') }}
                @endif

                <br>
                <button type="submit" name="button" class="boton">Comenzar ahora</button>
            </form>
          </div>
        </div>
    </section>

 <script src="js/register.js"></script>
@endsection