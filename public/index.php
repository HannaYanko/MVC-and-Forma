<?php
require __DIR__ . '/../vendor/autoload.php';

use src\Controllers\Controller;
use src\Views\View;
use src\Services\FormService;

$view = new View();
$controller = new Controller(new FormService(), $view);

if (isset($_GET['action']) and $_GET['action'] === 'showForm') {
$controller->showForm();
} else {
$data = $controller->getData();
$view->render($data);
}