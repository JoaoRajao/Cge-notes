<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Editar Lembrete - CGE Notes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Editar Lembrete - CGE Notes</h1>
        <form action="dashboard.php" method="post">
            <input type="hidden" name="action" value="update">
            <input type="hidden" id="editId" name="id" value="<?php echo $lembrete['id']; ?>">
            <div class="form-group">
                <label for="editTitulo">Título:</label>
                <input type="text" class="form-control" id="editTitulo" name="titulo" value="<?php echo htmlspecialchars($lembrete['titulo']); ?>" required>
            </div>
            <div class="form-group">
                <label for="editConteudo">Conteúdo:</label>
                <textarea class="form-control" id="editConteudo" name="conteudo" rows="3" required><?php echo htmlspecialchars($lembrete['conteudo']); ?></textarea>
            </div>
            <div class="form-group">
                <label for="editDataLimite">Data Limite:</label>
                <input type="date" class="form-control" id="editDataLimite" name="data_limite" value="<?php echo $lembrete['data_limite']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Salvar mudanças</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
