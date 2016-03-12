<?php

file_put_contents('files/rss.xml', 
		file_get_contents('http://www.vesti.bg/rss'));