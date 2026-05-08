<?php

include 'conect2.php';


$sql = "select * from chamados";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
        echo " - Título: " .$row["titulo"] . "<br>";
        echo " - Descrição: " .$row["descricao"] . "<br>";
        echo " - Prioridade: " .$row["prioridade"] . "<br>";
        echo " - Status: " .$row["status"] ."<br>";
        echo "<a href='editar.php?id=" .$row["titulo"]. "'>Editar</a> | ";
        echo "<a href='excluir.php?id=" .$row["titulo"]. "'>Excluir</a> | ";
        echo "<br>";
    }
}else {
    echo "Nenhum chamado encontrado";
}
$conn->close();

echo "<a href='index.php'>Voltar</a>";
?>