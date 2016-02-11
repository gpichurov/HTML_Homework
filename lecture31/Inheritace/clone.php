<?php
class Soldier 
{
	protected $amunitionCount = 10;
	
	public function shoot() {
		
		if (!$this->amunitionCount) {
			echo 'Out of amo', PHP_EOL;
			return false;
		} else {
			echo 'I am shooting', PHP_EOL;
			$this->amunitionCount--;			
		}
		
		return true;
		
	}
}

$soldiers = [];
$soldier = new Soldier();

for ($i = 0; $i < 10; $i++) {
	$newSoldier = clone $soldier;
	$soldiers[] = $newSoldier;
}

$shootCount = 0;
do {
	$canShoot = true;
	
	$failCount = 0;
	foreach ($soldiers as $s) {
		if (!$s->shoot()) {
			$failCount++;
		} else {
			$shootCount++;
		}
	}
	
	$canShoot = $failCount != count($soldiers);
	
}while ($canShoot);

var_dump($shootCount);