<?php

class Item implements IStorable
{
	use StorableTrait;
	
	const STATUS_UNDEFINED = 0;
	
	const STATUS_IN_SYSEM = 1;
	
	const STATUS_DELIVERED = 2;
	
    private $id;

    private $from;

    private $to;

    private $content;

    private static $number = 1000;

    private $status;

    private $protocols;

    /**
     * Item constructor.
     * @param $from
     * @param $to
     * @param $content
     * @param $id
     * @param $status
     * @param $protocols
     */
    public function __construct(Customer $from, Customer $to, $content)
    {
        $this->from = $from;
        $this->to = $to;
        $this->content = $content;
        $this->id = ++self::$number;
        $this->status = 'status';
        $this->protocols = [];
    }
    
    public function getID() 
    {
    	return $this->id;
    }
    
    public function getReceiver()
    {
    	return $this->to;
    }
    
    public function getSender()
    {
    	return $this->from;
    }

	public function changeStatus()
	{
		if ($this->status == self::STATUS_UNDEFINED) {
			$this->status = self::STATUS_IN_SYSEM;
		} else if ($this->status == self::STATUS_IN_SYSEM) {
			$this->status = self::STATUS_DELIVERED;
		}
	}
	
	public function addProtocol($protocolID) 
	{
		$this->protocols[] = $protocolID;
	}
}