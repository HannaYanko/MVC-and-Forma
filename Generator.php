<?php
namespace MyForm;

use MyForm\ElementForm\ElementForm;

class Generator
{
    private $elements = [];

    public function addElement(ElementForm $element)
    {
        $this->elements[] = $element;
    }

    public function generateForm()
    {
        echo implode(PHP_EOL, array_map(function ($element) {
            return $element->render();
        }, $this->elements));
    }
}


