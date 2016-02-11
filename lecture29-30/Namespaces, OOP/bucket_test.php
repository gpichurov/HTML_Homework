<?php
require_once 'autoload.php';

$bucket = new Bucket(5, 2, 'Test');

echo 'Testing constructor', PHP_EOL;
assert($bucket->getMaxVolume() === 5);
assert($bucket->getCurrentVolume() === 2);
assert($bucket->getName() === 'Test');
echo 'END Testing constructor', PHP_EOL;

echo 'Testing Bucket::getRemainingSpace', PHP_EOL;
assert($bucket->getRemainingSpace() === 3);
echo 'END Testing Bucket::getRemainingSpace', PHP_EOL;

echo 'Testing Bucket::addLiquid', PHP_EOL;
$bucket->addLiquid(2);
assert($bucket->getCurrentVolume() === 4);
$bucket->addLiquid(2);
assert($bucket->getCurrentVolume() <= $bucket->getMaxVolume());
echo 'END Testing Bucket::addLiquid', PHP_EOL;

echo 'Testing Bucket::emptyDownDrain', PHP_EOL;

$bucket->emptyDownDrain();
assert($bucket->getCurrentVolume() === 0);

echo 'END Testing Bucket::emptyDownDrain', PHP_EOL;

echo 'Testing Bucket::fill', PHP_EOL;

$bucket->fill();
assert($bucket->getCurrentVolume() === $bucket->getMaxVolume());

echo 'END Testing Bucket::fill', PHP_EOL;

echo 'Testing Bucket::transfer', PHP_EOL;

$bucket->emptyDownDrain();
$smallBucket = new Bucket(2, 2, 'Small');
$bucket->transfer($smallBucket);

assert($bucket->getCurrentVolume() === $smallBucket->getMaxVolume());
assert($smallBucket->getCurrentVolume() === 0);

$largeBucket = new Bucket(5, 5, 'Large');
$bucket->transfer($largeBucket);

assert($bucket->getCurrentVolume() === 5);
assert($largeBucket->getCurrentVolume() === 2);

echo 'END Testing Bucket::transfer', PHP_EOL;