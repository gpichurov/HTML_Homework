<?php

// all todos with their users
// SELECT * FROM todos LEFT JOIN users ON (todos.user_id users.id) 
// WHERE created_at BETWEEN '2016-03-23 00:00:00' AND '2016-03-23 23:59:59'

$f = new Filter();

$f
	->join('LEFT', 'users', 'todos.user_id users.id')
	->where('AND', 'BETWEEN', '2016-03-23 00:00:00', '2016-03-23 23:59:59')
	->setTable('todos')
	->all();