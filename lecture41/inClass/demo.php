<?php

require_once 'autoload.php';

$company = Company::getInstance();

$desk1 = new Employee('name1', '0899323256', '8801054578');
$desk2 = new Employee('name3', '0899323256', '8801054578');
$desk3 = new Employee('name1', '0899323256', '8801054578');
$desk4 = new Employee('name1', '0899323256', '8801054578');
$desk5 = new Employee('name1', '0899323256', '8801054578');
$transport1 = new Employee('name2', '0899323256', '8801054578');
$transport2 = new Employee('name4', '0899323256', '8801054578');
$transport3 = new Employee('name2', '0899323256', '8801054578');
$transport4 = new Employee('name2', '0899323256', '8801054578');

$company->initOffices([
    new Office('Sofia', $desk1, $transport1),
    new Office('Plovdiv', $desk2, $transport2),
    new Office('Varna', $desk3, $transport3),
    new Office('Ruse', $desk4, $transport4),
    new Office('Veliko Tarnovo', $desk5)
]);
$sender1 = new Client('name11', '0899889898', 'address', true, '7701054565');
$sender2 = new Client('name12', '0899889898', 'address', false, '7701054565');
$sender3 = new Client('name13', '0899889898', 'address', true, '7701054565');
$sender4 = new Client('name14', '0899889898', 'address', true, '7701054565');
$sender5 = new Client('name15', '0899889898', 'address', false, '7701054565');
$sender6 = new Client('name16', '0899889898', 'address', true, '7701054565');
$receiver1 = new Client('name11', '0899889898', 'address', true, '7701054565');
$receiver2 = new Client('name12', '0899889898', 'address', false, '7701054565');
$receiver3 = new Client('name13', '0899889898', 'address', true, '7701054565');
$receiver4 = new Client('name14', '0899889898', 'address', true, '7701054565');
$receiver5 = new Client('name15', '0899889898', 'address', false, '7701054565');
$receiver6 = new Client('name16', '0899889898', 'address', true, '7701054565');

$shipment1 = new Shipment($sender1, $receiver1, 'description');
$shipment2 = new Shipment($sender2, $receiver2, 'description');
$shipment3 = new Shipment($sender3, $receiver3, 'description');
$shipment4 = new Shipment($sender4, $receiver4, 'description');
$shipment5 = new Shipment($sender5, $receiver5, 'description');
$shipment6 = new Shipment($sender6, $receiver6, 'description');

print_r($company);