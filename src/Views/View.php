<?php
namespace src\Views;

class View
{
    public function render($data)
    {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Hello</title>
        </head>
        <body>
        <h1><?php echo is_array($data) ? 'Array' : $data; ?></h1>
        </body>
        </html>
        <?php
    }
}
