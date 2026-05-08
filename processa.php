<?php

include 'conect2.php';

if (isset($_POST['titulo'])){

    $titulo = $_POST['titulo'];

    $sql = "INSERT INTO chamados (titulo) VALUES ('$titulo')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Novo chamado criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}