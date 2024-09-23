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

<!DOCTYPE html>
<html>
<head>
    <title>CRUD - Sistema de Pedidos</title>
</head>
<body>

<h2>Adicionar Pedido</h2>
<form method="POST" action="">
    horario das aulas: <input type="text" name="horario_aulas" required><br><br>
    numero das salas: <input type="text" name="numero_sala" required><br><br>
    Quantidade de aulas: <input type="number" name="quantidade_aulas" required><br><br>
    turma: <input type="date" name="turma" required><br><br>
    <input type="submit" name="create" value="Adicionar Pedido">
</form>


</body>
</html>

<?php $conn->close(); ?>