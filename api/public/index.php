<?php

require '../vendor/autoload.php';

$request = new \Aston\Http\Request();
$response = new \Aston\Http\Response();

$route = new \Aston\Http\Route('contact','/contact', ['GET', 'POST']);
var_dump($route->hasMethod('GET'));

// http://api.aston.com/blog/artciles/12
$route = new \Aston\Http\Route('article','/blog/articles/[0-9]{0, 5}');

