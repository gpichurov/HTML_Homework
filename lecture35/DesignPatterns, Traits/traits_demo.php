<?php
require_once 'autoload.php';

$p = new Product(5, 'Smokes');

$c  = new Car();

$c->addQuantity(1);
var_dump($p->getQuantity(), $c->getQuantity());

$p = new Person('Mr.', 'Bean');
var_dump($p->getName());