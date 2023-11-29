<?php
namespace src\Controllers;

use src\Services\FormService;
use src\Views\View;

class FormController {
    private $formService;
    private $view;

    public function __construct(FormService $formService, View $view) {
        $this->formService = $formService;
        $this->view = $view;
    }

    public function showForm() {
        $this->formService->showForm();
    }

    public function processForm() {
        $this->formService->processForm();
    }
}
