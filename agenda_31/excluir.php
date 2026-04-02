<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Excluir</title>
    <link rel="stylesheet" href="excluir.css">
</head>
<body>

<?php
include('conexao.php');

$id = $_GET['id'];


$sql = "DELETE FROM contatos WHERE id = $id";

echo "<div class='forms'>"; 

if (mysqli_query($conexao, $sql)) {
    echo "<h2>Contato excluído com sucesso</h2><br>";
    echo "<a href='tabela.php'>VOLTAR</a>";
} else {
    echo "<h2>Erro ao excluir contato</h2>" . mysqli_error($conexao);
    echo "<a href='tabela.php'>VOLTAR</a>";
}

echo "</div>"; 

?>
</body>
</html>