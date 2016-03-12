<?php

require_once 'Serializable.php';

$s = new SerializableClass(1, 2, 3);

$str = serialize($s);

var_dump(unserialize($str));