<?php

include('figGeometrica.php');
class Triangulo extends FiguraGeometrica{
    protected $lado2;

    public function __construct($lado1, $lado2) {
        parent::__construct("Triangulo", $lado1);
        $this->lado2 = $lado2;
    }

    public function getLado2() {
        return $this->lado2;
    }

    public function setLado2($lado2) {
        $this->lado2 = $lado2;
    }
    public function calcularPitagoras() {
        // Teorema de Pitágoras: a^2 + b^2 = c^2
        return sqrt($this->getLado1()**2 + $this->lado2**2);
    }
    private function calcularAltura() {
        // Utilizando la fórmula de Herón para calcular el semiperímetro
        $s = ($this->getLado1() + $this->lado2 + $this->getLado2()) / 2;
    
        // Calculando la altura utilizando la fórmula de Herón
        $altura = (2 / $this->getLado1()) * sqrt($s * ($s - $this->getLado1()) * ($s - $this->lado2) * ($s - $this->getLado2()));
        
        return $altura;
    }
    
    public function area() {
        // Fórmula de área del triángulo: base * altura / 2
        $altura = $this->calcularAltura();
        return ($this->getLado1() * $altura) / 2;
    }

    public function perimetro() {
        // Implementa el cálculo del perímetro para un triángulo
        return $this->getLado1() + $this->lado2 + $this->getLado2();
    }
}
$triangulo = new Triangulo(6, 2);
// Muestra información sobre el triángulo
echo "Tipo de figura: " . $triangulo->getTipoFigura() . "<br>";
echo "Lado1: " . $triangulo->getLado1() . "<br>";
echo "Lado2: " . $triangulo->getLado2() . "<br>";
echo "Área: " . $triangulo->area() . "<br>";
echo "Perímetro: " . $triangulo->perimetro() . "<br>";

// Verifica si el triángulo es rectángulo
if ($triangulo->getLado1()**2 + $triangulo->getLado2()**2 === $triangulo->calcularPitagoras()**2) {
    echo "El triángulo es rectángulo según el teorema de Pitágoras.<br>";
} else {
    echo "El triángulo no es rectángulo según el teorema de Pitágoras.<br>";
}

?>
