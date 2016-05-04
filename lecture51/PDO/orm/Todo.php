<?php
/**
 * 	id INT NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL,
    `text` VARCHAR(255) NOT NULL,
    created_at DATETIME NOT NULL,
    due_time DATETIME,
    is_done TINYINT(1) DEFAULT 0,
 * @author Dev-1
 *
 */
class Todo extends ActiveRecord
{
	public $id;
	
	public $user_id;
	
	public $text;
	
	public $created_at;
	
	public $due_time;
	
	public $is_done;
	
}