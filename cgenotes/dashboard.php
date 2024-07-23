<?php
require_once __DIR__ . '/Controllers/LembreteController.php';

$controller = new LembreteController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];
    $id = $_POST['id'] ?? null;

    switch ($action) {
        case 'create':
            $controller->create();
            break;
        case 'update':
            $controller->edit($id);
            break;
        case 'delete':
            $controller->delete($id);
            break;
    }
} else {
    $controller->index();
}
?>


