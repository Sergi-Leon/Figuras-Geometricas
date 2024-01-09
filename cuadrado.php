<?php

class Cuadrado extends FiguraGeometrica implements PerimetroM {

    public function __construct($tipoFigura, $lado) {
        parent::__construct($tipoFigura, $lado);
    }

    // Implementación de los métodos propios de Cuadrado
    public function getLado() {
        return $this->getLado1();
    }

    public function setLado($lado) {
        $this->setLado1($lado);
    }

    public function calcularArea() {
        // Implementación del área para un cuadrado
        return pow($this->getLado1(), 2);
    }

    public function calcularPerimetro() {
        // Implementación del perímetro para un cuadrado
        return 4 * $this->getLado1();
    }

    // Implementación del método toString
    public function toString() {
        return "Cuadrado de tipo {$this->getTipoFigura()} con lado={$this->getLado1()}";
    }
}

// Ejemplo de uso:
$cuadrado1 = new Cuadrado("Cuadrado", 3);
echo $cuadrado1->toString() . ".\n";
echo "Área del cuadrado: " . $cuadrado1->calcularArea() . ".\n";
echo "Perímetro del cuadrado: " . $cuadrado1->calcularPerimetro() . ".\n";

?>
