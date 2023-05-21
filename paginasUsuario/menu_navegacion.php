<nav>
        <ul>
            <li><a href="./paginaPrincipalUsuario.php">Inicio</a></li>
            <li>
                <a href="#">Género</a>
                <ul class="submenu">
                    <li><a href="./categoriaAccion.php">Acción</a></li>
                    <li><a href="./categoriaAventura.php">Aventura</a></li>
                    <li><a href="./categoriaBiografico.php">Biografico</a></li>
                    <li><a href="./categoriaCienciaFiccion.php">Ciencia ficcion</a></li>
                    <li><a href="./categoriaComedia.php">Comedia</a></li>
                    <li><a href="./categoriaDrama.php">Drama</a></li>
                    <li><a href="./categoriaMisterio.php">Misterio</a></li>
                    <li><a href="./categoriaSuperHeroes.php">Superheroes</a></li>
                    <li><a href="./categoriaTerror.php">Terror</a></li>
                </ul>
            </li>
            <li>
                <form action="../destruir_sesion.php" method="POST">
                    <input type="submit" value="Destruir sesión">
                </form>
            </li>
            <li class="derecha">
                <form id="search-form" method="POST" action="./buscar.php">
                    <input name="buscar" type="text" id="search-input" placeholder="Buscar...">
                    <button type="submit">Buscar</button>
                </form>
            </li>
        </ul>
    </nav>