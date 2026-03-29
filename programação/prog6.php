<?php
class ContaBancaria {
    public $titular;
    public $numero;
    public $saldo;

    
    public function __construct($titular, $numero, $saldo = 0) {
        $this->titular = $titular;
        $this->numero = $numero;
        $this->saldo = $saldo;
    }

    
    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
            echo "Depósito de R$ {$valor} realizado.<br>";
        } else {
            echo "Valor inválido para depósito.<br>";
        }
    }

    
    public function sacar($valor) {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo "Saque de R$ {$valor} realizado.<br>";
        } else {
            echo "Saldo insuficiente ou valor inválido.<br>";
        }
    }

    
    public function exibirSaldo() {
        echo "Titular: {$this->titular}<br>";
        echo "Conta: {$this->numero}<br>";
        echo "Saldo: R$ {$this->saldo}<br>";
        echo "----------------------<br>";
    }
}


$conta1 = new ContaBancaria("Ana", "12345-6", 1000);


$conta1->exibirSaldo();
$conta1->depositar(500);
$conta1->sacar(300);
$conta1->exibirSaldo();
?>