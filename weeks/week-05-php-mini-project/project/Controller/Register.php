<?php
namespace Controller;
require_once __DIR__ . "/Controller.php";
new Controller();
class Register extends Controller{
    
    public static function log()
    {
        // return self::getConnect();
    }

    public static function store(string $username, string $password)
    {   
        $query = self::$db->prepare("INSERT INTO users(`username`, `password`) VALUES(?, ?)");
        $query->execute([$username, $password]);
    }
}
