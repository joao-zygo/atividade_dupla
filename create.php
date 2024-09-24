<?php
include "./connection.php";
if (isset($_POST['create'])) {
    $horario = $_POST['horario'];
    $numero_sala = $_POST['numero_sala'];
    $quantidade_aulas = $_POST['quantidade_aulas'];
    $turma = $_POST['turma'];
    $conteudo_aula = $_POST['conteudo_aula'];
    $materia = $_POST['materia'];

    $sql = "INSERT INTO aulas(horario, numero_sala, quantidade_aulas, turma, conteudo_aula, materia) VALUES ('$horario', 
    '$numero_sala', '$quantidade_aulas', '$turma', '$conteudo_aula', '$materia')";

    if ($conn->query($sql) === TRUE) {
        echo "Aulas";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD - aulas</title>
</head>
<body>

<h2>aulas</h2>
<form method="POST" action="">
    horario das aulas: <input type="time" name="horario" required><br><br>
    numero das salas: <input type="number" name="numero_sala" required><br><br>
    Quantidade de aulas: <input type="number" name="quantidade_aulas" required><br><br>
    turma: <input type="text" name="turma" required><br><br>
    conteudo da aula: <input type="text" name="conteudo_aula" required><br><br>
    Matéria: <input type="text" name="materia" required><br><br>
    <input type="submit" name="create" value="adicionar aula">
</form>

</body>
</html>

<?php $conn->close() ?>