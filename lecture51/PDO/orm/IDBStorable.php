<?php

interface IDBStorable
{
	public function getDbFields();
	
	public function save();
	
	public function insert();
	
	public function update();
	
	public function delete();
	
}