<?php
class Aluno {
    public $nome;
    public $matricula;
    public $notas = [];
    public $media;
    public $situacao;

    
    public function __construct($nome, $matricula, $notas) {
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->notas = $notas;
    }

    
    public function calcularMedia() {
        $soma = array_sum($this->notas);
        $quantidade = count($this->notas);
        $this->media = $soma / $quantidade;
    }

    
    public function verificarSituacao() {
        if ($this->media >= 7) {
            $this->situacao = "Aprovado";
        } else {
            $this->situacao = "Reprovado";
        }
    }

    
    public function exibirInfo() {
        echo "Nome: {$this->nome}<br>";
        echo "Matrícula: {$this->matricula}<br>";
        echo "Notas: " . implode(", ", $this->notas) . "<br>";
        echo "Média: {$this->media}<br>";
        echo "Situação: {$this->situacao}<br>";

    }
}


$aluno1 = new Aluno("Ana", "12345", [8, 7, 9]);
$aluno2 = new Aluno("João", "67890", [5, 6, 4]);

$aluno1->calcularMedia();
$aluno1->verificarSituacao();
$aluno1->exibirInfo();

$aluno2->calcularMedia();
$aluno2->verificarSituacao();
$aluno2->exibirInfo();
?>