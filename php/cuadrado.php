<?php

include('figGeometrica.php');
include('perimetro.php');
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
        return "Figura de tipo {$this->getTipoFigura()}. Lado = {$this->getLado1()}";
    }
}

?>
