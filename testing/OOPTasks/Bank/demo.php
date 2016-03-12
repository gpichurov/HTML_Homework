<?php

require_once 'autoload.php';

$bank = new Bank ('The Bank', 'Bulgaria', 1000000);
$bank->addProducts(new Deposit('Short Deposit', 'deposit', 0.03, 3));
$bank->addProducts(new Deposit('Long Deposit', 'deposit', 0.05, 12));
$bank->addProducts(new Credit('Home Credit', 'credit', 0.06));
$bank->addProducts(new Credit('Consumer Credit', 'credit', 0.1));
$clients = [
    new Client('Client name', 'Address', 10000, 1000),
    new Client('Client name', 'Address', 20000, 2000),
    new Client('Client name', 'Address', 30000, 3000),
    new Client('Client name', 'Address', 40000, 4000),
    new Client('Client name', 'Address', 50000, 5000),
    new Client('Client name', 'Address', 60000, 6000),
    new Client('Client name', 'Address', 70000, 7000),
    new Client('Client name', 'Address', 80000, 8000),
    new Client('Client name', 'Address', 90000, 9000),
    new Client('Client name', 'Address', 100000, 10000)
];


foreach ($clients as $k => $v) {
    $v->newDeposit($v->getMoney() * rand(80, 100) / 100, $bank->getProducts()[rand(0, 1)], $bank);
}

echo 'The bank has ' . $bank->getMoney() . ' available money and ' . $bank->getReserve() . ' reserve.' . PHP_EOL;

var_dump($clients[0], $clients[1]);