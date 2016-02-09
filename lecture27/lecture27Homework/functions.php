<?php

function getValue($array, $key, $default = null) {
	return isset($array[$key]) ? $array[$key] : $default;
}
