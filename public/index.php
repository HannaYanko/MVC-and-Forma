<?php
require __DIR__ . '/../vendor/autoload.php';

use src\Controllers\Controller;

if (isset($_GET['action']) and $_GET['action'] === 'showForm') {
    $controller = new Controller();
    $controller->showForm();
} else {
    $controller = new Controller();
    $controller->getData();
}
