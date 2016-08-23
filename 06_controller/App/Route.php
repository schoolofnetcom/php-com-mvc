<?php

namespace App;


class Route
{
    private $route;

    public  function __construct()
    {
        $this->initRoutes();
        $this->run($this->getUrl());
    }

    public function initRoutes()
    {
        $routes['home'] = array("route"=>'/',"controller"=>"indexController","action"=>"index");
        $routes['contact'] = array("route"=>'/contact',"controller"=>"indexController","action"=>"contact");
        $this->setRoute($routes);
    }

    public function run($url)
    {
        array_walk($this->route,function($route)use($url){
            if($url == $route['route']){
                $class = "App\\Controllers\\".ucfirst($route['controller']);
                $controller = new $class;
                $action = $route['action'];
                $controller->$action();
            }
        });
    }

    public function setRoute(array $routes)
    {
        $this->route = $routes;
    }

    public function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
    }
}