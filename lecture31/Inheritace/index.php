<?php

ini_set('display_errors', 'On');
ini_set('error_reporting', E_ALL |E_STRICT);

require_once 'autoload.php';

/* $rectangle = new Rectangle(200, 100, 'images/rectangle.png');
$rectangle->resize(400, 150);
echo $rectangle->display(); */

$square = new Square(200, 'images/square.jpg');
$square->resize(300);
echo $square->display();