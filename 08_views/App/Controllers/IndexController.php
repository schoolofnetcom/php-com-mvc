<?php

namespace App\Controllers;

class IndexController
{
    public function index()
    {
        $cars = array("Mustang","Ferrari", "Lamborghini");

        include_once "../App/Views/index/index.phtml";
    }

    public function contact()
    {
        $cars = array("Mustang","Ferrari", "Lamborghini");

        include_once "../App/Views/index/contact.phtml";
    }
}