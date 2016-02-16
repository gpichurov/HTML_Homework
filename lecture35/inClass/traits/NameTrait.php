<?php

/**
 * Created by PhpStorm.
 * User: georgi
 * Date: 16.02.16
 * Time: 15:43
 */
trait NameTrait
{
    private $name;

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
}