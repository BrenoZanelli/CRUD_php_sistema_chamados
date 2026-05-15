<?php
include 'conect2.php';

$sql = "SELECT * FROM chamados";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Chamados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Chamados Cadastrados</h1>
            <a href="index.php" class="btn btn-primary">Novo Chamado</a>
        </div>

        <?php if ($result->num_rows > 0): ?>
            <table class="table table-hover table-bordered bg-white shadow-sm">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Prioridade</th>
                        <th>Status</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['titulo']; ?></td>
                            <td>
                                <?php 
                                    $badget = "bg-secondary";
                                    if($row['prioridade'] == 'alta') $badget = "bg-danger";
                                    if($row['prioridade'] == 'media') $badget = "bg-warning text-dark";
                                ?>
                                <span class="badge <?php echo $badget; ?>">
                                    <?php echo ucfirst($row['prioridade']); ?>
                                </span>
                            </td>
                            <td><?php echo ucfirst($row['status']); ?></td>
                            <td class="text-center">
                                <a href="edicao.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                                <a href="excluir.php?id=<?php echo $row['id']; ?>" 
                                   class="btn btn-danger btn-sm" 
                                   onclick="return confirm('Deseja realmente excluir?')">Excluir</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <div class="alert alert-info shadow-sm">
                Nenhum chamado encontrado. <a href="index.php" class="alert-link">Clique aqui para cadastrar o primeiro.</a>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
<?php $conn->close(); ?>