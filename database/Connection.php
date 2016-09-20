<?php

/**
 * Created by PhpStorm.
 * User: alumne
 * Date: 20/09/16
 * Time: 21:24
 */
class Connection
{
    public static function make(){
        try {
            $pdo = new PDO('mysql:host=127.0.0.1;dbname=prova', 'root', '');
            return $pdo;
        } catch (PDOException $e) {
            die("Ha hagut un error durant la connexió. Missatge: " . $e->getMessage());
        }

    }

//    public function make(){
//
//    }
// Equivalent

}