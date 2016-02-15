<?php

require_once 'autoload.php';

//$car3 = new Car('VW', false, 'yellow');
//print_r($car3);

$car4 = new Car('Lada', true, 'black', 400, 333);
print_r($car4);

$owner4 = new Person('Mitko', 1235468754, true);
print_r($owner4);

echo $car4->isMoreExpensive($car4), PHP_EOL;

echo 'Car price for scrap is ' . $car4->calculateCarPriceForScrap(100), PHP_EOL;

$owner4->setMoney(200);
$owner4->setCar($car4);
$owner4->sellCarForScrap(100);
echo 'Money after sell car for scrap ' . $owner4->getMoney();