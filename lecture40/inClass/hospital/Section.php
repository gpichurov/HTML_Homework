<?php

class Section
{
    private $name;

    private $rooms;

    /**
     * Section constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;

        foreach (range(0, 9) as $num) {
            $this->rooms = new Room();
        }
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return Room
     */
    public function getRooms()
    {
        return $this->rooms;
    }

    /**
     * @param Room $rooms
     */
    public function setRooms($rooms)
    {
        $this->rooms = $rooms;
    }


}