<?php

require_once 'autoload.php';

$people = [];

$person1 = new Person('Georgi', 22, true);
$person2 = new Person('Mimi', 33, false);

$student1 = new Student('Ivan', 23, true, 6);
$student2 = new Student('Lili', 32, false, 4);

$employee1 = new Employee('Dimitar', 41, true, 80);
$employee2 = new Employee('Viki', 16, false, 40);
$overtimeHours = 2;

$people = [$person1, $person2, $student1, $student2, $employee1, $employee2];

foreach ($people as $key => $value) {
    if (is_a($value, 'Student')) {
        echo $value->showStudentInfo() . PHP_EOL;
        continue;
    } elseif (is_a($value, 'Employee')) {
        echo  $value->showEmployeeInfo() . '. And worked overtime for $' .
            $value->calculateOvertime($overtimeHours) . PHP_EOL;
        continue;
    } elseif (is_a($value, 'Person')) {
        echo $value->showPersonInfo() . PHP_EOL;
    }
}