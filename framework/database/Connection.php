<?php
class Connection {
    public static function connect()
    {
//        $database = config('database');
//        var_dump($database);
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=php-learning','debian-sys-maint','73ljBdLD9Yiztk1I');
            //return new PDO("$database['type']:host=127.0.0.1;dbname=php-learning','debian-sys-maint','73ljBdLD9Yiztk1I");
        } catch (\PDOException $e) {
            die('Could not connect: ' . $e);
        }
    }
}