<?php

require_once 'iPerson.php';
require_once 'iSellable.php';
require_once 'Person.php';
require_once 'Fruit.php';
require_once 'Car.php';

$p = new Person('John Doe', 53);

$p->buy(new Car());
$p->buy(new Fruit());

echo $p;