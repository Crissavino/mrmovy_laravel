 <header class="fondo-negro">
    <div class="contenedor">
        <a href="https://mrmovy.com"><img src="images/logo.png" alt="" class="logo"></a>
        <div class="menu-movil">
            <img src="images/menu-movil.png" alt="">
        </div>
        @auth
            <nav class="menu-principal">
            <ul>
                <li><a href="resultados.php">Mis resultados</a></li>
                <li class="borde-derecho-blanco"><a href="#">Mis estadisticas</a></li>
                <li><a href="logout.php" class="enlace-azul">Cerrar sesión</a></li>
            </ul>
        </nav>
        @else
            <nav class="menu-principal">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="index.php#acercade">Acerca de</a></li>
                    <li class="borde-derecho-blanco"><a href="index.php#FAQ">FAQ's</a></li>
                    <li><a href="login.php" class="enlace-azul">Iniciar sesión</a></li>
                </ul>
            </nav>
        @endauth
    </div>
</header>