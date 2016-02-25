<?php
$dh = opendir('files');


while ($entry = readdir($dh)) {
    var_dump($entry);
}

var_dump(scandir('files'));

