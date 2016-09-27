<?php



namespace Davidmgilo\Phplearning;

use PDO;

class Connection
{
    //dependency injection : depen de la configuració , cal passar per paràmetres
    public static function make($config,$message){
        try {

            $pdo = new PDO($config['dbtype'] . ':host=' .
                $config['dbhost'] . ';dbname='.
                $config['dbname'],
                $config['username'],
                $config['password']);
            return $pdo;
        } catch (PDOException $e) {
            die($message['DatabaseErrorConnection'] . $e->getMessage());
        }

    }

//    public function make(){
//
//    }
// Equivalent

}