<?php

$host = "mysql";
$user = "root";
$password = "root";
$dbname = "sistema_chamados";

$conn = new mysqli('localhost', 'root', '', 'sistema_chamados');

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}