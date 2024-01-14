<?php

// Incluye las clases base necesarias
include('figGeometrica.php');
include('perimetro.php');

// Definición de la clase Rectangulo que hereda de FiguraGeometrica e implementa PerimetroM
class Rectangulo extends FiguraGeometrica implements PerimetroM {
    // Propiedad privada para el segundo lado del rectángulo
    private $lado2;

    // Constructor que llama al constructor de la clase base FiguraGeometrica y asigna el segundo lado
    public function __construct($tipoFigura, $lado1, $lado2) {
        parent::__construct($tipoFigura, $lado1);
        $this->lado2 = $lado2;
    }

    // Método para obtener el valor del segundo lado
    public function getLado2() {
        return $this->lado2;
    }

    // Método para establecer el valor del segundo lado
    public function setLado2($lado2) {
        $this->lado2 = $lado2;
    }

    // Implementación del método heredado para calcular el área del rectángulo
    public function calcularArea() {
        // Implementación del área para un rectángulo: lado1 * lado2
        return $this->getLado1() * $this->lado2;
    }

    // Implementación del método de la interfaz para calcular el perímetro del rectángulo
    public function calcularPerimetro() {
        // Implementación del perímetro para un rectángulo: 2 * (lado1 + lado2)
        return 2 * ($this->getLado1() + $this->lado2);
    }

    // Implementación del método toString para obtener una representación en cadena
    public function toString() {
        return "Figura de tipo {$this->getTipoFigura()}. Lado 1 = {$this->getLado1()}, Lado 2 = {$this->lado2}";
    }
}

?>