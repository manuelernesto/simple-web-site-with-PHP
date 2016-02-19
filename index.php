<?php
/**
 * Created by PhpStorm.
 * User: manuelernesto
 * Date: 2/19/16
 * Time: 12:15 PM
 */


require __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('name');
$log->pushHandler(new StreamHandler('app.txt', Logger::WARNING));
$log->addWarning('Foo');


echo 'hello world';