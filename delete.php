<?php

include "./connection.php";
if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $conn->query("DELETE FROM aulas WHERE id = '$id'");
}

$conn->close();
header("location: read.php");