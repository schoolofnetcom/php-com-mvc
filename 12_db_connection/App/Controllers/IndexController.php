<?php

namespace App\Controllers;

use App\Conn;
use App\Models\Client;
use SON\Controller\Action;

class IndexController extends Action
{

    public function index()
    {
        $client = new Client(Conn::getDb());
        $this->views->clients = $client->fetchAll();

        $this->render("index");
    }

    public function contact()
    {
        $this->views->cars = array("Mustang","Ferrari", "Lamborghini");

        $this->render("contact",false);
    }

}