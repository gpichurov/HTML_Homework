<?php

abstract class ActiveRecord implements IDBStorable
{
	use ActiveRecordTrait;
	
	protected function relations()
	{
		// Users
		// $user->todos
		return [
			'todos'	=> [
				'class' => Todo::class,
				'pk' => 'id',
				'fk' => 'user_id',
				'relation' => 'has_many'
			]
		];
	}
	
	/**
	 *
	 * @param [Filter | int] $filter
	 */
	public static function select($filter)
	{
		if (is_numeric($filter)) {
			return static::findByPk($filter);
		}
	}
	
	public static function findByPk($pkValue)
	{
		$sql = sprintf(
				'SELECT * FROM %s WHERE %s = ?',
				static::getTableName(),
				static::getPrimaryKeyName()
		);
		return Db::query($sql, [$pkValue])->fetchObject(get_called_class());
	}
	
	public static function getTableName()
	{
		$cls = explode('\\', get_called_class());
		$cls = array_pop($cls);
		
		return strtolower($cls) . 's';
	}
	
	public static function getPrimaryKeyName()
	{
		return 'id';
	}
	
	public function getDbFields()
	{
		$fieldsToRemove = $this->getNotStrorableFields();
		$fields = array_keys(get_class_vars(get_class($this)));
	
		return array_diff($fields, $fieldsToRemove);
	}
	
	protected function getNotStrorableFields() 
	{
		return [];
	}
}