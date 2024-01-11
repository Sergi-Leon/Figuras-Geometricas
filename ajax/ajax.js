function cambiarFormulario() {
    var tipoFigura = document.getElementById("tipoFigura").value;

    // Crear una instancia de XMLHttpRequest
    var xhr = new XMLHttpRequest();

    // Configurar la solicitud
    xhr.open("GET", "../php/obtenerFormulario.php?tipoFigura=" + tipoFigura, true);

    // Configurar la función de devolución de llamada cuando la solicitud esté completada
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Cambiar el contenido del contenedor con la respuesta obtenida
            document.getElementById("formularioContainer").innerHTML = xhr.responseText;
        }
    };

    // Enviar la solicitud
    xhr.send();
}
