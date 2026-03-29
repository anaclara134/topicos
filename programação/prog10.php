<?php
class Produto {
    public $nome;
    public $preco;
    public $quantidade;

    
    public function __construct($nome, $preco, $quantidade) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    public function adicionar($qtd) {
        if ($qtd > 0) {
            $this->quantidade += $qtd;
            echo "Adicionados {$qtd} itens ao estoque.<br>";
        } else {
            echo "Quantidade inválida.<br>";
        }
    }

    
    public function remover($qtd) {
        if ($qtd > 0 && $qtd <= $this->quantidade) {
            $this->quantidade -= $qtd;
            echo "Removidos {$qtd} itens do estoque.<br>";
        } else {
            echo "Estoque insuficiente ou valor inválido.<br>";
        }
    }


    public function exibirInfo() {
        echo "Produto: {$this->nome}<br>";
        echo "Preço: R$ {$this->preco}<br>";
        echo "Quantidade em estoque: {$this->quantidade}<br>";
        echo "----------------------<br>";
    }
}


$produto1 = new Produto("Camiseta", 50, 10);
$produto2 = new Produto("Tênis", 200, 5);

$produto1->exibirInfo();
$produto1->adicionar(5);
$produto1->remover(3);
$produto1->exibirInfo();

$produto2->exibirInfo();
?>