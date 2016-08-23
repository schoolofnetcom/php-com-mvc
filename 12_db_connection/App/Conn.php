<?php

namespace App;

class Conn
{
    public static function getDb()
    {
        return new \PDO("mysql:host=localhost;dbname=mvc","root","root");
    }
}