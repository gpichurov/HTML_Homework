<?php

class Employee extends Person implements IHasShipments
{
	use HasShipmentsTrait;
	
	const TYPE_CLERK = 'clerk';
	const TYPE_TRANSPORT = 'transport';
	
    private $type;

    private $office;

    /**
     * Employee constructor.
     * @param string $name
     * @param string $phone
     * @param $EGN
     * @param $type
     */
    public function __construct($name, $phone, $office, $type)
    {
        parent::__construct($name, $phone);
        $this->office = $office;
        $this->type = $type == self::TYPE_CLERK ? 
        		self::TYPE_CLERK : 
        		self::TYPE_TRANSPORT;
    }
    
    public function getType() 
    {
    	return $this->type;
    }


}