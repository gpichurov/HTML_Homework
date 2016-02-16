<?php

class AllWork
{
    /**
     * @var Task[]
     */
    protected $tasks;

    /**
     * @var int
     */
    protected $freePlacesForTasks;

    /**
     * @var int
     */
    protected $currentUnassignedTask;

    /**
     * AllWork constructor.
     */
    public function __construct()
    {
        $this->tasks = [];
        $this->freePlacesForTasks = 10;
        $this->currentUnassignedTask = 0;
    }

    /**
     * @param $task
     */
    public function addTask(Task $task)
    {
        if ($this->freePlacesForTasks > 0) {
            array_push($this->tasks, $task);
            $this->freePlacesForTasks--;
            echo $task->getName() . ' has been added to the tasks!' . PHP_EOL;
        } else {
            echo 'Tasks are full!' . PHP_EOL;
        }
    }

    public function getNextTask()
    {
        $result = $this->tasks[$this->currentUnassignedTask];
        $this->currentUnassignedTask++;
        return $result;
    }

    public function isAllWorkDone()
    {
        if ($this->currentUnassignedTask >= count($this->tasks)) {
            echo 'No more tasks !!!';
            return true;
        } else {
            return false;
        }
    }
}