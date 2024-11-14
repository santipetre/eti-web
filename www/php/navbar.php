<header>
    <div class="logoHeader">
        <a href="/index.php"><img src="../Imagenes/escudo.png" alt="Escudo de la Escuela Tecnica"></a>
        <div class="logoTexto"><a href="/index.php" class="principio">
                <h3 class="tituloHeader" id="tituloHeader">Escuela Técnica N°1</h3>
            </a></div>
    </div>
    <!--Navbar celular-->
    <div class="buscadorContainer">
        <button class="botonNav btn btn-primary" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="bi bi-list"></i></button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasRightLabel">Navegador</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="contenedorNavCelu">
                    <div class="contenedorBuscadorCelu">
                        <input type="text" placeholder="Buscar..."> <button class="btnNavCelu" type="submit"><i
                                class="bi bi-search"></i></button>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Institucional
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <a href="paginas/pagina_enproceso.php">
                                        <li>Autoridades</li>
                                    </a>
                                    <a href="paginas/pagina_enproceso.php">
                                        <li>Informacion administrativa</li>
                                    </a>
                                    <a href="paginas/pagina_enproceso.php">
                                        <li>Acuerdo de convivencia</li>
                                    </a>
                                    <a href="paginas/pagina_enproceso.php">
                                        <li>Profesores</li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Egresados
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <a href="paginas/pagina_enproceso.php">
                                        <li>1970-1980</li>
                                    </a>
                                    <a href="paginas/pagina_enproceso.php">
                                        <li>1980-1990</li>
                                    </a>
                                    <a href="paginas/pagina_enproceso.php">
                                        <li>2000-2010</li>
                                    </a>
                                    <a href="paginas/pagina_enproceso.php">
                                        <li>2010-2020</li>
                                    </a>
                                    <a href="paginas/pagina_enproceso.php">
                                        <li>2020-2030</li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Talleres del Ciclo Básico
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <a href="paginas/pagina_enproceso.php">
                                        <li>Hojalatería</li>
                                    </a>
                                    <a href="paginas/pagina_enproceso.php">
                                        <li>Carpintería</li>
                                    </a>
                                    <a href="paginas/pagina_enproceso.php">
                                        <li>Vitrofusión</li>
                                    </a>
                                    <a href="paginas/pagina_enproceso.php">
                                        <li>Herrería</li>
                                    </a>
                                    <a href="paginas/pagina_enproceso.php">
                                        <li>Fundición</li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Aca va algo good-->
            </div>
        </div>
        <input type="text" placeholder="Buscar..." class="buscador">
    </div>

</header>
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Institucional
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                    <li><a class="dropdown-item" href="paginas/pagina_enproceso.php">Autoridades</a></li>
                    <li><a class="dropdown-item" href="paginas/pagina_enproceso.php">Información Administrativa</a>
                    </li>
                    <li><a class="dropdown-item" href="paginas/pagina_enproceso.php">Acuerdo de convivencia</a></li>
                    <li><a class="dropdown-item" href="paginas/pagina_enproceso.php">Profesores</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Egresados
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                    <li><a class="dropdown-item" href="paginas/pagina_enproceso.php">1970-1980</a></li>
                    <li><a class="dropdown-item" href="paginas/pagina_enproceso.php">1981-1990</a></li>
                    <li><a class="dropdown-item" href="paginas/pagina_enproceso.php">1991-2000</a></li>
                    <li><a class="dropdown-item" href="paginas/pagina_enproceso.php">2001-2010</a></li>
                    <li><a class="dropdown-item" href="paginas/pagina_enproceso.php">2011-2020</a></li>
                    <li><a class="dropdown-item" href="paginas/pagina_enproceso.php">2021-2030</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Talleres de Ciclo Básico
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
                    <li><a class="dropdown-item" href="paginas/pagina_enproceso.php">Hojalatería</a></li>
                    <li><a class="dropdown-item" href="paginas/pagina_enproceso.php">Carpintería</a></li>
                    <li><a class="dropdown-item" href="paginas/pagina_enproceso.php">Vitrofusión</a></li>
                    <li><a class="dropdown-item" href="paginas/pagina_enproceso.php">Herrería</a></li>
                    <li><a class="dropdown-item" href="paginas/pagina_enproceso.php">Fundición</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>