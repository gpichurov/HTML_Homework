<?php

require_once 'config.php';;

class Db
{
	protected  static $connection;
	
	protected static function getConnection()
	{
		if (!self::$connection) {
			self::$connection = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD, [
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
			]);
		}
		
		return self::$connection;
	}
	
	
	/**
	 * 
	 * @param string $sql
	 * @param string $params
	 * @return PDOStatement
	 */
	public static function query($sql, $params = null) 
	{
		Logger::log(sprintf('Query: %s , Params: %s', $sql, print_r($params, true)));
		
		$sth = self::getConnection()->prepare($sql);
		$sth->execute($params);
		
		return $sth;
	}
	
	public static function getLastInsertID()
	{
		return self::getConnection()->lastInsertId();
	}
}