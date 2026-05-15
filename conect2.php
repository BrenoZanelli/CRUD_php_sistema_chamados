<?php

//importar os valores das variaveis de configuração
include 'config.php';

//para criar uma nova instancia de classe mysqli e abrir a conexão com o banco
$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);

//verificar se houve erro com a conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}