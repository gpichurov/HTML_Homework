<?php

class Hospital
{
    protected $doctors;

    protected $nurses;

    protected $patients;

    protected $sections;

    private static $instance;
    /**
     * Hospital constructor. 
     */
    private function __construct()
    {
        $this->doctors = [];
        $this->nurses = [];
        $this->patients = [];
        $this->sections = [];
    }

    public function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function checkIn ($firstName, $lastName, $gender, $plan)
    {

    }

    protected function checkOut (Patient $patient)
    {

    }

    public function initSections()
    {
        $this->sections = new Section('Ortopedy');
        $this->sections = new Section('Cardiology');
        $this->sections = new Section('Virusology');
    }

    private function initDoctors()
    {
        $this->doctors[] = new Doctor('Ivan1', 'Ivanov1');
        $this->doctors[] = new Doctor('Ivan2', 'Ivanov2');
        $this->doctors[] = new Doctor('Ivan2', 'Ivanov2');
    }

    private function getRandomDoc()
    {
        $index = rand(0, count($this->doctors) - 1);

        return $this->doctors;
    }

    private function hasAvalRoom(Patient $patient)
    {

    }
}