<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Cadastro de Usuários</title>
    <link rel="stylesheet" href="/cgenotes/assets/css/master.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="/cgenotes/assets/favicon1.ico" />
</head>
<body>
    <div id="wapper">
        <div class="auth-background"></div>
        <div class="panel-auth">
            <h2 style="color: blue;">CGE Notes</h2>
            <form action="register.php" method="post">
                <label for="nome">Nome:</label>
                <div class="input-group">
                    <i class="fa fa-user"></i><input type="text" name="nome" placeholder="Nome" required>
                </div>
                <label for="email">Email:</label>
                <div class="input-group">
                    <i class="fa fa-envelope"></i><input type="email" name="email" placeholder="E-mail" required>
                </div>
                <label for="senha">Senha:</label>
                <div class="input-group">
                    <i class="fa fa-unlock"></i><input type="password" name="senha" placeholder="Digite sua senha" required>
                </div>
                <button type="submit" class="button" name="registrar">Cadastrar</button>
            </form>
            <?php if (isset($error) && $error): ?>
                <p style="color: red;"><?php echo $error; ?></p>
            <?php endif; ?>
        </div>
        <div class="content">
            <article class="message">
                <p> Não é só um sistema </p>
                <h4 style="font-family: Verdana, Geneva, Tahoma, sans-serif;">
                    É a <span style="color: blue;">CGE Notes</span> no controle das suas anotações!
                </h4>
            </article>
        </div>
    </div>
</body>
</html>
