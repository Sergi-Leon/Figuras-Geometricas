<?php

// Incluye las clases base necesarias
include('figGeometrica.php');
include('perimetro.php');

// Definición de la clase Cuadrado que hereda de FiguraGeometrica e implementa PerimetroM
class Cuadrado extends FiguraGeometrica implements PerimetroM {

    // Constructor que llama al constructor de la clase base FiguraGeometrica
    public function __construct($tipoFigura, $lado) {
        parent::__construct($tipoFigura, $lado);
    }

    // Método para obtener el lado del cuadrado (igual al lado1 de la clase base)
    public function getLado() {
        return $this->getLado1();
    }

    // Método para establecer el lado del cuadrado (igual al lado1 de la clase base)
    public function setLado($lado) {
        $this->setLado1($lado);
    }

    // Implementación del método para calcular el área del cuadrado
    public function calcularArea() {
        // Implementación del área para un cuadrado: lado^2
        return pow($this->getLado1(), 2);
    }

    // Implementación del método para calcular el perímetro del cuadrado
    public function calcularPerimetro() {
        // Implementación del perímetro para un cuadrado: 4 * lado
        return 4 * $this->getLado1();
    }

    // Implementación del método toString para obtener una representación en cadena
    public function toString() {
        return "Figura de tipo {$this->getTipoFigura()}. Lado = {$this->getLado1()}";
    }
}

?>
