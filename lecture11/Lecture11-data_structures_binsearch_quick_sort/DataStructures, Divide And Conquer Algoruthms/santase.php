<?php

require_once 'stack.php';

/**
 * one card 
 * [
 * 	'color' => 'pika',
 *  'value' => 'D'
 * ]
 */


foreach (['clubs', 'diamonds', 'hearts', 'spades'] as $color) {
	foreach (array_merge(range(2, 10), ['J', 'D', 'K', 'A']) as $value) {
		push([
			'color' => $color,
			'value' => $value
		]);
	}
}
shuffle($stack);

$cardsToGive = 12;

while ($cardsToGive--) {
	pop();
}

$trump = pop();

print_r($trump);