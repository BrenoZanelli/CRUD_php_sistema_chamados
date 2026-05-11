<?php
include 'conect2.php';

if (isset($_POST['id'])){
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