<?php
class Funcionario {
    public $nome;
    public $cargo;
    public $salario;
    public $dataAdmissao;

    
    public function __construct($nome, $cargo, $salario, $dataAdmissao) {
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;
        $this->dataAdmissao = $dataAdmissao;
    }

    
    public function calcularSalarioAnual() {
        return $this->salario * 12;
    }

    
    public function exibirInfo() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Cargo: " . $this->cargo . "<br>";
        echo "Salário mensal: R$ " . $this->salario . "<br>";
        echo "Data de admissão: " . $this->dataAdmissao . "<br>";
        echo "Salário anual: R$ " . $this->calcularSalarioAnual() . "<br>";
    
    }
}

$func1 = new Funcionario("Ana", "Desenvolvedora", 3000, "01/03/2022");
$func2 = new Funcionario("Carlos", "Designer", 2500, "15/07/2021");


$func1->exibirInfo();
$func2->exibirInfo();
?>