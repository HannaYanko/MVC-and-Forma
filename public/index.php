<?php
require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;


$log = new Logger('name');
$log->pushHandler(new StreamHandler('path/to/your/log/file.log', Logger::WARNING));


$log->warning('Попередження');



