<?php
namespace src\Models;
use MyForm\ElementForm\Button;
use MyForm\ElementForm\Select;
use MyForm\ElementForm\Text;
use MyForm\Generator;
class Model
{
    public function getData(array $formData)
    {
        return $formData;
    }
}
