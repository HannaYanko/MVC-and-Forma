<?php
namespace src\Controllers;

use MyForm\Generator;
use MyForm\ElementForm\Button;
use MyForm\ElementForm\Select;
use MyForm\ElementForm\Text;
use src\Models\Model;

class FormController
{
    public function showForm()
    {
        $generator = new Generator();

        $generator->addElement(new \MyForm\ElementForm\Button('Натиснути'));
        $generator->addElement(new \MyForm\ElementForm\Select('Вибір', ['Вибір 1', 'Вибір 2', 'Вибір 3']));
        $generator->addElement(new \MyForm\ElementForm\Text('Назва'));

        $generator->generateForm();
    }

    public function processForm()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $model = new \src\Models\Model();
            $formData = $this->getDataFromPost();

            $processedData = $model->getData($formData);

            echo "<h1>Інформація:</h1>";
            print_r($processedData);
        } else {
            $this->showForm();
        }
    }

    public function getDataFromPost()
    {
        return $_POST;
    }
}