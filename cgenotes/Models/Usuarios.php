<?php
require_once __DIR__ . '/../Classes/Conexao.php';

class Usuarios {
    private $conexao;

    public function __construct() {
        $this->conexao = new Conexao();
    }

    public function cadastrarUsuario($usuario, $senha) {
        $sql = "INSERT INTO usuarios (usuario, senha) VALUES (:usuario, :senha)";
        $stmt = $this->conexao->pdo->prepare($sql);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':senha', $senha);
        return $stmt->execute();
    }

    public function findByEmail($email) {
        $sql = "SELECT * FROM usuarios WHERE email = :email";
        $stmt = $this->conexao->pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function autenticarUsuario($usuario, $senha) {
        $sql = "SELECT * FROM usuarios WHERE usuario = :usuario AND senha = :senha";
        $stmt = $this->conexao->pdo->prepare($sql);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }
}
?>
