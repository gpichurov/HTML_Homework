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

    /**
     * Employee constructor.
     * @param string $name
     */
    public function __construct($name, AllWork $allWork)
    {
        $this->name = $name;
        $this->allWork = $allWork;
    }

    public function work()
    {
        if ($this->allWork->isAllWorkDone()) {
            return ;
        }
        if ($this->hoursLeft == 0) {
            $this->startWorkingDay();
        }

        if ((!(array)$this->getCurrentTask())) {
            $this->setCurrentTask($this->allWork->getNextTask());
        }

        if ($this->currentTask->getWorkingHours() >= $this->hoursLeft) {
            echo $this->name . ' is working on task ' . $this->currentTask->getName() .
                ' for ' . $this->hoursLeft . ' hours.' . PHP_EOL;

            $this->currentTask->setWorkingHours($this->currentTask->getWorkingHours() - $this->hoursLeft);
            $this->hoursLeft = 0;
        } else {
            echo $this->name . ' is working on task ' . $this->currentTask->getName() .
                ' for ' . $this->currentTask->getWorkingHours() . ' hours.' . PHP_EOL;

            $this->hoursLeft = $this->hoursLeft - $this->currentTask->getWorkingHours();
            $this->setCurrentTask(null);
        }

        if ($this->hoursLeft > 0) {
            $this->work();
        }
    }

    public function startWorkingDay()
    {
        $this->hoursLeft = 8;
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
        echo 'Assigning task ' . $this->currentTask->getName() . ' to ' . $this->name . PHP_EOL;
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