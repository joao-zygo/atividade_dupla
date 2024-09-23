<?php
include "./connection.php";
if (isset($_POST['create'])) {
    $horario = $_POST['horario'];
    $numero_sala = $_POST['numero_sala'];
    $quantidade_aulas = $_POST['quantidade_aulas'];
    $turma= $_POST['turma'];
    $conteudo_aula = $_POST['conteudo_aula'];

    $sql = "INSERT INTO aulas(horario, numero_sala, quantidade_aulas, turma) VALUES ('$horario', 
    '$numero_sala', '$quantidade_aulas', '$turma')";

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
    numero das salas: <input type="text" name="numero_sala" required><br><br>
    Quantidade de aulas: <input type="number" name="quantidade_aulas" required><br><br>
    turma: <input type="text" name="turma" required><br><br>
<<<<<<< HEAD
    <input type="submit" name="create" value="Adicionar Aulas">
=======
    conteudo da aula: <input type="text" name="conteudo_aula" required><br><br>
    <input type="submit" name="create" value="adicionar aula">
>>>>>>> a29a652cd4ce516dcb53ee3a3aca64ef1a8e28e8
</form>

<h2>Aulas</h2>
<table border="1">
    <tr>
        <th>horario da aula</th>
        <th>Numero da sala</th>
        <th>quantidade de aulas</th>
        <th>turma</th>
        <th>conteudo da aula</th>
       
    </tr>

    <?php while($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $row['horadio_aulas']; ?></td>
        <td><?php echo $row['numero_sala']; ?></td>
        <td><?php echo $row['qauntidade_aulas']; ?></td>
        <td><?php echo $row['turma']; ?></td>
        <td><?php echo $row['conteudo_aula']; ?></td>
        
            
        </td>
    </tr>
    <?php } ?>
</table>



</body>
</html>

<?php $conn->close(); ?>