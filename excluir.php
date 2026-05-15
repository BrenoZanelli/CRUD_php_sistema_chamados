<?php
include 'conect2.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];
    
    //usando o id que foi pego igual na pagina edicao/update e usa ele para realizar a exclusão
    $sql="DELETE FROM chamados WHERE id =  $id";

    if ($conn->query($sql)===TRUE){
        header("Location: lista.php");
    }else{
        echo "Erro ao excluir: ". $conn->error;
    }
}
$conn->close();
?>