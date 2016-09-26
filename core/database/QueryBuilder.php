<?php


class QueryBuilder{

    public $pdo;

    /**
     * QueryBuilder constructor.
     * @param $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    //Collaborators / Dependencies

    //Dependency injection
    // Quan s'utilitza continuament un objecte. Passar-lo a una propietat

    function all($table)
    {
        $query = $this->pdo->prepare("SELECT * FROM {$table}");

        $query->execute();

        return $query->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Task::class);
    }

    function afegirSolCamp ($table,$camp,$valor){

        $query = $this->pdo->prepare("INSERT INTO {$table} ({$camp}) VALUES ('{$valor}')");

        $query->execute();

        return $query->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Task::class);
    }

    //querybuilder depèn de connection
    //type hinting: donar al sistema el tipus que ha de ser


}