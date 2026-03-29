<?php
class Livro {
    public $titulo;
    public $autor;
    public $paginas;
    public $ano;

    
    public function __construct($titulo, $autor, $paginas, $ano) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
        $this->ano = $ano;
    }


    public function exibirInfo() {
        echo "Título: " . $this->titulo . "<br>";
        echo "Autor: " . $this->autor . "<br>";
        echo "Páginas: " . $this->paginas . "<br>";
        echo "Ano: " . $this->ano . "<br>";
        
    }
}


$livro1 = new Livro("Dom Casmurro", "Machado de Assis", 256, 1899);
$livro2 = new Livro("Harry Potter", "J.K. Rowling", 320, 1997);


$livro1->exibirInfo();
$livro2->exibirInfo();
?>