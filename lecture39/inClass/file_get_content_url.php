<?php

//var_dump(file_get_contents('http://moodle.ittalents.bg/'));
file_put_contents('files/rss.xml',
    file_get_contents('http://moodle.ittalents.bg/'));