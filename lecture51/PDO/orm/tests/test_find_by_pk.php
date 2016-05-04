<?php
require_once '../autoload.php';
$u = User::findByPk(5);

var_dump($u);