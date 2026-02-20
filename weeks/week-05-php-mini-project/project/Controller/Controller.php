<?php
namespace Controller;

class Controller
{
    public static $db;

    public function __construct()
    {
        self::$db = new \PDO("mysql:host=localhost;dbname=oop_class", "root", "37858023");
    }
}
