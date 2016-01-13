<?php

$text= 'Иванчо яде ябълка.';

var_dump(strlen($text), mb_strlen($text, 'UTF-8'));