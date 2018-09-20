<?php

class Task
{
    // PROPIETATS
    public $name;

    public $completed;

    /**
     * Task constructor.
     * @param $name
     * @param $completed
     */
    public function __construct($name, $completed)
    {
        $this->name = $name;
        $this->completed = $completed;
    }

    public function complete()
    {
        $this->completed = true;
    }

}