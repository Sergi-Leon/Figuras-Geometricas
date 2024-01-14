<?php

// Definición de una clase abstracta FiguraGeometrica
abstract class FiguraGeometrica {
    // Propiedades protegidas para el tipo de figura y el primer lado
    protected $tipoFigura;
    protected $lado1;

    // Constructor de la clase que recibe el tipo de figura y el primer lado
    public function __construct($tipoFigura, $lado1) {
        $this->tipoFigura = $tipoFigura;
        $this->lado1 = $lado1;
    }

    // Destructor de la clase 
    public function __destruct() {
        
    }

    // Método abstracto para calcular el área
    abstract public function calcularArea();

    // Método para obtener el tipo de figura
    public function getTipoFigura() {
        return $this->tipoFigura;
    }

    // Método para establecer el tipo de figura
    public function setTipoFigura($tipoFigura) {
        $this->tipoFigura = $tipoFigura;
    }

    // Método para obtener el valor del primer lado
    public function getLado1() {
        return $this->lado1;
    }

    // Método para establecer el valor del primer lado
    public function setLado1($lado1) {
        $this->lado1 = $lado1;
    }
}

?>