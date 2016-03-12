<?php

require_once 'autoload.php';
$customer = new Customer('Ivan Ivanov', '0899888888', 'Varna', 'bul Vladislav Varnenchik', '15a');
$customer2 = new Customer('Georgi Georgiev', '0888999999', 'Sofia', 'bul Carigradsko Shose', '15a');


$item = new Item($customer, $customer2, 'Rakiq');
$customer->addShipment($item);

Company::getInstance()
	->getOffice('Varna')
	->receiveShipments($customer);
	
Company::getInstance()->work();

Company::getInstance()->getOffice('Sofia')->deliverToClient($customer2);

var_dump($customer2);
