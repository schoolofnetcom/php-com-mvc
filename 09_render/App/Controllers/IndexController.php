<?php

namespace App\Controllers;

class IndexController
{
    private $views;

    public function __construct()
    {
        $this->views = new \stdClass;
    }

    public function index()
    {
        $this->views->cars = array("Mustang","Ferrari", "Lamborghini");

        $this->render("index");
    }

    public function contact()
    {
        $this->views->cars = array("Mustang","Ferrari", "Lamborghini");

        $this->render("contact");
    }

    public function render($action)
    {
        $current = get_class($this);
        $singleClassName = strtolower(str_replace("Controller","",str_replace("App\\Controllers\\","",$current)));
        include_once "../App/Views/".$singleClassName."/".$action.".phtml";
    }
}