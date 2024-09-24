<?php 
include "./connection.php";

$id = $_GET['id'];
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Atualizar'])){
        
        
        $horario = $_POST['horario'];
        $numero_sala = $_POST['numero_sala'];
        $quantidade_aulas = $_POST['quantidade_aulas'];
        $turma= $_POST['turma'];
        $conteudo_aula = $_POST['conteudo_aula'];
        $materia = $_POST['materia'];
        $sql = "UPDATE aulas SET horario='$horario', numero_sala='$numero_sala', quantidade_aulas=$quantidade_aulas, turma='$turma',conteudo_aula='$conteudo_aula',materia='$materia' WHERE id='$id'";
        
        if ($conn->query($sql) === TRUE) {
            echo "Pedido atualizado com sucesso";
        } else {
            echo "Error updating record: ". $conn->error;
        }
    }
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h2>Uptade</h2>        
    <?php if ($id != null):?> 
     <form method="POST" action ="">
        
        horario das aulas: <input type="time" name="horario" required><br><br>
        numero das salas: <input type="number" name="numero_sala" required><br><br>
        Quantidade de aulas: <input type="number" name="quantidade_aulas" required><br><br>
        turma: <input type="text" name="turma" required><br><br>
        conteudo da aula: <input type="text" name="conteudo_aula" required><br><br>
        Matéria: <input type="text" name="materia" required><br><br>
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input type="submit" name= "Atualizar"value="Atualizar">
    </form>
    <?php endif;?>
    </body>
    </html>