<?php

ob_start();
echo 'Hello Buffer';
echo 'Hello Buffer';
echo 'Hello Buffer';
echo 'Hello Buffer';
echo 'Hello Buffer';
$output = ob_get_clean();

echo 'Our Output<br>';
echo $output;