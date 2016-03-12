<?php
require_once 'ISellable.php';
require_once 'IPerson.php';
require_once 'Person.php';
require 'Fruit.php';
require 'Car.php';

$p = new Person('John Doe', 53);

$p->buy(new Fruit());
$p->buy(new Car());

echo $p . ' , nice guy';
