<?php
namespace MyForm\ElementForm;

class Select extends ElementForm
{
    private $options;

    public function __construct($name, $options)
    {
        parent::__construct($name);
        $this->options = $options;
    }

    public function render()
    {
        $i = "<select name='{$this->name}'>";
        foreach ($this->options as $option) {
            $i .= "<option value='$option'>$option</option>";
        }
        $i .= "</select>" . PHP_EOL;
        return $i;
    }
}
