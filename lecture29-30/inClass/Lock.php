<?php
/*
 *
 */
class Lock
{
    private $status;

    public function __construct($status)
    {
        $this->status = $status;
    }

    public function display()
    {
        return 'and the lock is ' . $this->status;
    }
}