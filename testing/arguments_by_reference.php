<?php
$pattern = '/\bnormal\b/i';
echo preg_replace($pattern,"large", 'graph.facebook.com/v2.5/1347720765254260/picture?type=normal');
die();