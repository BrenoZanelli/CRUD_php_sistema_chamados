<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Chamado - Sistema de Help Desk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow border-0">
                    <div class="card-header bg-primary text-white p-3">
                        <h2 class="mb-0 h4">Abrir Novo Chamado</h2>
                    </div>
                    
                    <div class="card-body p-4">
                        <form action="processa.php" method="post">
                            
                            <div class="mb-3">
                                <label for="titulo" class="form-label fw-bold">1. Título do Problema:</label>
                                <input type="text" class="form-control" name="titulo" placeholder="Ex: Erro ao acessar o sistema" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="descricao" class="form-label fw-bold">2. Descrição Detalhada:</label>
                                <textarea class="form-control" name="descricao" rows="4" placeholder="Descreva o que está acontecendo..."></textarea>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="prioridade" class="form-label fw-bold">3. Prioridade:</label>
                                    <select name="prioridade" class="form-select">
                                        <option value="baixa">Baixa</option>
                                        <option value="media" selected>Média</option>
                                        <option value="alta">Alta</option>
                                    </select>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <label for="status" class="form-label fw-bold">4. Status Inicial:</label>
                                    <select name="status" class="form-select">
                                        <option value="aberto" selected>Aberto</option>
                                        <option value="andamento">Em andamento</option>
                                        <option value="fechado">Fechado</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                                <a href="lista.php" class="btn btn-outline-secondary me-md-2">Ver Lista de Chamados</a>
                                <button type="submit" class="btn btn-primary px-4">Criar Chamado</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
                <p class="text-center text-muted mt-3 small">Sistema de Gerenciamento de Chamados v1.0</p>
            </div>
        </div>
    </div>

</body>
</html>