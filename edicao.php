<?php
include'conect2.php';
if (isset($_GET['id'])){

    //pega o id que vem na URL por exemplo edicao.php?id=5 para saber qual chamado pegar
    $id=$_GET['id'];

    $sql="SELECT * FROM chamados WHERE id = $id";
    $result=$conn->query($sql);

    if ($result->num_rows>0){
        $row=$result->fetch_assoc();
    }else {
        echo "Chamado não encontrado.";
        exit;
    }
    }
    ?>

    <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Chamado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-warning text-dark">
                <h2 class="mb-0">Editar Chamado #<?php echo $row['id']; ?></h2>
            </div>
            <div class="card-body">
                <form action="update.php" method="POST">
                    
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                    <div class="mb-3">
                        <label for="titulo" class="form-label fw-bold">Título:</label>
                        <input type="text" name="titulo" class="form-control" value="<?php echo $row['titulo']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="descricao" class="form-label fw-bold">Descrição:</label>
                        <textarea name="descricao" class="form-control" rows="3"><?php echo $row['descricao']; ?></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="prioridade" class="form-label fw-bold">Prioridade:</label>
                            <select name="prioridade" class="form-select">
                                <option value="baixa" <?php echo ($row['prioridade'] == 'baixa') ? 'selected' : ''; ?>>Baixa</option>
                                <option value="media" <?php echo ($row['prioridade'] == 'media') ? 'selected' : ''; ?>>Média</option>
                                <option value="alta" <?php echo ($row['prioridade'] == 'alta') ? 'selected' : ''; ?>>Alta</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="status" class="form-label fw-bold">Status:</label>
                            <select name="status" class="form-select">
                                <option value="aberto" <?php echo ($row['status'] == 'aberto') ? 'selected' : ''; ?>>Aberto</option>
                                <option value="andamento" <?php echo ($row['status'] == 'andamento') ? 'selected' : ''; ?>>Em andamento</option>
                                <option value="fechado" <?php echo ($row['status'] == 'fechado') ? 'selected' : ''; ?>>Fechado</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                        <a href="lista.php" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>