<?php

class Task
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $workingHours;

    /**
     * Task constructor.
     * @param string $name
     * @param int $workingHours
     */
    public function __construct($name, $workingHours)
    {
        $this->name = $name;
        $this->workingHours = $workingHours;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getWorkingHours()
    {
        return $this->workingHours;
    }

    /**
     * @param int $workingHours
     */
    public function setWorkingHours($workingHours)
    {
        $this->workingHours = $workingHours;
    }

}