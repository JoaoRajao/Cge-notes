<?php
require_once __DIR__ . '/../Models/Usuarios.php';
require_once __DIR__ . '/../Classes/Conexao.php';

class UsuarioController {
    private $usuarioModel;

    public function __construct() {
        $this->usuarioModel = new Usuarios();
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $usuario = $this->usuarioModel->findByEmail($email);

            if ($usuario && password_verify($senha, $usuario['senha'])) {
                session_start();
                $_SESSION['usuario'] = $usuario['email'];
                $_SESSION['usuario_id'] = $usuario['id'];
                header('Location: dashboard.php');
                exit();
            } else {
                echo 'Email ou senha incorretos.';
            }
        }
        require __DIR__ . '/../Views/usuarios/login.php';
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

            
            if ($this->usuarioModel->findByEmail($email)) {
                echo 'Este e-mail já está registrado.';
                return;
            }

            $conexao = new Conexao();

            $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
            $stmt = $conexao->pdo->prepare($sql);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            if ($stmt->execute()) {
                header('Location: login.php');
                exit();
            } else {
                echo 'Erro ao cadastrar o usuário.';
            }
        }
        require __DIR__ . '/../Views/usuarios/register.php';
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: login.php');
        exit();
    }
}
?>
