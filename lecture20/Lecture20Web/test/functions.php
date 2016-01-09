<?php
function get_value($array, $key, $default = null) {
	return isset($array[$key]) ? $array[$key] : $default;
}
