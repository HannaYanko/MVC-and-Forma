<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
</head>
<body>
<h1><?php


    $controller = new Controller();
    $data = $controller->getData();

    echo $data->getData();
    ?></h1>
</body>
</html>
