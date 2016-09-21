<?php




class Connection
{
    public static function make(){
        try {
            $config = [
                'dbtype' => 'mysql',
                'dbname' => 'prova',
                'username' => 'root',
                'password' => '',
                'dbhost' => '127.0.0.1'
            ];


            var_dump($config['dbtype'] . ':host=' .
                $config['dbhost'] . ';dbname='. $config['dbname']);
            //$pdo = new PDO('mysql:host=127.0.0.1;dbname=prova', 'root', '');
            $pdo = new PDO($config['dbtype'] . ':host=' .
                $config['dbhost'] . ';dbname='. $config['dbname'],
                $config['username'], $config['password']);
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