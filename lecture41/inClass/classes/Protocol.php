<?php

class Protocol
{

    private static $number = 0;

    private $from;

    private $to;

    private $shipments;

    /**
     * Protocol constructor.
     * @param $from
     * @param $to
     * @param $shipments
     */
    public function __construct(Person $from, Person $to, $shipments)
    {
        $this->number = self::$number++;
        $this->from = $from;
        $this->to = $to;
        $this->shipments = $shipments;
    }

    /**
     * @return mixed
     */
    public static function getNumber()
    {
        return self::$number;
    }

    /**
     * @param mixed $number
     */
    public static function setNumber($number)
    {
        self::$number = $number;
    }

    /**
     * @return Office
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param Office $from
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * @return Office
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param Office $to
     */
    public function setTo($to)
    {
        $this->to = $to;
    }

    /**
     * @return Shipment
     */
    public function getShipments()
    {
        return $this->shipments;
    }

    /**
     * @param Shipment $shipments
     */
    public function setShipments($shipments)
    {
        $this->shipments = $shipments;
    }


}