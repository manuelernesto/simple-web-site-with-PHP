<?php
/**
 * Created by PhpStorm.
 * User: manuelernesto
 * Date: 2/19/16
 * Time: 12:15 PM
 */


require __DIR__ . '/vendor/autoload.php';


$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.txt', Monolog\Logger::WARNING));
$log->addWarning('Foo');


echo 'hello world';