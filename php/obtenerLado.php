<?php
// Obtén el valor de "tipoFigura" enviado por POST
$tipoFigura = $_POST['tipoFigura'];

// Inicializa una variable para almacenar el formulario generado
$formularioGenerado = '';

// Lógica para generar el formulario según el tipo de figura seleccionado
if ($tipoFigura === 'cuadrado') {
    // Incluye el archivo con la clase Cuadrado y lógica asociada
    include('./cuadrado.php');

    // Obtiene los valores de "lado1" enviado por POST
    $lado1 = $_POST['lado1'];

    // Crea una instancia de la clase Cuadrado con los valores proporcionados
    $cuadrado1 = new Cuadrado("Cuadrado", $lado1);

    // Muestra la representación en cadena del cuadrado y sus propiedades
    echo $cuadrado1->toString() . ".\n";
    echo "Área del cuadrado: " . $cuadrado1->calcularArea() . ".\n";
    echo "Perímetro del cuadrado: " . $cuadrado1->calcularPerimetro() . ".\n";
} elseif ($tipoFigura === 'triangulo') {
    // Incluye el archivo con la clase Triangulo y lógica asociada
    include('./triangulo.php');

    // Obtiene los valores de "lado1" y "lado2" enviados por POST
    $lado1 = $_POST['lado1'];
    $lado2 = $_POST['lado2'];

    // Crea una instancia de la clase Triangulo con los valores proporcionados
    $triangulo1 = new Triangulo("Triángulo", $lado1, $lado2);

    // Muestra la representación en cadena del triángulo y sus propiedades
    echo $triangulo1->toString() . ".\n";
    echo "Área del triángulo: " . $triangulo1->calcularArea() . "\n";
    echo "Perímetro del triángulo: " . $triangulo1->calcularPerimetro() . "\n";
} elseif ($tipoFigura === 'circulo') {
    // Incluye el archivo con la clase Circulo y lógica asociada
    include('./circulo.php');

    // Obtiene el valor de "lado1" enviado por POST
    $lado1 = $_POST['lado1'];

    // Crea una instancia de la clase Circulo con el valor proporcionado
    $circulo1 = new Circulo("Círculo", $lado1);

    // Muestra la representación en cadena del círculo y sus propiedades
    echo $circulo1->toString() . ".\n";
    echo "Área del círculo: " . $circulo1->calcularArea() . ".\n";
    echo "Perímetro del círculo: " . $circulo1->calcularPerimetro() . ".\n";
} elseif ($tipoFigura === 'rectangulo') {
    // Incluye el archivo con la clase Rectangulo y lógica asociada
    include('./rectangulo.php');

    // Obtiene los valores de "lado1" y "lado2" enviados por POST
    $lado1 = $_POST['lado1'];
    $lado2 = $_POST['lado2'];

    // Crea una instancia de la clase Rectangulo con los valores proporcionados
    $rectangulo1 = new Rectangulo("Rectángulo", $lado1, $lado2);

    // Muestra la representación en cadena del rectángulo y sus propiedades
    echo $rectangulo1->toString() . ".\n";
    echo "Área del rectángulo: " . $rectangulo1->calcularArea() . ".\n";
    echo "Perímetro del rectángulo: " . $rectangulo1->calcularPerimetro() . ".\n";
} else {
    // Si el tipo de figura no es reconocido, asigna un mensaje de error al formulario generado
    $formularioGenerado = 'Formulario no disponible para el tipo de figura seleccionado.';
}

?>