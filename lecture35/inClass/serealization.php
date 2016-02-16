<?php

$number = '11.12';
var_dump(serialize($number));

$serialized = 's:5:"11.12";';

var_dump(unserialize($serialized));

