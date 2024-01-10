<?php

include('figGeometrica.php');
include('perimetro.php');
class Triangulo extends FiguraGeometrica implements PerimetroM {
    private $lado2;

    public function __construct($tipoFigura, $lado1, $lado2) {
        parent::__construct($tipoFigura, $lado1);
        $this->lado2 = $lado2;
    }

    public function getLado2() {
        return $this->lado2;
    }

    public function setLado2($lado2) {
        $this->lado2 = $lado2;
    }

    public function calcularArea() {
        // Implementación del área para un triángulo
        return ($this->lado1 * $this->lado2) / 2;
    }

    public function calcularPerimetro() {
        // Implementación del perímetro para un triángulo usando el teorema de Pitágoras
        $hipotenusa = sqrt(pow($this->lado1, 2) + pow($this->lado2, 2));
        return $this->lado1 + $this->lado2 + $hipotenusa;
    }
}

$triangulo1 = new Triangulo("Triángulo", 5, 7);
echo "Área del triángulo: " . $triangulo1->calcularArea() . "\n";
echo "Perímetro del triángulo: " . $triangulo1->calcularPerimetro() . "\n";