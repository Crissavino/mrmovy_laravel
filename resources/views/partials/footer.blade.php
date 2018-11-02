<footer class="fondo-blanco">
    <div class="contenedor">
        <img class="" src="/images/favicon.png" alt="" class="claqueta">
        @auth
            <nav class="menu-footer">
                <ul>
                    <li> <a href="/resultados">Mis resultados</a> </li>
                    <li> <a href="#">Mis estadísticas</a> </li>
                    <li> <a href="/logout" class="enlace-azul">Cerrar sesión</a> </li>
                </ul>
            </nav>
        @else
            <nav class="menu-footer">
                <ul>
                    <li><a href="#home">Inicio</a></li>
                    <li><a href="#acercade" class="efecto">Acerca de</a></li>
                    <li class="borde-derecho-gris"><a href="#FAQ">Preguntas frecuentes</a></li>
                    <li><a href="/login" class="enlace-azul">Iniciar sesión</a></li>
                    <li><a href="/register" class="enlace-azul">Registrate</a></li>
                </ul>
            </nav>
        @endauth
        <div class="copyright">©2018 MrMovy. Todos los derechos reservados</div>
    </div>
</footer>
