<?php

class Office
{
    private $name;

    private $type;

    private $employees;

    private $sentProtocols;

    private $receivedProtocols;

    /**
     * Office constructor.
     * @param $name
     * @param $employees
     * @param $sentProtocols
     * @param $receivedProtocols
     */
    public function __construct($name, $type = null)
    {
        $this->name = $name;
        $this->employees = [];
        $this->sentProtocols = [];
        $this->receivedProtocols = [];
    }
    public function addEmployee(Employee $employee)
    {
        $this->employees[$employee->getType()] = $employee;
    }

    /**
     * @return array
     */
    public function getEmployees()
    {
        return $this->employees;
    }
    
    public function getClerk()
    {
    	return $this->employees[Employee::TYPE_CLERK];
    	
    }
    
    public  function getTransport()
    {
    	return $this->employees[Employee::TYPE_TRANSPORT];
    	 
    }

	public function receiveShipments(IHasShipments $vendor) 
	{
		$protocol = new Protocol($vendor, $this->getClerk());
		$protocol->doTransfer();
	}
	
	public function export() 
	{
		$protocol = new Protocol($this->getClerk(), $this->getTransport());
		$protocol->doTransfer();
	}
	
	/**
	 * 
	 * @param IHasShipments $receiver
	 * @param Callable $filter
	 */
	public function deliver(IHasShipments $receiver, $filter = null)
	{
		$protocol = new Protocol($this->getClerk(), $receiver);
		$protocol->doTransfer($filter);
	}
	
	public function deliverToClient(Customer $c) 
	{
		$this->deliver($c, function (Item $i) use ($c) {
			return $i->getReceiver()->getEgn() == $c->getEgn();
		});
	}
}