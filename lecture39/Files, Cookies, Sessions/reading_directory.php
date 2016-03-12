<?php
$dh = opendir('files');
while (($entry = readdir($dh))) {
	var_dump($entry);
}

$entries = scandir('files');
var_dump($entries);

