<?php
class Connection {
    public static function connect()
    {
//        $config = App::resolve('config');
//        var_dump($config);
        $database = config('database');
        var_dump($database);
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=php-learning','debian-sys-maint','73ljBdLD9Yiztk1I');
           // return new PDO("$database['type']:host=127.0.0.1;dbname=php-learning','debian-sys-maint','XpYuavOBcoVff67Q");
//            return new PDO('mysql:host=127.0.0.1;dbname=php_learning','debian-sys-maint','XpYuavOBcoVff67Q');
        } catch (\PDOException $e) {
            die('Could not connect: ' . $e);
        }
    }
}