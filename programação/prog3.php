<?php
class Carro {
    public $marca;
    public $modelo;
    public $ano;
    public $cor;
    public $velocidadeMaxima;
    public $velocidadeAtual = 0;

    
    public function __construct($marca, $modelo, $ano, $cor, $velocidadeMaxima) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->cor = $cor;
        $this->velocidadeMaxima = $velocidadeMaxima;
    }

    
    public function acelerar($valor) {
        $this->velocidadeAtual += $valor;

        if ($this->velocidadeAtual > $this->velocidadeMaxima) {
            $this->velocidadeAtual = $this->velocidadeMaxima;
        }

        echo "Acelerando... Velocidade atual: {$this->velocidadeAtual} km/h<br>";
    }

    
    public function frear($valor) {
        $this->velocidadeAtual -= $valor;

        if ($this->velocidadeAtual < 0) {
            $this->velocidadeAtual = 0;
        }

        echo "Freando... Velocidade atual: {$this->velocidadeAtual} km/h<br>";
    }


    public function exibirInfo() {
        echo "Marca: {$this->marca}<br>";
        echo "Modelo: {$this->modelo}<br>";
        echo "Ano: {$this->ano}<br>";
        echo "Cor: {$this->cor}<br>";
        echo "Velocidade máxima: {$this->velocidadeMaxima} km/h<br>";

    }
}

$carro1 = new Carro("Toyota", "Corolla", 2020, "Prata", 180);

$carro1->exibirInfo();


$carro1->acelerar(50);
$carro1->acelerar(200); 
$carro1->frear(30);
$carro1->frear(50); 
?>