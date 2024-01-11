function cambiarFormulario() {
    var tipoFigura = document.getElementById("tipoFigura").value;

    var formdata = new FormData();
    formdata.append('tipoFigura', tipoFigura);

    // Crear una instancia de XMLHttpRequest
    var xhr = new XMLHttpRequest();

    // Configurar la solicitud
    xhr.open("POST", 'http://localhost/daw2/M12/FiguraGeometrica/php/obtenerFormulario.php', true);

    // Configurar la función de devolución de llamada cuando la solicitud esté completada
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Cambiar el contenido del contenedor con la respuesta obtenida
            document.getElementById("formularioContainer").innerHTML = xhr.responseText;
        }
    };

    // Enviar la solicitud
    xhr.send(formdata);
}
