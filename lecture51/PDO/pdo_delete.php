<?php

require_once 'orm/Db.php';

Db::query('DELETE FROM users WHERE username IN(?, ?)', ['test', 'test1']);