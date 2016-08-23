<?php

namespace App\Controllers;

use SON\Controller\Action;
use SON\DI\Container;

class IndexController extends Action
{

    public function index()
    {
        $client = Container::getModel("Client");
        $this->views->clients = $client->fetchAll();

        $this->render("index");
    }

    public function contact()
    {
        $this->views->cars = array("Mustang","Ferrari", "Lamborghini");

        $this->render("contact",false);
    }

}