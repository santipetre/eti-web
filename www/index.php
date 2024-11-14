<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!--Css-->
    <link rel="stylesheet" href="./css/index.css">
    <!--icono-->
    <link rel="icon" type="image/x-icon" href="Imagenes/escudo.png">
    <title>Escuela Tecnica N°1</title>
</head>

<body>
    <!--Header-->
    <?php
    include './php/navbar.php';
    ?>
    <!--Main-->
    <div class="container-fluid">
        <div class="fondoMain row p-3">
            <div class="col-12 col-md-8">
                <main>
                    <h1>Bienvenidos a la Escuela Técnica N°1</h1>
                    <p class="parrafosMain">En la Escuela Técnica N°1, nos enorgullece ofrecer una educación
                        especializada y de calidad en los campos de la Informática y la Electromecánica. Nuestra misión
                        es preparar a nuestros estudiantes para los desafíos técnicos y profesionales del futuro,
                        brindándoles las herramientas y conocimientos necesarios para sobresalir en un entorno en
                        constante evolución.</p>
                    <figure>
                        <div class="d-flex justify-content-center">
                            <img src="Imagenes/escuelafoto.jpeg" alt="foto de  la escuela tecnica" class="fotoMain">
                        </div>
                        <figcaption class="texto-fotoescuela">Foto de la Escuela Técnica N°1 de Las Flores</figcaption>
                    </figure>
                    <h2 class="subtituloMain filosofia">Nuestra Filosofía</h2>
                    <p class="parrafosMain">Creemos en el poder transformador de la educación técnica y nos
                        comprometemos a proporcionar experiencias de aprendizaje que fomenten la innovación, la
                        creatividad y el pensamiento crítico. Nuestra filosofía educativa se basa en los valores de
                        excelencia, responsabilidad y colaboración, y buscamos inculcar estos principios en todos
                        nuestros estudiantes.</p>
                </main>
            </div>
            <!--Aside-->
            <div class="col-12 col-md-4">
                <aside class="d-flex flex-column">
                    <h3 class="tituloSeccionNoticias">Últimas noticias</h3>
                    <div class="articuloNoticia">
                        <div>
                            <div>
                                <img src="Imagenes/Noticias/noticia 1.png" alt="" class="imagenNoticias">
                            </div>
                            <div class="articuloTexto">
                                <h6 class="titulosNoticias">Representación en el Parlamento Estudiantil</h6>
                                <p class="parrafosNoticias">Alumnos de nuestra institución educativa participaron en una
                                    reunión informativa del Parlamento Estudiantil 2024.</p>
                            </div>
                        </div>
                    </div>
                    <div class="articuloNoticia">
                        <div>
                            <div>
                                <img src="Imagenes/Noticias/noticia2.png" alt="" class="imagenNoticias">
                            </div>
                            <div class="articuloTexto">
                                <h6 class="titulosNoticias">Digitalización de Archivos en el Museo</h6>
                                <p class="parrafosNoticias">Se ha completado la digitalización de más de 3500 fichas y
                                    fotos de objetos expuestos, bajo la dirección del Prof. Carlos Draghi Peirano. </p>
                            </div>
                        </div>
                    </div>
                    <div class="articuloNoticia">
                        <div>
                            <div>
                                <img src="Imagenes/Noticias/noticia3.png" alt="" class="imagenNoticias">
                            </div>
                            <div class="articuloTexto">
                                <h6 class="titulosNoticias">Análisis de "La Ilíada" y "Troya"</h6>
                                <p class="parrafosNoticias">Estudiantes de 3II, guiados por el Prof. Pablo Lucrecia,
                                    exploran fragmentos de "La Ilíada", abordando la épica, héroes, antiheroes y el rol
                                    de la mujer.</p>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
        <!--Modalidades-->
        <div class=" d-flex justify-content-center ">
            <h2 class="tituloModalidades">Modalidades</h2>
        </div>
        <section class="modalidades d-flex col-12 justify-content-around">
            <div class="contenedorInfo col-5">
                <a href="paginas/paginaInfo.php">
                    <article class="info">
                        <h2>Informática</h2>
                    </article>
                </a>
            </div>
            <div class="contenedorElectro col-5">
                <a href="paginas/paginaElectro.php">
                    <article class="electro">
                        <h2>Electromecánica</h2>
                    </article>
                </a>
            </div>
        </section>
       <div class="modalidadesCelu">
             <a href="paginas/paginaInfo.php">
                <div class="infoCelu contenedorModalidadesCelu"><i class="bi bi-cpu-fill"></i>
                    <h2 class="modalidadesCeluTitulo">Informática</h2>
                </div>
            </a>
            <a href="paginas/paginaElectro.php">
                <div class="electroCelu contenedorModalidadesCelu"><i class="bi bi-gear-fill"></i>
                    <h2 class="modalidadesCeluTitulo">Electromecánica</h2>
                </div>
            </a>
        </div>
    </div>
    <!--Footer-->
    <?php
    include './php/footer.php';
    ?>
    <!--Scripts-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })
    </script>
    <script src="java/titulo.js"></script>
    </div>
</body>

</html>