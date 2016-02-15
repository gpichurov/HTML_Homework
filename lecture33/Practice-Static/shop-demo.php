<?php

require_once 'Shop.php';

$shops = [new Shop(), new Shop(), new Shop()];

foreach ($shops as $shop) {
	$shop->work();
}

Shop::setIsOpen(false);

foreach ($shops as $shop) {
	$shop->work();
}