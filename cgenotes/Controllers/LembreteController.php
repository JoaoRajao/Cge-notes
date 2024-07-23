<?php
require_once __DIR__ . '/../Models/Lembrete.php';

class LembreteController {
    private $lembreteModel;

    public function __construct() {
        $this->lembreteModel = new Lembrete();
    }

    public function index() {
        session_start();
        if (!isset($_SESSION['usuario_id'])) {
            header('Location: login.php');
            exit();
        }
        $usuario_id = $_SESSION['usuario_id'];
        $lembretes = $this->lembreteModel->findAllByUserId($usuario_id);
        require __DIR__ . '/../Views/lembretes/index.php';
    }

    public function create() {
        session_start();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario_id = $_SESSION['usuario_id'];
            $titulo = $_POST['titulo'];
            $conteudo = $_POST['conteudo'];
            $data_limite = $_POST['data_limite'];

            $this->lembreteModel->create($titulo, $conteudo, $data_limite, $usuario_id);
            header('Location: dashboard.php');
            exit();
        }
        require __DIR__ . '/../Views/lembretes/create.php';
    }

    public function edit($id) {
        session_start();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario_id = $_SESSION['usuario_id'];
            $titulo = $_POST['titulo'];
            $conteudo = $_POST['conteudo'];
            $data_limite = $_POST['data_limite'];

            $this->lembreteModel->update($id, $titulo, $conteudo, $data_limite, $usuario_id);
            header('Location: dashboard.php');
            exit();
        }
        $lembrete = $this->lembreteModel->find($id);
        require __DIR__ . '/../Views/lembretes/edit.php';
    }

    public function delete($id) {
        session_start();
        $usuario_id = $_SESSION['usuario_id'];
        $this->lembreteModel->delete($id, $usuario_id);
        header('Location: dashboard.php');
        exit();
    }
}
?>
