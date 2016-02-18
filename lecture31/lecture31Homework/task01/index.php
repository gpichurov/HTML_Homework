<?php

require_once 'autoload.php';

$t1 = new Task("Task 1", 15);
$t2 = new Task("Task 2", 4);
$t3 = new Task("Task 3", 6);
$t4 = new Task("Task 4", 1);
$t5 = new Task("Task 5", 32);
$t6 = new Task("Task 6", 40);
$t7 = new Task("Task 7", 18);
$t8 = new Task("Task 8", 2);
$t9 = new Task("Task 9", 3);
$t10 = new Task("Task 10", 2);
$t11 = new Task("Task 11", 2);
$t12 = new Task("Task 12", 2);

$allWork = new AllWork();

$allWork->addTask($t1);
$allWork->addTask($t2);
$allWork->addTask($t3);
$allWork->addTask($t4);
$allWork->addTask($t5);
$allWork->addTask($t6);
$allWork->addTask($t7);
$allWork->addTask($t8);
$allWork->addTask($t9);
$allWork->addTask($t10);
$allWork->addTask($t11);
$allWork->addTask($t12);

$e1 = new Employee("Ivan", $allWork);
$e2 = new Employee("Niki", $allWork);
$e3 = new Employee("Tina", $allWork);

$moreWork1 = false;
$moreWork2 = false;
$moreWork3 = false;

$days = 1;

while(!$moreWork1 || !$moreWork2 || !$moreWork3) {
    echo 'Start working day number ' . $days . PHP_EOL;
    $days++;
    $moreWork1 = $e1->work();
    $moreWork2 = $e2->work();
    $moreWork3 = $e3->work();
}