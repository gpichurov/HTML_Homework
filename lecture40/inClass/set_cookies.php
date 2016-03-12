<?php

$username = 'hi';
$n = '1';

setcookie("test cookie", $n, time()+3600*24*30, '/');
setcookie('other cookie', 2);
setcookie("Username", $username, time()+3600*24*30);
setcookie("Username1", $username, time()+3600*24*30, '/');
