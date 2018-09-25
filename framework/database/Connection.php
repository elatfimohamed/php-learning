<?php
class Connection {
    public static function connect()
    {
        try {
            return new PDO('mysql:host=127.0.0.1;dbname=php_learning','debian-sys-maint','XpYuavOBcoVff67Q');
//            return new PDO('mysql:host=127.0.0.1;dbname=php_learning','debian-sys-maint','XpYuavOBcoVff67Q');
        } catch (\PDOException $e) {
            die('Could not connect: ' . $e);
        }
    }
}