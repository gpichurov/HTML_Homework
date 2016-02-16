<?php

class Employee
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var Task
     */
    protected $currentTask;

    /**
     * @var int
     */
    protected $hoursLeft;

    /**
     * @var AllWork
     */
    protected $allWork;

    public function work()
    {

    }

    public function startWorkingDay()
    {

    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return Task
     */
    public function getCurrentTask()
    {
        return $this->currentTask;
    }

    /**
     * @param Task $currentTask
     */
    public function setCurrentTask($currentTask)
    {
        $this->currentTask = $currentTask;
    }

    /**
     * @return int
     */
    public function getHoursLeft()
    {
        return $this->hoursLeft;
    }

    /**
     * @param int $hoursLeft
     */
    public function setHoursLeft($hoursLeft)
    {
        $this->hoursLeft = $hoursLeft;
    }

    /**
     * @return AllWork
     */
    public function getAllWork()
    {
        return $this->allWork;
    }

    /**
     * @param AllWork $allWork
     */
    public function setAllWork($allWork)
    {
        $this->allWork = $allWork;
    }

}