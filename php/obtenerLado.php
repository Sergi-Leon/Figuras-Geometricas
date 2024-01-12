<?php
$tipoFigura = $_POST['tipoFigura'];

// Lógica para generar el formulario según el tipo de figura
$formularioGenerado = '';

if ($tipoFigura === 'cuadrado') {
    include('./cuadrado.php');
    $lado1 = $_POST['lado1'];
    $cuadrado1 = new Cuadrado("Cuadrado", $lado1);
    echo $cuadrado1->toString() . ".\n";
    echo "Área del cuadrado: " . $cuadrado1->calcularArea() . ".\n";
    echo "Perímetro del cuadrado: " . $cuadrado1->calcularPerimetro() . ".\n";
} elseif ($tipoFigura === 'triangulo') {
    include('./triangulo.php');
    $lado1 = $_POST['lado1'];
    $lado2 = $_POST['lado2'];
    $triangulo1 = new Triangulo("Triángulo", $lado1, $lado2);
    echo $triangulo1->toString() . ".\n";
    echo "Área del triángulo: " . $triangulo1->calcularArea() . "\n";
    echo "Perímetro del triángulo: " . $triangulo1->calcularPerimetro() . "\n";
} elseif ($tipoFigura === 'circulo') {
    include('./circulo.php');
    $lado1 = $_POST['lado1'];
    $circulo1 = new Circulo("Círculo", $lado1);
    echo $circulo1->toString() . ".\n";
    echo "Área del círculo: " . $circulo1->calcularArea() . ".\n";
    echo "Perímetro del círculo: " . $circulo1->calcularPerimetro() . ".\n";
} elseif ($tipoFigura === 'rectangulo') {
    include('./rectangulo.php');
    $lado1 = $_POST['lado1'];
    $lado2 = $_POST['lado2'];
    $rectangulo1 = new Rectangulo("Rectángulo", $lado1, $lado2);
    echo $rectangulo1->toString() . ".\n";
    echo "Área del rectángulo: " . $rectangulo1->calcularArea() . ".\n";
    echo "Perímetro del rectángulo: " . $rectangulo1->calcularPerimetro() . ".\n";
} else {
    $formularioGenerado = 'Formulario no disponible para el tipo de figura seleccionado.';
}

?>