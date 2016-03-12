<?php

require_once 'autoload.php';

$proxy1Assets = [new Assets('house', 100000), new Assets('sheep', 1000)];
$proxy1 = new Client('Ivan', 4543454546, $proxy1Assets);

$client1Assets = [new Assets('house', 100000), new Assets('sheep', 1000)];
$client1 = new Client('Georgi', 8988784624, $client1Assets, $proxy1);

$proxy2Assets = [new Assets('house', 200000, new Assets('car', 20000))];
$proxy2 = new Client('Ivan', 4546598746, $proxy2Assets);

$client2Assets = [new Assets('house', 200000, new Assets('car', 20000))];
$client2 = new Client('Georgi', 8985234624, $client2Assets, $proxy2);

$client3Assets = [new Assets('house', 300000), new Assets('stocks', 100000)];
$client3 = new Client('Georgi', 8985456724, $client3Assets);

$client4Assets = [new Assets('house', 400000), new Assets('car', 50000)];
$client4 = new Client('Georgi', 8985464994, $client4Assets);

$client5Assets = [new Assets('house', 500000), new Assets('stocks', 800000)];
$client5 = new Client('Georgi', 8985469894, $client5Assets);

Administration::getInstance()->newDeclaration($proxy1);
Administration::getInstance()->newDeclaration($client1);
Administration::getInstance()->newDeclaration($proxy2);
Administration::getInstance()->newDeclaration($client2);
Administration::getInstance()->newDeclaration($client3);
Administration::getInstance()->newDeclaration($client4);
Administration::getInstance()->newDeclaration($client5);

Administration::getInstance()->checkTaxes($proxy1);
Administration::getInstance()->checkTaxes($client1);
Administration::getInstance()->checkTaxes($proxy2);
Administration::getInstance()->checkTaxes($client2);
Administration::getInstance()->checkTaxes($client3);
Administration::getInstance()->checkTaxes($client4);
Administration::getInstance()->checkTaxes($client5);

Administration::getInstance()->payTaxes($proxy1);
Administration::getInstance()->payTaxes($client1);
Administration::getInstance()->payTaxes($proxy2);
Administration::getInstance()->payTaxes($client2);
Administration::getInstance()->payTaxes($client3);
Administration::getInstance()->payTaxes($client4);
Administration::getInstance()->payTaxes($client5, 'house');

Administration::getInstance()->allNotPaid();
Administration::getInstance()->allDeclarationsAtDate(9, 3, 2016);



