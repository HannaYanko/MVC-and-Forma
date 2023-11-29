<?php
namespace MyForm\ElementForm;

class Button extends ElementForm
{
    public function render()
    {
        return "<button type='button' name='{$this->name}'>{$this->name}</button>" . PHP_EOL;
    }
}
