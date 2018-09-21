<?php
/**
 * Created by PhpStorm.
 * User: elatfi
 * Date: 21/09/18
 * Time: 17:01
 */

class Connection {
    public static function connect()
    {
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=php-learning','debian-sys-maint','73ljBdLD9Yiztk1I');
        } catch (\PDOException $e) {
            die('Could not connect: ' . $e);
        }
    }
}