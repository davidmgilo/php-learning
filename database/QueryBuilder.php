<?php


class QueryBuilder{

    function all(PDO $pdo,$table)
    {
        $query = $pdo->prepare("SELECT * FROM {$table}");

        $query->execute();

        return $query->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Task::class);
    }

    //querybuilder depèn de connection
    //type hinting: donar al sistema el tipus que ha de ser

}