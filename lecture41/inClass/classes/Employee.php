<?php

class Employee extends Person
{
    private $shipmentsList;

    /**
     * @return mixed
     */
    public function getShipmentsList()
    {
        return $this->shipmentsList;
    }

    /**
     * @param mixed $shipmentsList
     */
    public function setShipmentsList($shipmentsList)
    {
        $this->shipmentsList = $shipmentsList;
    }


}