<?php


$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

if ($senha == "123") {

    if ($usuario == "ana") {
        echo "Bem-vinda Ana! Seu cargo é Administradora.";
    }
    elseif ($usuario == "moara") {
        echo "Bem-vinda Moara! Seu cargo é Gerente.";
    }
    elseif ($usuario == "felipe") {
        echo "Bem-vindo Felipe! Seu cargo é Vendedor.";
    }
    else {
        echo "Usuário não encontrado.";
    }

} else {
    echo "Senha incorreta.";
}

?>