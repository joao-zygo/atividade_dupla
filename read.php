<?php
    include "./connection.php";
    $response = $sql->query("SELECT * FROM aulas");
    $aulas = array();

    while($row = $response->fetch_assoc()) {
        array_push($aulas, $row);
    }

    $sql->close();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
</head>
<body>
    <?php foreach ($aulas as $aula): ?>
    <div>
        <p>Horario: <?= $aula["horario"]?> </p>
        <p>Numero da Sala: <?= $aula["numero"]?> </p>
        <p>Quantidade de Aulas: <?= $aula["quantidade"]?> </p>
        <p>Turma: <?= $aula["turma"]?> </p>
        <a href="update.php?id=<?= $aula["id"]?>">Alterar</a>
        <a href="delete.php?id=<?= $aula["id"]?>">Deletar</a>
    </div>
    <hr>
    <?php endforeach ?>
</body>
</html>

