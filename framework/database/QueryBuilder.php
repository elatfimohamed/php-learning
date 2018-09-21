<?php
/**
 * Created by PhpStorm.
 * User: elatfi
 * Date: 21/09/18
 * Time: 17:02
 */

class QueryBuilder {
    public static function fetchAll($connection, $table) {
        $statement = $connection->prepare("SELECT * FROM $table;");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}