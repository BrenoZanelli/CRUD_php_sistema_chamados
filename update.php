<?php
include 'conect2.php';

if (isset($_POST['id'])){

    //pega o id que vem na URL por exemplo edicao.php?id=5 para saber qual chamado pegar
    $id=$_POST['id'];
    $titulo=$_POST['titulo'];
    $descricao = $_POST['descricao'];
    $prioridade=$_POST['prioridade'];
    $status=$_POST['status'];

    $sql= "UPDATE chamados SET 
            titulo='$titulo', 
            descricao='$descricao', 
            prioridade='$prioridade', 
            status='$status' 
            WHERE id=$id";

    if($conn->query($sql)===TRUE){
        header("Location: lista.php?msg=sucesso");
    }else{
        echo "Erro ao atualizar : ".$conn->error;
    }
}
$conn->close();
?>