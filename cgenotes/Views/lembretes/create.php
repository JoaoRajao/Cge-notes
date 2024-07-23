<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cadastrar Lembrete - CGE Notes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Cadastrar Lembrete - CGE Notes</h1>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
