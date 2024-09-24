<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "aulas";

$sql = new mysqli($servername, $username, $password, $dbname);

if ($sql->connect_error) {
    die("Falha na conexão: " . $sql->connect_error);
}