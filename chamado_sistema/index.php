<?php
require_once 'config/Database.php';
require_once 'controller/ChamadoController.php';

$db = Database::connect();
$controller = new ChamadoController($db);

$view = $_GET['view'] ?? 'cliente';
$action = $_GET['action'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($action === 'create') $controller->create($_POST);
    if ($action === 'update') $controller->update($_POST);
} elseif ($action === 'delete') {
    $controller->delete($_GET['id']);
}

if ($view === 'cliente') $controller->indexCliente();
else $controller->indexTecnico();
