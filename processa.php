<?php
include 'conect2.php';

//if para capturar os valores enviados pelo formulario em forma post e atribui para variaveis
if (isset($_POST['titulo'])) {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $prioridade = $_POST['prioridade'];
    $status = $_POST['status'];

    //comando SQL para criar uma nova linha com os valores capturados pelas variáveis
    $sql = "INSERT INTO chamados (titulo, descricao, prioridade, status) 
            VALUES ('$titulo', '$descricao', '$prioridade', '$status')";
    

    //se o comando SQL funcionar, redireciona o usuario automaticamente para a pagina de lista dos chamados
    if ($conn->query($sql) === TRUE) {
        header("Location: lista.php");
    } else {
        echo "Erro: " . $conn->error;
    }
    $conn->close();
}
?>