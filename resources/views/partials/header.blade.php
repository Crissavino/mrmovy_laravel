 <header class="fondo-negro">
    <div class="contenedor">
        <a href="https://mrmovy.com"><img src="/images/logo.png" alt="" class="logo"></a>
        <div class="menu-movil">
            <img src="images/menu-movil.png" alt="">
        </div>
        <div class="desplegable-movil">
            @auth
                <ul>
                    <li><a href="/resultados">Mis resultados</a></li>
                    <li><a href="#">Mis estadisticas</a></li>
                    <li><a href="/logout" class="enlace-azul">Cerrar sesión</a></li>

                    @if (auth()->user()->is_admin)
                        <li><a href="/carga">Cargar pelicula</a></li>
                        <li><a href="/carga/actor">Cargar actor</a></li>
                        <li><a href="/carga/productor">Cargar productor</a></li>
                    @endif
                </ul>
            @else
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="index.php#acercade">Acerca de</a></li>
                    <li><a href="index.php#FAQ">FAQ's</a></li>
                    <li><a href="/login" class="enlace-azul">Iniciar sesión</a></li>
                </ul>
            @endauth
        </div>
        @auth
            <nav class="menu-principal">
            <ul>
                <li><a href="/resultados">Mis resultados</a></li>
                <li class="borde-derecho-blanco"><a href="#">Mis estadisticas</a></li>
                <li><a href="/logout" class="enlace-azul">Cerrar sesión</a></li>
                @if (auth()->user()->is_admin)
                    <li><a href="/carga">Cargar pelicula</a></li>
                    <li><a href="/carga/actor">Cargar actor</a></li>
                    <li><a href="/carga/productor">Cargar productor</a></li>
                @endif
            </ul>
        </nav>
        @else
            <nav class="menu-principal">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="index.php#acercade">Acerca de</a></li>
                    <li class="borde-derecho-blanco"><a href="index.php#FAQ">FAQ's</a></li>
                    <li><a href="/login" class="enlace-azul">Iniciar sesión</a></li>
                </ul>
            </nav>
        @endauth
    </div>
</header>