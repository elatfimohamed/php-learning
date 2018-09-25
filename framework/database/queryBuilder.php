<?php
/**
 * Created by PhpStorm.
 * User: elatfi
 * Date: 21/09/18
 * Time: 16:57
 */

function fetchAll($connection, $table) {
    $statement = $connection->prepare("SELECT * FROM $table;");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS);
}

