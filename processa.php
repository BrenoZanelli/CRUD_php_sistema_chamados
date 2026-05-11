<?php
include 'conect2.php';

if (isset($_POST['titulo'])) {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $prioridade = $_POST['prioridade'];
    $status = $_POST['status'];

    $sql = "INSERT INTO chamados (titulo, descricao, prioridade, status) 
            VALUES ('$titulo', '$descricao', '$prioridade', '$status')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: lista.php");
    } else {
        echo "Erro: " . $conn->error;
    }
    $conn->close();
}
?>