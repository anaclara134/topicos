<?php
class Retangulo {
    public $largura;
    public $altura;

    
    public function __construct($largura, $altura) {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    
    public function calcularArea() {
        return $this->largura * $this->altura;
    }

    
    public function calcularPerimetro() {
        return 2 * ($this->largura + $this->altura);
    }

    
    public function exibirInfo() {
        echo "Largura: {$this->largura}<br>";
        echo "Altura: {$this->altura}<br>";
        echo "Área: " . $this->calcularArea() . "<br>";
        echo "Perímetro: " . $this->calcularPerimetro() . "<br>";
        echo "----------------------<br>";
    }
}


$ret1 = new Retangulo(5, 10);
$ret2 = new Retangulo(7, 3);


$ret1->exibirInfo();
$ret2->exibirInfo();
?>