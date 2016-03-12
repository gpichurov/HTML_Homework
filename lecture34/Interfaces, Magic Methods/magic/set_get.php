<?php
require_once 'CustomFields.php';

$c = new CustomFields();

$c->ageField = 15;
$c->nameField = 'Test Test';
$c->carField = 'VW Golf';
$c->realField = 'real value';

var_dump($c->ageField);

var_dump(isset($c->carField));
unset($c->nameField);

var_dump(isset($c->nameField));
var_dump($c->nameField);