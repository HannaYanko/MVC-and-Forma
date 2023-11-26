<?php

namespace app\Controllers\Controller;

class Controller

{
    public function action() {
        $model = new app\Models\Model();
        $data = $model->getData();

        include_once(__DIR__ . '/../Views/View.php');
    }

}


