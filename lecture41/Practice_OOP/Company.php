<?php

class Company
{
    private static $instance;

    /**
     * 
     * @var Office[]
     */
    private $offices;

    private $employees;

    private $shipments;

    /**
     * Company constructor.
     */
    public function __construct()
    {
        self::initOffices();
        self::initEmployees();

        $this->shipments = [];
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function initOffices()
    {
        $this->offices['Veliko Tyrnovo'] = new Office('Veliko Tyrnovo', 'HQ');
        $this->offices['Sofia'] = new Office('Sofia');
        $this->offices['Ruse'] = new Office('Ruse');
        $this->offices['Plovdiv'] = new Office('Plovdiv');
        $this->offices['Varna'] = new Office('Varna');
    }

    private function initEmployees()
    {
        $this->addEmployee('VT', 123456, $this->offices['Veliko Tyrnovo'], Employee::TYPE_CLERK);
        
        $this->addEmployee('CA C', 123456, $this->offices['Sofia'], Employee::TYPE_CLERK);
        $this->addEmployee('CA T', 123456, $this->offices['Sofia'], Employee::TYPE_TRANSPORT);
        
        $this->addEmployee('P C', 123456, $this->offices['Ruse'], Employee::TYPE_CLERK);
        $this->addEmployee('P T', 123456, $this->offices['Ruse'], Employee::TYPE_TRANSPORT);
        
        $this->addEmployee('PB C', 123456, $this->offices['Plovdiv'], Employee::TYPE_CLERK);
        $this->addEmployee('PB T', 123456, $this->offices['Plovdiv'], Employee::TYPE_TRANSPORT);
        
        $this->addEmployee('B C', 123456, $this->offices['Varna'], Employee::TYPE_CLERK);
        $this->addEmployee('B T', 123456, $this->offices['Varna'], Employee::TYPE_TRANSPORT);
    }

    private function addEmployee($name, $phone, $office, $type)
    {
        $employee = new Employee($name, $phone, $office, $type);
        $this->employees[] = $employee;
        $office->addEmployee($employee);
    }

    /**
     * @return mixed
     */
    public function getEmployees()
    {
        return $this->employees;
    }

    /**
     * @return mixed
     */
    public function getOffices()
    {
        return $this->offices;
    }

    /**
     * 
     * @param unknown $name
     * @throws Exception
     * @return Office
     */
	public function getOffice($name) 
	{
		if (isset($this->offices[$name])) {
			return $this->offices[$name];
		}
		
		throw new Exception(sprintf('Office with name %s not found', $name));
	}
	
	public function work()
	{
		$centralOffice = $this->offices['Veliko Tyrnovo'];
		
		foreach ($this->offices as $key => $value) {
			if ($value === $centralOffice) {
				continue;
			}
			
			$value->export();
//			if (!$value->getTransport()) {
//				var_dump($value);die;
//
//			}
			$centralOffice->receiveShipments($value->getTransport());
		}
		
		foreach ($this->offices as $key => $value) {
			if ($value === $centralOffice) {
				continue;
			}
				
			$centralOffice->deliver($value->getTransport(), function (Item $i) use ($key) {
				return  $i->getReceiver()->getCityAddress() == $key; 
			});
			
			$value->receiveShipments($value->getTransport());
		}
	}
}