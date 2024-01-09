<?php
class Cuadrado extends FiguraGeometrica implements PerimetroM {
    public function area() {
        // Implementa el cálculo del área para un cuadrado
        // ...
    }

    public function perimetro() {
        // Implementa el cálculo del perímetro para un cuadrado
        // ...
    }

    public function toString() {
        return "Tipo de figura: " . $this->getTipoFigura() . ", Lado1: " . $this->getLado1();
    }
}
?>
