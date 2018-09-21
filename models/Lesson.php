<?php
/**
 * Created by PhpStorm.
 * User: elatfi
 * Date: 21/09/18
 * Time: 16:53
 */

class Lesson
{
    // PROPIETATS
    public $name;


    /**
     * Lesson constructor.
     * @param $name
     */
    public function __construct($name = '')
    {
        $this->name = $name;
    }
}

