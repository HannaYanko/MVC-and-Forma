<?php
namespace src\Controllers;

use src\Models\Model;

use MyForm\ElementForm\Button;
use MyForm\ElementForm\Select;
use MyForm\ElementForm\Text;
use MyForm\Generator;

class Controller
{
    public function getData()
    {
        $model = new Model();
        $formController = new FormController();
        $formData = $formController->getDataFromPost();
        $data = $model->getData($formData);
        return $data;
    }

    public function showForm()
    {
        $formController = new FormController();
        $formController->showForm();
    }
}
