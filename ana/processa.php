<?php

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];

echo "nome: $nome <br>";

if ($idade < 18) {
    echo "menor de idade <br>";
    } else {
    echo "maior de idade <br>";
    echo "minha idade é $idade <br>";
    echo "sexo: $sexo <br>";
    echo "endereco: $endereco";

    }

?>