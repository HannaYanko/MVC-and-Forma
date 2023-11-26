<?php
require __DIR__. '/../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('name');
$log->pushHandler(new StreamHandler('app.log', Logger::WARNING));

$log->warning('Попередження');
$logContents = file_get_contents('app.log');
echo $logContents;
