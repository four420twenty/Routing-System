<?php

namespace App\Services;

class Router
{
    private $routes = [];

    public function addRoute($uri, $pageName)
    {
        $this->routes[] = [
            'uri' => $uri,
            'page' => $pageName,
        ];
    }

    public function run()
    {
        $uri = '/' . $_GET['uri'];

        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri) {
                if (file_exists('Views/Pages/' . $route['page'] . '.php')) {
                    require_once 'Views/Pages/' . $route['page'] . '.php';
                } else {
                    require_once 'Views/Errors/404.php';
                }
            }
        }
    }
}