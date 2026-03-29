<?php
class Pessoa {
    public $nome;
    public $dataNascimento;
    public $genero;

    
    public function __construct($nome, $dataNascimento, $genero) {
        $this->nome = $nome;
        $this->dataNascimento = $dataNascimento;
        $this->genero = $genero;
    }

    
    public function calcularIdade() {
        $dataNasc = new DateTime($this->dataNascimento);
        $hoje = new DateTime();
        $diferenca = $hoje->diff($dataNasc);

        return $diferenca->y . " anos, " . 
               $diferenca->m . " meses e " . 
               $diferenca->d . " dias";
    }

    
    public function exibirInfo() {
        echo "Nome: {$this->nome}<br>";
        echo "Gênero: {$this->genero}<br>";
        echo "Data de nascimento: {$this->dataNascimento}<br>";
        echo "Idade: " . $this->calcularIdade() . "<br>";
        echo "----------------------<br>";
    }
}


$pessoa1 = new Pessoa("Ana", "2009-05-10", "Feminino");
$pessoa2 = new Pessoa("Carlos", "2000-08-20", "Masculino");


$pessoa1->exibirInfo();
$pessoa2->exibirInfo();
?>