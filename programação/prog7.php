<?php
class Triangulo {
    public $base;
    public $altura;
    public $lado1;
    public $lado2;
    public $lado3;

    
    public function __construct($base, $altura, $lado1, $lado2, $lado3) {
        $this->base = $base;
        $this->altura = $altura;
        $this->lado1 = $lado1;
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
    }

    
    public function calcularArea() {
        return ($this->base * $this->altura) / 2;
    }

    
    public function tipoTriangulo() {
        if ($this->lado1 == $this->lado2 && $this->lado2 == $this->lado3) {
            return "Equilátero";
        } elseif ($this->lado1 == $this->lado2 || 
                  $this->lado1 == $this->lado3 || 
                  $this->lado2 == $this->lado3) {
            return "Isósceles";
        } else {
            return "Escaleno";
        }
    }

    
    public function exibirInfo() {
        echo "Base: {$this->base}<br>";
        echo "Altura: {$this->altura}<br>";
        echo "Área: " . $this->calcularArea() . "<br>";
        echo "Tipo: " . $this->tipoTriangulo() . "<br>";
        echo "----------------------<br>";
    }
}


$tri1 = new Triangulo(10, 5, 6, 6, 6); // equilátero
$tri2 = new Triangulo(8, 4, 5, 5, 8);  // isósceles
$tri3 = new Triangulo(6, 3, 4, 5, 6);  // escaleno

$tri1->exibirInfo();
$tri2->exibirInfo();
$tri3->exibirInfo();
?>