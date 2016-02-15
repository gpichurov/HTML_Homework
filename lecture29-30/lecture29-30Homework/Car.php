<?php

class Car
{
    private $model;

    private $maxSpeed;

    private $currentSpeed;

    private $color;

    private $currentGear;

    private $owner;

    private $price;

    private $isSport;

    public function __construct($model, $isSport, $color, $price, $maxSpeed)
    {
        $this->model = $model;
        $this->isSport = $isSport;
        $this->color = $color;
        $this->price = $price;
        if (!$isSport && $maxSpeed > 200) {
            $this->maxSpeed = 200;
        } else {
            $this->maxSpeed = $maxSpeed;
        }

    }

//    public function __construct($model, $isSport, $color, $currentSpeed = 100, $currentGear = 3)
//    {
//        $this->model = $model;
//        $this->isSport = $isSport;
//        $this->color = $color;
//        $this->currentSpeed = $currentSpeed;
//        $this->currentGear = $currentGear;
//    }

    public function getOwner()
    {
        return $this->owner;
    }

    public function setOwner($owner)
    {
        $this->owner = $owner;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }

    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed($currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getCurrentGear()
    {
        return $this->currentGear;
    }

    public function setCurrentGear($currentGear)
    {
        $this->currentGear = $currentGear;
    }

    public function accelerate()
    {

    }

    public function changeGearUp()
    {
        if ($this->currentGear < 5) {
            $this->currentGear++;
        }
    }

    public function changeGearDown()
    {
        if ($this->currentGear > 1) {
            $this->currentGear--;
        }
    }

    public function changeGear($nextGear)
    {
        if (($nextGear >= 1) && ($nextGear <= 5)) {
            $this->currentGear = $nextGear;
        }
    }

    public function changeColor($newColor)
    {
        $this->color = $newColor;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getIsSport()
    {
        return $this->isSport;
    }

    public function setIsSport($isSport)
    {
        $this->isSport = $isSport;
    }

    public function isMoreExpensive($car)
    {
        if ($car->getPrice() > 200) {
            return 'Car prise is more than 200.';
        }
    }

    public function calculateCarPriceForScrap($metalPrice)
    {
        $coef = 0.2;
        if (($this->getColor() === 'black') || ($this->getColor() === 'white')) {
            $coef += 0.05;
        }
        if ($this->getIsSport() === true) {
            $coef += 0.05;
        }
        return $metalPrice * $coef;
    }

    public function changeOwner(Person $newOwner)
    {
        $this->owner = $newOwner;
    }
}