<?php

$fp = fopen('files/rss.xml', 'r');
$cnt = 0;
while (!feof($fp)) {
	$str = fread($fp, 1024);
	$offset = 0;
	do {
		
		$pos = strpos($str, 'item', $offset);
		if ($pos != 0) {
			$cnt++;	
		}
		
		$offset = $pos + 4;
	} while ($pos !== false);
}

var_dump($cnt);