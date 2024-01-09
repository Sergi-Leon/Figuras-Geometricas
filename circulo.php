<?php
class Circulo extends FiguraGeometrica implements PerimetroM {
    public function area() {
        // Implementa el cálculo del área para un círculo
        // ...
    }

    public function perimetro() {
        // Implementa el cálculo del perímetro para un círculo
        // ...
    }

    public function toString() {
        return "Tipo de figura: " . $this->getTipoFigura() . ", Lado1: " . $this->getLado1();
    }
}
?>
