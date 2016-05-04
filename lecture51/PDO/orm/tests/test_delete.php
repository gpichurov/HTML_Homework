<?php

require_once '../autoload.php';
$u = User::findByPk(11);

$u->delete();


var_dump(User::findByPk(11));

echo implode('<br>', Logger::flush());
