<?php
require_once '../autoload.php';

/* $t = new Todo;
$t->user_id = 5;
$t->text = 'Test todo';
$t->created_at = date('Y-m-d H:i:s');
$t->due_time = date('Y-m-d H:i:s', strtotime('+1 day'));

$t->save();

var_dump($t); */

var_dump(Todo::findByPk(1));