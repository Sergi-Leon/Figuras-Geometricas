<?php
// Obtén el valor de "tipoFigura" enviado por POST
$tipoFigura = $_POST['tipoFigura'];

// Inicializa una variable para almacenar el formulario generado
$formularioGenerado = '';

// Lógica para generar el formulario según el tipo de figura seleccionado
if ($tipoFigura === 'cuadrado') {
    // Formulario para un cuadrado con un campo para el lado
    $formularioGenerado = '
        <label for="lado1">Lado1:</label>
        <input type="number" name="lado1" id="lado1">
    ';
} elseif ($tipoFigura === 'triangulo') {
    // Formulario para un triángulo con campos para el lado1 y lado2
    $formularioGenerado = '
        <label for="lado1">Lado 1:</label>
        <input type="number" name="lado1" id="lado1">
        <br>
        <label for="lado2">Lado 2:</label>
        <input type="number" name="lado2" id="lado2">
    ';
} elseif ($tipoFigura === 'circulo') {
    // Formulario para un círculo con un campo para el radio
    $formularioGenerado = '
        <label for="lado1">Radio:</label>
        <input type="number" name="lado1" id="lado1">
    ';
} elseif ($tipoFigura === 'rectangulo') {
    // Formulario para un rectángulo con campos para el lado1 y lado2
    $formularioGenerado = '
        <label for="lado1">Lado 1:</label>
        <input type="number" name="lado1" id="lado1">
        <br>
        <label for="lado2">Lado 2:</label>
        <input type="number" name="lado2" id="lado2">
    ';
} else {
    // Si el tipo de figura no es reconocido, asigna un mensaje de error al formulario generado
    $formularioGenerado = 'Formulario no disponible para el tipo de figura seleccionado.';
}

// Retorna el formulario HTML generado
echo $formularioGenerado;
?>
