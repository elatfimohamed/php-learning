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
    public function __construct($name = '', $completed = false)
    {
        $this->name = $name;
        $this->completed = $completed;
    }

    public function complete()
    {
        $this->completed = true;
    }

    public static function all()
    {
        $pdo = Connection::connect();
        return QueryBuilder::fetchAll($pdo,'tasks');
    }

}