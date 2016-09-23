<?php

/**
 * Class Router
 */
class Router
{

    /**
     * @var array
     */
    protected $routes = [];

    /**
     * @param $routes
     */
    public function define($routes){
        $this->routes=$routes;
    }

    /**
     * @param $uri
     * @throws Exception
     */
    public function direct($uri)
    {
        if(array_key_exists($uri,$this->routes)){
            return $this->routes[$uri];
        } else{
            throw new Exception("No s'ha trobat la ruta");
        }
    }


}