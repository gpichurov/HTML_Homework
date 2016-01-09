<?php

$stack = [];

function pop() {
	global $stack;
	
	return array_pop($stack);
}

function push($entry) {
	global $stack;
	
	return array_push($stack, $entry);
}

function peek() {
	global $stack;
	
	return end($stack);
}
