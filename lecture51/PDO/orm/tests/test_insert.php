<?php

require_once '../autoload.php';

$u = new User();
$u->username = 'test123';
$u->password = md5('test1234');

$u->insert();

var_dump($u);