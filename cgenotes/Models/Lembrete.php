<?php
require_once __DIR__ . '/../Classes/Conexao.php';

class Lembrete {
    private $conexao;

    public function __construct() {
        $this->conexao = new Conexao();
    }

    public function create($titulo, $conteudo, $data_limite, $usuario_id) {
        $sql = "INSERT INTO lembretes (titulo, conteudo, data_limite, usuario_id) VALUES (:titulo, :conteudo, :data_limite, :usuario_id)";
        $stmt = $this->conexao->pdo->prepare($sql);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':conteudo', $conteudo);
        $stmt->bindParam(':data_limite', $data_limite);
        $stmt->bindParam(':usuario_id', $usuario_id);
        return $stmt->execute();
    }

    public function findAllByUserId($usuario_id) {
        $sql = "SELECT * FROM lembretes WHERE usuario_id = :usuario_id";
        $stmt = $this->conexao->pdo->prepare($sql);
        $stmt->bindParam(':usuario_id', $usuario_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $sql = "SELECT * FROM lembretes WHERE id = :id";
        $stmt = $this->conexao->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $titulo, $conteudo, $data_limite, $usuario_id) {
        $sql = "UPDATE lembretes SET titulo = :titulo, conteudo = :conteudo, data_limite = :data_limite WHERE id = :id AND usuario_id = :usuario_id";
        $stmt = $this->conexao->pdo->prepare($sql);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':conteudo', $conteudo);
        $stmt->bindParam(':data_limite', $data_limite);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':usuario_id', $usuario_id);
        return $stmt->execute();
    }

    public function delete($id, $usuario_id) {
        $sql = "DELETE FROM lembretes WHERE id = :id AND usuario_id = :usuario_id";
        $stmt = $this->conexao->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':usuario_id', $usuario_id);
        return $stmt->execute();
    }
}
?>
