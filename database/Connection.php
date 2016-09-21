<?php




class Connection
{
    //dependency injection : depen de la configuració , cal passar per paràmetres
    public static function make($config){
        try {

            $pdo = new PDO($config['dbtype'] . ':host=' .
                $config['dbhost'] . ';dbname='.
                $config['dbname'],
                $config['username'],
                $config['password']);
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