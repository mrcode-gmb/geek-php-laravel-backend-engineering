<?php
namespace Controller;
require_once "Controller.php";
new Controller();
class Select extends Controller{

    public static function all($table){
        $query = self::$db->prepare("SELECT * FROM $table");
        $query->execute();
        return $query->fetchAll();
    }

    public static function where($table, $colAndRow){
        $query = self::$db->prepare("SELECT * FROM $table WHERE {$colAndRow[0]} = {$colAndRow[1]}");
        $query->execute();
        return $query->fetchAll();
    }

}