<?php

trait ActiveRecordTrait
{
	public function insert()
	{
	
		$values = [];
		foreach ($this->getDbFields() as $field) {
			$values[$field] = $this->{$field};
		}
	
		if (!empty($values[static::getPrimaryKeyName()])) {
			throw new Exception('Can not insert object with value for the primary key field');
		}
	
		unset($values[static::getPrimaryKeyName()]);
	
		$table = static::getTableName();
		$sql = sprintf(
				'INSERT INTO %s (%s) VALUES(%s)',
				$table,
				implode(', ', array_keys($values)),
				implode(', ', array_fill(0, count($values), '?'))
		);
	
		Db::query($sql, array_values($values));
	
		$pkField = static::getPrimaryKeyName();
		$this->{$pkField} = Db::getLastInsertID();
	}
	
	public function save()
	{
		$pkField = static::getPrimaryKeyName();
	
		if (!$this->{$pkField}) {
			$this->insert();
		} else {
			$this->update();
		}
	}
	
	public function update()
	{
		$values = [];
	
		foreach ($this->getDbFields() as $field) {
			$values[$field] = $this->{$field};
		}
	
		if (empty($values[static::getPrimaryKeyName()])) {
			throw new Exception('Can not update object with no value for the primary key field');
		}
	
		$pk = $values[static::getPrimaryKeyName()];
		unset($values[static::getPrimaryKeyName()]);
	
		$table = static::getTableName();
		// UPDATE users SET username = ?, password = ? WHERE id = ?
		$fields = [];
		foreach ($values as $key => $value) {
			$fields[] = $key . ' = ?';
		}
		$fields = implode(', ', $fields);
		$sql = sprintf(
				'UPDATE %s SET %s WHERE %s = ?',
				$table,
				$fields,
				static::getPrimaryKeyName()
		);
		$params = array_values($values);
		$params[] = $pk;
	
		Db::query($sql, $params);
	}
	
	public function delete()
	{
		$pkValue = $this->{static::getPrimaryKeyName()};
	
		if (empty($pkValue)) {
			throw new Exception('You can not delete rows with no value for the primary key');
		}
	
		$sql= sprintf('DELETE FROM %s WHERE %s = ?', static::getTableName(), static::getPrimaryKeyName());
	
		Db::query($sql, [$pkValue]);
	}
	
}