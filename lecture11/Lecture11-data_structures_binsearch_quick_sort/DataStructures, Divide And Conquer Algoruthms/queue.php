<?php

$queue = [];

function enqueue($entry) {
	global $queue;
	array_push($queue, $entry);
}

function dequeue() {
	global $queue;
	
	return array_shift($queue);
}