// Escucha el evento de cambio en el elemento con ID "tipoFigura" y ejecuta la función cambiarFormulario
document.getElementById("tipoFigura").addEventListener("change", () => {
    cambiarFormulario();
});

// Función que se ejecuta cuando cambia el valor de "tipoFigura"
function cambiarFormulario() {
    // Obtén el valor de "tipoFigura"
    var tipoFigura = document.getElementById("tipoFigura").value;

    // Crea un objeto FormData y agrega el valor de "tipoFigura"
    var formdata = new FormData();
    formdata.append('tipoFigura', tipoFigura);

    // Crea una instancia de XMLHttpRequest
    var xhr = new XMLHttpRequest();

    // Configura la solicitud POST para obtener el formulario correspondiente
    xhr.open("POST", 'http://localhost/daw2/M12/FiguraGeometrica/php/obtenerFormulario.php', true);

    // Configura la función de devolución de llamada cuando la solicitud esté completada
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Cambia el contenido del contenedor con la respuesta obtenida
            document.getElementById("formularioContainer").innerHTML = xhr.responseText;
        }
    };

    // Envía la solicitud con el objeto FormData
    xhr.send(formdata);
}

// Escucha el evento de envío del formulario con ID "formFigura" y ejecuta la función calcularLado
document.getElementById("formFigura").addEventListener("submit", (event) => {
    // Evita que se envíe el formulario de manera predeterminada
    event.preventDefault();
    calcularLado();
});

// Función que se ejecuta al enviar el formulario
function calcularLado() {
    // Obtén los valores de "tipoFigura", "lado1" y "lado2" del formulario
    var tipoFigura = document.getElementById("tipoFigura").value;
    var tipoLado1 = document.getElementById("lado1").value;
    var tipoLado2 = document.getElementById("lado2");

    // Crea un objeto FormData y agrega los valores obtenidos
    var formdata2 = new FormData();
    formdata2.append('tipoFigura', tipoFigura);
    formdata2.append('lado1', tipoLado1);

    // Si existe un valor en "lado2", agrégalo al objeto FormData
    if (tipoLado2) {
        formdata2.append('lado2', tipoLado2.value);
    }

    // Crea una instancia de XMLHttpRequest
    var xhr2 = new XMLHttpRequest();

    // Configura la solicitud POST para calcular el lado
    xhr2.open("POST", 'http://localhost/daw2/M12/FiguraGeometrica/php/obtenerLado.php', true);

    // Configura la función de devolución de llamada cuando la solicitud esté completada
    xhr2.onreadystatechange = function () {
        if (xhr2.readyState == 4 && xhr2.status == 200) {
            // Cambia el contenido del contenedor con la respuesta obtenida
            document.getElementById("resultado").innerHTML = xhr2.responseText;
        }
    };

    // Envía la solicitud con el objeto FormData
    xhr2.send(formdata2);
}
