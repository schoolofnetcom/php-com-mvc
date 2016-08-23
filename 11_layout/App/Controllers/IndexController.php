<?php

namespace App\Controllers;

use SON\Controller\Action;

class IndexController extends Action
{

    public function index()
    {
        $this->views->cars = array("Mustang","Ferrari", "Lamborghini");

        $this->render("index");
    }

    public function contact()
    {
        $this->views->cars = array("Mustang","Ferrari", "Lamborghini");

        $this->render("contact",false);
    }

}