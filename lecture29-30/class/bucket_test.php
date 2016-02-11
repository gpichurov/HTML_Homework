<?php

require_once 'autoload.php';

$bucket = new Bucket(5, 2, 'Test');

echo 'Testing constructor', PHP_EOL;
assert($bucket->getMaxVolume() === 5);
assert($bucket->getCurrentVolume() === 2);
assert($bucket->getName() === 'Test');
echo 'END Testing', PHP_EOL;
echo 'Testing Bucket::getRemainingSpace', PHP_EOL;
assert($bucket->getRemainingSpace() === 3);
echo 'End testing Bucket::getRemainingSpace', PHP_EOL;
echo 'Testing Bucket::addLiquid', PHP_EOL;
$bucket->addLiquid(2);
assert($bucket->getCurrentVolume() === 4);
$bucket->addLiquid(2);
assert($bucket->getCurrentVolume() <= $bucket->getMaxVolume());
echo 'End testing Bucket::addLiquid', PHP_EOL;