<?php
require 'queue.php';

foreach (range(1, 5) as $number) {
	enqueue('T' . $number);
}

var_dump($queue);

function makeACall($duration) {
	$telefonistka = dequeue();
	echo $telefonistka , ' handled the call ';
}

makeACall(10);

var_dump($queue);