<?php
class Rectangulo extends FiguraGeometrica implements PerimetroM {
    protected $lado2;

    public function __construct($lado1, $lado2) {
        parent::__construct("Rectangulo", $lado1);
        $this->lado2 = $lado2;
    }

    public function getLado2() {
        return $this->lado2;
    }

    public function setLado2($lado2) {
        $this->lado2 = $lado2;
    }

    public function area() {
        // Implementa el cálculo del área para un rectángulo
        // ...
    }

    public function perimetro() {
        // Implementa el cálculo del perímetro para un rectángulo
        // ...
    }

    public function toString() {
        return "Tipo de figura: " . $this->getTipoFigura() . ", Lado1: " . $this->getLado1() . ", Lado2: " . $this->getLado2();
    }
}
?>
