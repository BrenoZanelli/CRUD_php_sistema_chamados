<?php

include 'config.php';

$conn = new mysqli('localhost', 'root', '', 'sistema_chamados');

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}