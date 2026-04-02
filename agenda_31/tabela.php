<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contatos</title>
    <link rel="stylesheet" href="tabela.css">
</head>
<body>
    <h2>Lista de contatos</h2>
<a href="index.php" class="btn-voltar">Voltar</a>
    <?php
    include('conexao.php');

    $sql = "SELECT * FROM contatos";
    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        echo "<table class='tabela'>
                <tr>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>";

        while ($linha = mysqli_fetch_assoc($resultado)) {
            echo "<tr>
                    <td>".$linha['nome']."</td>
                    <td>".$linha['endereco']."</td>
                    <td>".$linha['telefone']."</td>
                    <td>
                       <a href='editar.php?id=".$linha['id']."' class='btn editar'>Editar</a>
                       <a href='excluir.php?id=".$linha['id']."' class='btn excluir' onclick='return confirm(\"Deseja realmente excluir?\");'>Excluir</a>
                    </td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "<h3>Nenhum contato encontrado!</h3>";
    }
    ?>
</body>
</html>