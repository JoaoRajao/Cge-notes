<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard - CGE Notes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">CGE Notes</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="logout.php">Sair</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Dashboard - CGE Notes</h1>
        <div class="row">
            <div class="col-md-6">
                <h2 class="mb-4">Cadastrar Lembrete</h2>
                <form action="dashboard.php" method="post">
                    <input type="hidden" name="action" value="create">
                    <div class="form-group">
                        <label for="titulo">Título:</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" required>
                    </div>
                    <div class="form-group">
                        <label for="conteudo">Conteúdo:</label>
                        <textarea class="form-control" id="conteudo" name="conteudo" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="data_limite">Data Limite:</label>
                        <input type="date" class="form-control" id="data_limite" name="data_limite" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Cadastrar</button>
                </form>
            </div>
            <div class="col-md-6">
                <h2 class="mb-4">Lista de Lembretes</h2>
                <ul class="list-group">
                    <?php foreach ($lembretes as $lembrete): ?>
                        <li class="list-group-item">
                            <h5><?php echo htmlspecialchars($lembrete['titulo']); ?></h5>
                            <p><?php echo htmlspecialchars($lembrete['conteudo']); ?></p>
                            <small class="text-muted">Data Limite: <?php echo htmlspecialchars($lembrete['data_limite']); ?></small><br>
                            <small class="text-muted">Criado em: <?php echo htmlspecialchars($lembrete['created_at']); ?></small>
                            <form action="dashboard.php" method="post" class="d-inline">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="id" value="<?php echo $lembrete['id']; ?>">
                                <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                            </form>
                            <button class="btn btn-warning btn-sm" onclick="editLembrete(<?php echo $lembrete['id']; ?>, '<?php echo htmlspecialchars(addslashes($lembrete['titulo'])); ?>', '<?php echo htmlspecialchars(addslashes($lembrete['conteudo'])); ?>', '<?php echo $lembrete['data_limite']; ?>')">Editar</button>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

    <footer class="footer bg-light py-4 mt-5">
        <div class="container text-center">
            <p class="text-muted small mb-0">&copy; CGE Notes 2023. Todos os direitos reservados.</p>
        </div>
    </footer>

    <!-- Modal Editar -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="dashboard.php" method="post">
                    <input type="hidden" name="action" value="update">
                    <input type="hidden" id="editId" name="id">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Editar Lembrete</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="editTitulo">Título:</label>
                            <input type="text" class="form-control" id="editTitulo" name="titulo" required>
                        </div>
                        <div class="form-group">
                            <label for="editConteudo">Conteúdo:</label>
                            <textarea class="form-control" id="editConteudo" name="conteudo" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="editDataLimite">Data Limite:</label>
                            <input type="date" class="form-control" id="editDataLimite" name="data_limite" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Salvar mudanças</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function editLembrete(id, titulo, conteudo, data_limite) {
            document.getElementById('editId').value = id;
            document.getElementById('editTitulo').value = titulo;
            document.getElementById('editConteudo').value = conteudo;
            document.getElementById('editDataLimite').value = data_limite;
            $('#editModal').modal('show');
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
