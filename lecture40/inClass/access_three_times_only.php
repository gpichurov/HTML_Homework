<?php

const COOKIE_NAME = 'access_count';
const MAX_ACCESS_COUNT = 2;

$count = isset($_COOKIE[COOKIE_NAME]) ? intval($_COOKIE[COOKIE_NAME]) : 0;

if ($count > MAX_ACCESS_COUNT) {
    die('You all ready have been here 3 times');
} else {
    echo sprintf('%d times left', MAX_ACCESS_COUNT - $count);
    setcookie(COOKIE_NAME, ++$count, time() + 86400);
}