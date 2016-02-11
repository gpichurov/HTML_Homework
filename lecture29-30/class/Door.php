<?php

class Door
{

    private $status;

    private $lock;

    public function __construct($status, $lockStatus)
    {
        $this->status = $status;
        $this->lock = $lock;
    }

    public function display()
    {
        return 'The door is ' . $this->status . ' ' . $this->lock->display();
    }
}