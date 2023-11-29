<?php
namespace src\Controllers;

use src\Models\Model;
use src\Services\FormService;

class Controller
{
    private $formService;

    public function __construct()
    {
        $this->formService = new FormService();
    }

    public function getData()
    {
        $formData = $this->formService->getDataFromPost();
        $data = $this->formService->processData($formData);
        return $data;
    }

    public function showForm()
    {
        $this->formService->showForm();
    }
}
