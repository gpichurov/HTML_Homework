<?php

require_once 'autoload.php';
//
//$owner1 = new Person;
//$owner1->setName('Georgi');
//$owner1->setAge(22);
//$car1 = new Car();
//$car1->setModel('BMW');
//$car1->setMaxSpeed(311);
//$car1->setCurrentSpeed(123);
//$car1->setCurrentGear(4);
//$car1->setColor('green');
//$car1->setOwner($owner1);
//echo 'Current gear is ' . $car1->getCurrentGear(), PHP_EOL;
//echo 'Current speed is ' . $car1->getCurrentSpeed(), PHP_EOL;
//
//$owner2 = new Person();
//$owner2->setName('Ivan');
//$owner2->setAge(33);
//$owner2->setFriend($owner1);
//echo $owner2->getName() . '\'s friend is ' . $owner2->getFriend()->getName() . PHP_EOL;
//
//$car2 = new Car();
//$car2->setModel('Audi');
//$car2->setMaxSpeed(333);
//$car2->setCurrentSpeed(111);
//$car2->setCurrentGear(4);
//$car2->setColor('red');
//$car2->setOwner($owner2);
//
//$car1->setCurrentGear(5);
//$car1->setCurrentSpeed(222);
//echo 'Current gear is ' . $car1->getCurrentGear(), PHP_EOL;
//echo 'Current speed is ' . $car1->getCurrentSpeed(), PHP_EOL;
//
//echo 'The owner of ' . $car1->getModel() . ' is ' . $owner1->getAge() . ' years old ' . $owner1->getName() . PHP_EOL;

//$car1->changeGearUp();
//echo 'Current gear is ' . $car1->getCurrentGear(), PHP_EOL;
//
//$car1->changeGearDown();
//echo 'Current gear is ' . $car1->getCurrentGear(), PHP_EOL;
//
//$car1->changeGear(2);
//echo 'Current gear is ' . $car1->getCurrentGear(), PHP_EOL;
//
//$car1->changeColor('blue');
//echo 'Current color is ' . $car1->getColor(), PHP_EOL;

$car11 = new Car('Mazda', true, 'brown', 50000, 350);
$car12 = new Car('Suzuki', true, 'blue', 40000, 300);
$car13 = new Car('Hyundai', false, 'pink', 30000, 250);

$buyer1 = new Person('Georgi', 8956456231, true);
$buyer1->setMoney(50000);

$carShop = new CarShop($car11, $car12);
$carShop->addCar($car13);

print_r($carShop->getNextCar());
$carShop->sellNextCar($buyer1);
$carShop->removeCar($car11);
$carShop->showAllCarsInTheShop();
print_r($buyer1);

print_r($carShop->getNextCar());
print_r($carShop->getNextCar());
print_r($carShop->getNextCar());
print_r($carShop->getNextCar());
$carShop->addCar($car11);
$carShop->showAllCarsInTheShop();