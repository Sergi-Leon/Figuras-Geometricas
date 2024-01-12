document.getElementById("tipoFigura").addEventListener("change", () => {
    cambiarFormulario();
});

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

document.getElementById("formFigura").addEventListener("submit", (event) => {
    event.preventDefault();
    calcularLado();
});

function calcularLado() {
    var tipoFigura = document.getElementById("tipoFigura").value;
    var tipoLado1 = document.getElementById("lado1").value;
    var tipoLado2 = document.getElementById("lado2");

    var formdata2 = new FormData();
    formdata2.append('tipoFigura', tipoFigura);
    formdata2.append('lado1', tipoLado1);
    if (tipoLado2) {
        formdata2.append('lado2', tipoLado2.value);
    }
    // Crear una instancia de XMLHttpRequest
    var xhr2 = new XMLHttpRequest();

    // Configurar la solicitud
    xhr2.open("POST", 'http://localhost/daw2/M12/FiguraGeometrica/php/obtenerLado.php', true);

    // Configurar la función de devolución de llamada cuando la solicitud esté completada
    xhr2.onreadystatechange = function () {
        if (xhr2.readyState == 4 && xhr2.status == 200) {
            // Cambiar el contenido del contenedor con la respuesta obtenida
            document.getElementById("resultado").innerHTML = xhr2.responseText;
        }
    };

    // Enviar la solicitud
    xhr2.send(formdata2);

}
