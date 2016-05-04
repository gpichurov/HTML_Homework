<?php

class Filter 
{
	const ALL_FIELD = '*';
	
	protected $fields = [];
	
	protected $table;
	
	protected $joins = [];
	
	protected $where = [];
	
	protected $groupBy = [];
	
	protected $order = [];
	
	protected $having = [];
	
	public function addField($field)
	{
		$this->fields[] = $field;
		
		return $this;
	}
	
	public function setTable($table)
	{
		$this->table = $table;
		
		return $this;
	}
	// ->join('ínner', 'users', 't.user_id = users.id')
	public function join($type, $table, $condition) {
		$this->joins[] = [
			'type' => $type,
			'table' => $table,
			'condition' => $condition				
		];
		
		return $this;
	}
	
	public function where($logicalOperator, $condition, $operand1, $operand2 = null)
	{
		$this->where[] = [
			'logicalOperator' => $logicalOperator,
			'condition' => $condition,
			'op1' => $operand1,
			'op2' => $operand2
		];
		
		return $this;
	}
	
	public function groupBy($field)
	{
		$this->groupBy[] = $field;
		
		return $this;
	}
	
	public function having($field)
	{
		$this->having[] = $field;
		
		return $this;
	}
	
	public function getQuery()
	{
		if (!$this->table) {
			throw new Exception('Table name must be specified');
		}
		
		$sql = sprintf('SELECT 
				%s
				FROM %s t
				%s
				%s
				%s
				%s
				%s',
					$this->getFields(),
					$this->table,
					$this->getJoins()
					//$t
				);
	}
	
	protected function getFields()
	{
		return $this->fields ? 
				implode(', ', $this->fields):
				self::ALL_FIELD;
	}
	
	public function getTableName()
	{
		return $this->table;
	}
	
	protected function getJoins()
	{
		$sql = '';
		
		foreach ($this->joins as $definition) {
			$sql .= sprintf('%s JOIN %s ON(%s)' . PHP_EOL,
					$definition['type'],
					$definition['table'],
					$definition['condition']);
		}
		
		return $sql;
	}
	
	protected function getWhere()
	{
		
	}
}