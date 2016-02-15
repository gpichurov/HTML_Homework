<?php

require_once 'autoload.php';

$a = [
    new Vehicle('Toyota'),
    new Vehicle('Mazda'),
    new Vehicle('Honda'),
    new Vehicle('Suzuki')
];

foreach ($a as $key => $value){
    $value->setDescription($value->getDescription() . ' - ' . $key);
    echo $value->getDescription(), PHP_EOL;
}