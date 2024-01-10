function obtenerFormulario() {
    var tipoFigura = document.getElementById("tipoFigura").value;

    // Crear una instancia de XMLHttpRequest
    var xhr = new XMLHttpRequest();

    // Configurar la solicitud
    xhr.open("GET", tipoFigura + ".html", true);

    // Configurar la función de devolución de llamada cuando la solicitud esté completada
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Cambiar el contenido de la página actual con la respuesta obtenida
            document.body.innerHTML = xhr.responseText;
        }
    };

    // Enviar la solicitud
    xhr.send();
}
