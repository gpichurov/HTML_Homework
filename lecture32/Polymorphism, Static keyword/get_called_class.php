<?php

class ParentClass
{
	public static function createObject()
	{
		$className = get_called_class();
		
		return new $className;
	}
}

class ChildClassOne extends ParentClass
{
	
}

class ChildClassTwo extends ParentClass
{
	
}

var_dump(ChildClassTwo::createObject());

var_dump( ChildClassOne::createObject() instanceof ChildClassOne);
var_dump( ChildClassTwo::createObject() instanceof ChildClassTwo);