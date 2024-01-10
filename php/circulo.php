<?php

include('figGeometrica.php');
include('perimetro.php');
class Circulo extends FiguraGeometrica implements PerimetroM {

    public function __construct($tipoFigura, $radio) {
        parent::__construct($tipoFigura, $radio);
    }

    // Implementación de los métodos propios de Circulo
    public function getRadio() {
        return $this->getLado1();
    }

    public function setRadio($radio) {
        $this->setLado1($radio);
    }

    // Implementación del método heredado
    public function calcularArea() {
        // Implementación del área para un círculo (ejemplo, puedes cambiarla según tu fórmula)
        return pi() * pow($this->getRadio(), 2);
    }

    // Implementación del método de la interfaz
    public function calcularPerimetro() {
        // Implementación del perímetro para un círculo
        return 2 * pi() * $this->getRadio();
    }

    // Implementación del método toString
    public function toString() {
        return "Figura de tipo {$this->getTipoFigura()}. Radio = {$this->getRadio()}";
    }
}

// Ejemplo de uso:
$circulo1 = new Circulo("Círculo", 5);
echo $circulo1->toString() . ".\n";
echo "Área del círculo: " . $circulo1->calcularArea() . ".\n";
echo "Perímetro del círculo: " . $circulo1->calcularPerimetro() . ".\n";

?>