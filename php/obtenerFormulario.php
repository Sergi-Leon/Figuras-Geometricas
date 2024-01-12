<?php
$tipoFigura = $_POST['tipoFigura'];

// Lógica para generar el formulario según el tipo de figura
$formularioGenerado = '';

if ($tipoFigura === 'cuadrado') {
    $formularioGenerado = '
        <label for="lado1">Lado1:</label>
        <input type="number" name="lado1" id="lado1">
    ';
} elseif ($tipoFigura === 'triangulo') {
    $formularioGenerado = '
        <label for="lado1">Lado 1:</label>
        <input type="number" name="lado1" id="lado1">
        <br>
        <label for="lado2">Lado 2:</label>
        <input type="number" name="lado2" id="lado2">
    ';
} elseif ($tipoFigura === 'circulo') {
    $formularioGenerado = '
        <label for="lado1">Radio:</label>
        <input type="number" name="lado1" id="lado1">
    ';
} elseif ($tipoFigura === 'rectangulo') {
    $formularioGenerado = '
        <label for="lado1">Lado 1:</label>
        <input type="number" name="lado1" id="lado1">
        <br>
        <label for="lado2">Lado 2:</label>
        <input type="number" name="lado2" id="lado2">
    ';
} else {
    $formularioGenerado = 'Formulario no disponible para el tipo de figura seleccionado.';
}

// Retorna el formulario HTML generado
echo $formularioGenerado;
?>
