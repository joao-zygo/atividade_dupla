
<?php

include "./connection.php";
if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $conn->query("DELETE FROM aulas WHERE id = '$id'");
}

$sql->close();
header("location: read.php");