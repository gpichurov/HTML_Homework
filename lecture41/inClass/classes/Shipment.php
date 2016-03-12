<?php

class Shipment
{
    private static $number = 0;

    private $sender;

    private $receiver;

    private $createdAt;

    private $description;

    private $status;

    /**
     * Shipment constructor.
     * @param $sender
     * @param $receiver
     * @param $description
     * @param $status
     */
    public function __construct(Client $sender, Client $receiver, $description, $status = false)
    {
        //$this->number = self::$number++;
        $this->sender = $sender;
        $this->receiver = $receiver;
        $this->createdAt = date('Y-m-d H:i:s');
        $this->description = $description;
        $this->status = $status;
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
     * @return Client
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param Client $sender
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
    }

    /**
     * @return Client
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * @param Client $receiver
     */
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }


}