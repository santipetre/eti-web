function cambiarTextoSegunResolucion() {
    var tituloHeader = document.getElementById('tituloHeader');
    var copyright = document.getElementById('copyright');
    var screenWidth = window.innerWidth;
    if (screenWidth <= 576) {
        tituloHeader.textContent = "ETI N°1";
        copyright.textContent = "© 2024 Escuela de Educación Secundaria Técnica Nº1";
    } else {
        tituloHeader.textContent = "Escuela Técnica N°1";
        copyright.textContent = "© 2024 Escuela de Educación Secundaria Técnica Nº1 | Av. Avellaneda 687, Las Flores, Prov. de Buenos Aires, Argentina";
    }
}
cambiarTextoSegunResolucion();
window.addEventListener('resize', cambiarTextoSegunResolucion);