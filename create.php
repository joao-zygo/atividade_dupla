<?php

if (isset($_POST['create'])) {
    $horario_aulas = $_POST['horario_aulas'];
    $numero_sala = $_POST['numero_sala'];
    $quantidade_aulas = $_POST['quantidade_aulas'];
    $turma= $_POST['turma'];

    $sql = "INSERT INTO pedidos (horario_aulas, numero_sala, quantidade, turma) VALUES ('$horario_aulas', 
    '$numero_sala', '$quantidade', '$turma')";

    if ($conn->query($sql) === TRUE) {
        echo "nova informação";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

?>