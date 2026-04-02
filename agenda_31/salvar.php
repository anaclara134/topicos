
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>salvar</title>
    <link rel="stylesheet" href="salvar.css">
</head>
<body>
<?php



include('conexao.php');

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$fone = $_POST['fone'];

$sql = "INSERT INTO contatos (nome, endereco, telefone) 
         VALUES ('$nome', '$endereco', '$fone')";

if (mysqli_query($conexao, $sql)) {
    echo "<h2>Cadastro realizado com sucesso!</h2><br>"; 
    echo "<a href='index.php'>VOLTAR</a>";
} else {
   echo "<h2>Erro ao salvar o contato: " . mysqli_error($conexao) . "</h2>";
    echo "<a href='index.php'>VOLTAR</a>";
}

?>
</body>
</html>