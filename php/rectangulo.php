<?php

include('figGeometrica.php');
include('perimetro.php');
class Rectangulo extends FiguraGeometrica implements PerimetroM {
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
        // Implementación del área para un rectángulo
        return $this->getLado1() * $this->lado2;
    }

    public function calcularPerimetro() {
        // Implementación del perímetro para un rectángulo
        return 2 * ($this->getLado1() + $this->lado2);
    }

    public function toString() {
        return "Figura de tipo {$this->getTipoFigura()}. Lado 1 = {$this->getLado1()}, Lado 2 = {$this->lado2}";
    }
}