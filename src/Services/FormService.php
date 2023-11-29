<?php
namespace src\Services;

use src\Models\Model;
use MyForm\Generator;

class FormService
{
    public function showForm()
    {
        $generator = new Generator();

        $generator->addElement(new \MyForm\ElementForm\Button('Натиснути'));
        $generator->addElement(new \MyForm\ElementForm\Select('Вибір', ['Вибір 1', 'Вибір 2', 'Вибір 3']));
        $generator->addElement(new \MyForm\ElementForm\Text('Назва'));

        $generator->generateForm();

    }

    public function processData(array $formData)
    {
        $model = new Model();
        return $model->getData($formData);
    }

    public function getDataFromPost()
    {
        return $_POST;
    }
}
