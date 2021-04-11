<?php

require_once '../src/Wcs/Hello.php';

$sentence = new Hello();
echo $sentence->talk(). PHP_EOL;


//$ehime = new \HelloWorld\SayHello();

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload
use HelloWorld\SayHello;
echo SayHello::world();