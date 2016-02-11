<?php

require_once 'autoload.php';

$lock = new Lock('locked');
$door = new Door('closed', 'locked');

echo $door->display();