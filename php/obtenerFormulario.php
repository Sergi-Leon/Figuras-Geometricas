<?php

$tipoFigura = $_GET['tipoFigura'];

// Lógica para generar el formulario según el tipo de figura
$formularioGenerado = '';

if ($tipoFigura === 'cuadrado') {
    $formularioGenerado = '
        <label for="lado">Lado:</label>
        <input type="text" name="lado" id="lado">
    ';
} elseif ($tipoFigura === 'triangulo') {
    $formularioGenerado = '
        <label for="lado1">Lado 1:</label>
        <input type="text" name="lado1" id="lado1">
        <br>
        <label for="lado2">Lado 2:</label>
        <input type="text" name="lado2" id="lado2">
    ';
} elseif ($tipoFigura === 'circulo') {
    $formularioGenerado = '
        <label for="radio">Radio:</label>
        <input type="text" name="radio" id="radio">
    ';
} elseif ($tipoFigura === 'rectangulo') {
    $formularioGenerado = '
        <label for="lado1">Lado 1:</label>
        <input type="text" name="lado1" id="lado1">
        <br>
        <label for="lado2">Lado 2:</label>
        <input type="text" name="lado2" id="lado2">
    ';
} else {
    $formularioGenerado = 'Formulario no disponible para el tipo de figura seleccionado.';
}

// Retorna el formulario HTML generado
echo $formularioGenerado;
?>
