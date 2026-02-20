<?php

class Auth{
    const IS_ACTIVE = "is active";
}



echo Auth::IS_ACTIVE;

abstract class Car{
    public static $name;

    public function __construct($name)
    {
        self::$name = $name;
    }

    abstract public function intro();
}


class Honda extends Car{
    public function intro()
    {
        return "{$this->name} is a Honda";
    }
}

trait Speed{
    abstract public function colorType();
}
interface Color{
    public function color();
}

class Toyota extends Car implements Color{
    use Speed;
    public static function introduce()
    {
        return self::$name. " is a Toyota";
    }

    public function intro(){
        return "{$this->name} is a Toyota";
    }

    public function color()
    {
        
    }

    public function colorType()
    {
        
    }
}

echo Toyota::introduce();