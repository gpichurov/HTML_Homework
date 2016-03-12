<?php

require_once 'autoload.php';

class Protocol implements IStorable
{
	use StorableTrait;
	
    private $number;

    /**
     * 
     * @var IHasShipments
     */
    private $from;

    /**
     * 
     * @var IHasShipments
     */
    private $to;

    /**
     * 
     * @var Item[]
     */
    private $items;

    private static $currentNumber = 1;

    /**
     * Protocol constructor.
     * @param $from
     * @param $to
     * @param $items
     */
    public function __construct($from, $to)
    {
        $this->number = self::$currentNumber++;
        $this->from = $from;
        $this->to = $to;
        $this->items = [];
    }
    
    public function doTransfer($filter = null)
    {
    	$this->items = is_callable($filter) ? 
    		array_filter($this->from->getShipments(), $filter) : 
    		$this->from->getShipments();
    	
    	foreach ($this->items as $item) {
    		$this->to->addShipment($item);
    		$this->from->removeShipment($item);
    		if ($this->from instanceof Customer || $this->to instanceof Customer) {
    			$item->changeStatus();
    		}
    		
    		$item->addProtocol($this->number);
    		$item->store($item->getID());
    	}
    	
    	$this->store($this->number);
    }

}
/*$c = new Customer('name', 123456789, 123456789, 'address');
var_dump($c);

$p = new Protocol($c, $c);
var_dump($p);
$p2 = new Protocol($c, $c);
var_dump($p2);*/
