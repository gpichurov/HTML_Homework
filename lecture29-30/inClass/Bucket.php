<?php

class Bucket
{
    private $maxVolume;

    private $currentVolume;

    private $name;

    public function getName()
    {
        return $this->name;
    }

    public function getCurrentVolume()
    {
        return $this->currentVolume;
    }

    public function getMaxVolume()
    {
        return $this->maxVolume;
    }

    public function getRemainingSpace()
    {
        return $this->maxVolume - $this->currentVolume;
    }

    public function __construct($maxVolume, $currentVolume, $name)
    {
        $this->maxVolume = $maxVolume;
        $this->currentVolume = $currentVolume;
        $this->name = $name;
    }

    public function addLiquid($volume)
    {
        $this->currentVolume += $volume;
        if ($this->currentVolume > $this->maxVolume) {
            $this->currentVolume = $this->maxVolume;
        }
    }

    public function emptyDownDrain()
    {
        $this->currentVolume = 0;
    }

    public function fill()
    {
        return $this->currentVolume = $this->maxVolume;
    }

    public function transfer($bucket)
    {
        $transferredVolume = $bucket->getCurrentVolume();
        if ($bucket->getCurrentVolume() > $this->getRemainingSpace()) {
        $transferredVolume = $this->getRemainingSpace();
        }

        $this->addLiquid($transferredVolume);
        $bucket->addLiquid(-$transferredVolume);
    }
}