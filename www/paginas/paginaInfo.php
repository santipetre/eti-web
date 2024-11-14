<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!--Css-->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/electro.css">
    <!--icono-->
    <link rel="icon" type="image/x-icon" href="../Imagenes/escudo.png">
    <title>Escuela Tecnica N°1</title>
</head>

<body>
    <!--Header-->
<?php
    include '../php/navbar.php';
?>
    <!--main-->
    <main>
        <div class="contenedorIntro">
            <h2>División Informática</h2>
            <span>
                <p>Bienvenido a la división informática de la Escuela de Educación Secundaria Técnica N°1 Gral. Manuel
                    Belgrano, en nuestra división enseñamos el mundo de la tecnología digital. Se explorará un programa
                    completo diseñado para enseñarte desde los fundamentos de la programación y el desarrollo de
                    software hasta la gestión de redes, seguridad informática y diseño de sistemas. Al completar el
                    ciclo básico secundario escolar, obtendrás el título de Técnico en Informática Personal y
                    Profesional, preparándote para aplicar tus habilidades en roles prácticos y colaborativos. Nuestros
                    profesores capacitados y nuestras instalaciones están aquí para apoyarte en tu camino hacia una
                    carrera en la informática. </p>
            </span>
        </div>
        <h3 class="materias">Materias Específicas</h3>
        <div class="row justify-content-evenly ">
            <div class="contenedorElectro col-10 col-sm-5 m-3">
                <img src=" ../Imagenes/informatica/seguridad-informatica.png" alt="Imagen 1">
                <div class="Electro">
                    <h3>Seguridad Informática</h3>
                    <p>Nos centramos en proteger sistemas, redes y datos contra ataques y accesos no autorizados. Esto
                        incluye medidas como usar contraseñas seguras, actualizar software regularmente, usar antivirus,
                        firewall y educar a los usuarios sobre prácticas seguras en línea</p>
                </div>
            </div>
            <div class="contenedorElectro col-10 col-sm-5 m-3">
                <img src=" ../Imagenes/informatica/imagen-Sistemas.Digitales.jpg" alt="Imagen 2">
                <div class="Electro">
                    <h3>Sistemas Digitales</h3>
                    <p>Materia fundamental en la electrónica y la informática, permitiendo la creación de dispositivos
                        como computadoras, teléfonos inteligentes y sistemas embebidos. Se basan en principios como la
                        lógica digital, que maneja circuitos que realizan operaciones lógicas y aritméticas.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-evenly ">
            <div class="contenedorElectro col-10 col-sm-5 m-3">
                <img src=" ../Imagenes/informatica/imagen-sistemas operativos.jpg" alt="Imagen 3">
                <div class="Electro">
                    <h3>Laboratorio de Sistemas Operativos</h3>
                    <p>Es un entorno donde se estudian y realizan pruebas prácticas relacionadas con el desarrollo, la
                        implementación y el mantenimiento de sistemas operativos. Los estudiantes y profesionales en
                        este entorno aprenden sobre la gestión de recursos del sistema, la administración de memoria, la
                        planificación de procesos y la interacción con dispositivos de hardware.</p>
                </div>
            </div>
            <div class="contenedorElectro col-10 col-sm-5 m-3">
                <img src=" ../Imagenes/informatica/imagen-hardware.webp" alt="Imagen 4">
                <div class="Electro">
                    <h3>Laboratorio de Hardware</h3>
                    <p>Entendimiento y composición de los componentes físicos de un sistema informático o electrónico.
                        Esto incluye desde los circuitos integrados y placas de circuito en dispositivos electrónicos
                        hasta periféricos como teclados y monitores en computadoras.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-evenly ">
            <div class="contenedorElectro col-10 col-sm-5 m-3">
                <img src=" ../Imagenes/informatica/imagen-Programación.jpg" alt="Imagen 5">
                <div class="Electro">
                    <h3>Laboratorio de Programación</h3>
                    <p>Es un espacio dedicado al aprendizaje y la práctica de la programación informática. En este
                        entorno, los estudiantes y profesionales pueden experimentar con diferentes lenguajes de
                        programación, resolver problemas algorítmicos, desarrollar aplicaciones y mejorar sus
                        habilidades en la escritura de código eficiente y mantenible.</p>
                </div>
            </div>
            <div class="contenedorElectro col-10 col-sm-5 m-3">
                <img src=" ../Imagenes/informatica/teleinformatica.jpg" alt="Imagen 6">
                <div class="Electro">
                    <h3>Teleinformática</h3>
                    <p>Es el campo que estudia la transmisión de información a distancia, utilizando tecnologías de
                        telecomunicaciones y redes de datos. Involucra la transferencia eficiente y segura de datos, voz
                        y video entre diferentes puntos geográficos utilizando infraestructuras como redes de
                        telecomunicaciones, Internet y tecnologías inalámbricas.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-evenly ">
            <div class="contenedorElectro col-10 col-sm-5 m-3">
                <img src=" ../Imagenes/informatica/Investigacion-informatica.webp" alt="Imagen 7">
                <div class="Electro">
                    <h3>Investigación Operativa</h3>
                    <p>Se centra en el estudio y desarrollo de nuevas tecnologías, métodos y teorías para avanzar en el
                        campo de la informática. Esto incluye áreas como inteligencia artificial, computación cuántica,
                        seguridad informática, redes de computadoras, bases de datos, y mucho más. Los investigadores
                        informáticos exploran problemas complejos y buscan soluciones innovadoras que puedan transformar
                        industrias y mejorar la calidad de vida.</p>
                </div>
            </div>
            <div class="contenedorElectro col-10 col-sm-5 m-3">
                <img src=" ../Imagenes/informatica/Sistemas-computacionales.jpg" alt="Imagen 8">
                <div class="Electro">
                    <h3>Mantenimiento y Reparación de Sistemas Computacionales</h3>
                    <p>Se refiere a las actividades destinadas a mantener, reparar y optimizar el funcionamiento de
                        computadoras y sistemas relacionados. Esto incluye la limpieza física, la actualización de
                        software, la reparación de hardware, la resolución de problemas de rendimiento y la prevención
                        de fallos.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-evenly ">
            <div class="contenedorElectro col-10 col-sm-5 m-3">
                <img src=" ../Imagenes/informatica/mantenimiento-de-redes.webp" alt="Imagen 9">
                <div class="Electro">
                    <h3>Mantenimiento de Redes</h3>
                    <p>Se enfoca en asegurar que las redes de computadoras funcionen de manera eficiente y segura. Esto
                        implica actividades como la configuración y actualización de equipos de red (routers, switches,
                        firewalls), monitoreo del rendimiento de la red, gestión de la seguridad (como configuración de
                        firewalls y detección de intrusiones), y la resolución de problemas de conectividad y velocidad.
                    </p>
                </div>
            </div>
            <div class="contenedorElectro col-10 col-sm-5 m-3">
                <img src=" ../Imagenes/informatica/laboratorio-aplicaciones.jpeg" alt="Imagen 10">
                <div class="Electro">
                    <h3>Laboratorio de Aplicaciones</h3>
                    <p>Un entorno dedicado al desarrollo, prueba y aprendizaje de aplicaciones informáticas. En este
                        espacio, los desarrolladores pueden trabajar en la creación de software para diversos
                        propósitos, como aplicaciones móviles, software empresarial, herramientas de productividad,
                        juegos, entre otros. </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-evenly ">
            <div class="contenedorElectro col-10 col-sm-5 m-3">
                <img src=" ../Imagenes/informatica/base de datos.png" alt="Imagen 11">
                <div class="Electro">
                    <h3>Base de datos</h3>
                    <p>En esta materia se enseña cómo gestionar eficientemente grandes volúmenes de datos estructurados.
                        Los estudiantes aprenden a diseñar esquemas de bases de datos, utilizar SQL para consultas y
                        modificaciones, administrar sistemas de gestión de bases de datos, y garantizar la integridad y
                        seguridad de la información.</p>
                </div>
            </div>
            <div class="contenedorElectro col-10 col-sm-5 m-3">
                <img src=" ../Imagenes/informatica/Ing_sistemas-computacionales-crear.jpg" alt="Imagen 11">
                <div class="Electro">
                    <h3>Proyecto, Diseño e Implementación de Sistemas Computacionales</h3>
                    <p>Se enseñan los fundamentos y prácticas necesarios para desarrollar software eficiente y
                        escalable. Los estudiantes aprenden metodologías de desarrollo de software, diseño orientado a
                        objetos, y arquitecturas de sistemas.</p>
                </div>
            </div>
        </div>
    </main>
    <!--Footer-->   
<?php
    include '../php/footer.php';
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
    <script src="../java/titulo.js"></script>
</body>