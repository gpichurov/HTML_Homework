<?php

require_once '../autoload.php';
$u = User::findByPk(5);
$u->username = 'Dragan Dragnov';

$u->save();

var_dump(User::findByPk(5));