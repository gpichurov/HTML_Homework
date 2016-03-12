<?php

class Office
{
    private $name;

    private $desk;

    private $transport;

    /**
     * Office constructor.
     * @param $name
     * @param $desk
     * @param $transport
     */
    public function __construct($name, Employee $desk, Employee $transport = null)
    {
        $this->name = $name;
        $this->desk = $desk;
        $this->transport = $transport;
    }


}