<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 16/1/18
 * Time: 15:46
 */
class Router
{
    protected $routes = [];
    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    public function define($routes)
    {
        $this->routes = $routes;
    }
    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        } else {
            throw new Exception('No se ha podido cargar la ruta '. $uri);
        }
    }
}