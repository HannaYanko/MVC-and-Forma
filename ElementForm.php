<?php
namespace MyForm\ElementForm;

abstract class ElementForm
{
    protected $name;


    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function render();
}
