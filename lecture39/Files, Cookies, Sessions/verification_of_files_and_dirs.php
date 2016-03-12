<?php
var_dump(is_file('files'));
var_dump(is_dir('files'));
var_dump(is_file('files/rss.xml'));
var_dump(is_dir('files/rss.xml'));

var_dump(is_readable('files/rss.xml'));
var_dump(is_writable('files/rss.xml'));