<?php

class Company
{
    private $offices;

    private static $instance;

    /**
     * Company constructor.
     */
    private function __construct()
    {
        $this->offices = [];
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function initOffices()
    {
        $this->offices = func_get_args();
    }

}