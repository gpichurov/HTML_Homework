<?php

class AllWork
{
    /**
     * @var Task[]
     */
    protected $tasks = [];

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
     * @param Task[]
     */
    public function __construct()
    {
        $this->tasks = func_get_args();
        $this->freePlacesForTasks = 10;
        $this->currentUnassignedTask = 0;
    }

    /**
     * @param $task
     */
    public function addTask($task)
    {
        array_push($this->tasks, $task);
    }

    public function getNextTask()
    {

    }

    public function isAllWorkDone()
    {

    }
}