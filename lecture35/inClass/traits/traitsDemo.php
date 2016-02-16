<?php

require_once 'autoload.php';

$p = new Product('da', 5);

$c =  new Car();

$p->addQuantity(2);
$c->addQuantity(1);

var_dump($p->getQuantity(), $c->getQuantity());

$per = new Person('Mr', 'Bean');
var_dump($per->getNameFromTrait(), $per->getName());