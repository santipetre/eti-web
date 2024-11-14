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
    <link rel="stylesheet" href="../css/proceso.css">
    <!--icono-->
    <link rel="icon" type="image/x-icon" href="../../Imagenes/escudo.png">
    <title>Escuela Tecnica N°1</title>
</head>

<body>
    <!--main-->
    <main>
        <h2>Estamos trabajando en esta pagina</h2>
        <img id="gif" src="../Imagenes/enproceso.gif" alt="Hombre programando">
        <p class="parrafoProceso">¡Hola! En este momento estamos en plena construcción de nuestra página. Estamos
            trabajando duro para tener todo listo lo antes posible. Agradecemos tu paciencia y te invitamos a que
            vuelvas pronto para ver el resultado final. ¡Nos vemos pronto!</p>
    </main>
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