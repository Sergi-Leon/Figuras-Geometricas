<?php

// Incluye las clases base necesarias
include('figGeometrica.php');
include('perimetro.php');

// Definición de la clase Circulo que hereda de FiguraGeometrica e implementa PerimetroM
class Circulo extends FiguraGeometrica implements PerimetroM {

    // Constructor que llama al constructor de la clase base FiguraGeometrica
    public function __construct($tipoFigura, $radio) {
        parent::__construct($tipoFigura, $radio);
    }

    // Método para obtener el radio del círculo (igual al lado1 de la clase base)
    public function getRadio() {
        return $this->getLado1();
    }

    // Método para establecer el radio del círculo (igual al lado1 de la clase base)
    public function setRadio($radio) {
        $this->setLado1($radio);
    }

    // Implementación del método heredado para calcular el área del círculo
    public function calcularArea() {
        // Implementación del área para un círculo (ejemplo, puedes cambiarla según tu fórmula)
        return pi() * pow($this->getRadio(), 2);
    }

    // Implementación del método de la interfaz para calcular el perímetro del círculo
    public function calcularPerimetro() {
        // Implementación del perímetro para un círculo
        return 2 * pi() * $this->getRadio();
    }

    // Implementación del método toString para obtener una representación en cadena
    public function toString() {
        return "Figura de tipo {$this->getTipoFigura()}. Radio = {$this->getRadio()}";
    }
}

?>