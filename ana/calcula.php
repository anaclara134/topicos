<?php

$media = $_POST["media"];

if ($media <= 1.7) {
    echo "Você não pode realizar o exame.";
}
elseif ($media >= 7.0) {
    echo "Você está APROVADO!";
}
else {
    $nota_exame = (50 - (6 * $media)) / 4;
    echo "Você precisa tirar $nota_exame no exame para ser aprovado.";
}

?>