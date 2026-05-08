<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="m-2">
        <h1>FORMULARIO DE CADASTRO</h1>
    </div>

    <form action="processa.php" method="post">
        <div class="mt-5 container-fluid">
            <label for="titulo" class="fw-bold">1- Digite o título:</label><br>
            <input class="m-2" type="text" name="titulo"><br>
        </div>
        
        <div class="mt-2 container-fluid">
            <label for="descricao" class="fw-bold">2- Digite a descrição:</label><br>
            <input class="m-2" type="text" name="descricao"><br>
        </div>
        
        <div class="mt-2 container-fluid">
            <p class="fw-bold">3- Escolha a prioridade:</p>
            <input type="radio" name="prioridade" id="baixa" value="Baixa">
            <label for="baixa" class="m-2">Baixa</label><br>
            <input type="radio" name="prioridade" id="media" value="Média">
            <label for="media" class="m-2">Média</label><br>
            <input type="radio" name="prioridade" id="alta" value="Alta">
            <label for="alta" class="m-2">Alta</label><br>
        </div>
        
        <div class="mt-2 container-fluid">
            <p class="fw-bold">4- Escolha o status:</p>
            <input type="radio" name="status" id="andamento" value="Andamento">
            <label for="andamento" class="m-2">Em andamento</label><br>
            <input type="radio" name="status" id="fechado" value="Fechado">
            <label for="fechado" class="m-2">Fechado</label><br>
            <input type="radio" name="status" id="aberto" value="Aberto">
            <label for="aberto" class="m-2">Aberto</label><br>
            <input type="submit" value="Enviar" class="mt-3 btn btn-primary">
        </div>
        
    </form>
    <br>
    <span class="fw-bold m-2">Clique aqui para acessar a lista de chamados: </span>   
    <a href="lista.php" class="text-decoration-none btn btn-info">Lista de Chamados</a>
</body>
</html>