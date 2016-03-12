<?php

class Customer extends Person implements IHasShipments
{
	use HasShipmentsTrait;
	
    private $address;
        
    /**
     * Customer constructor.
     * @param string $name
     * @param string $phone
     * @param $EGN
     * @param $address
     */
    public function __construct($name, $phone, $city, $street, $no, $other= null)
    {
        parent::__construct($name, $phone);
        $this->address = [$city, $street, $no, $other= null];
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }
    
    public function getCityAddress()
    {
    	return $this->getAddress()[0];
    }
}