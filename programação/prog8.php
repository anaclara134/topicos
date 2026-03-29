<?php
class Circulo {
    public $raio;

    public function __construct($raio) {
        $this->raio = $raio;
    }

    
    public function calcularArea() {
        return pi() * pow($this->raio, 2);
    }

    
    public function calcularPerimetro() {
        return 2 * pi() * $this->raio;
    }

    
    public function exibirInfo() {
        echo "Raio: {$this->raio}<br>";
        echo "Área: " . $this->calcularArea() . "<br>";
        echo "Perímetro: " . $this->calcularPerimetro() . "<br>";
        echo "----------------------<br>";
    }
}


$circulo1 = new Circulo(5);
$circulo2 = new Circulo(3);


$circulo1->exibirInfo();
$circulo2->exibirInfo();
?>