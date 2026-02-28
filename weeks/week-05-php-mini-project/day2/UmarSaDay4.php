<?php

class Shape{
    public $name;
    public function __construct($name){
        $this->name = $name;
    }

    public function calculateArea()
    {
        return "Calculating area for {$this->name} not implement";
    }
    public function shapeName()
    {
        return $this->name;
    }
}

class Rectangle extends Shape{
    private $width;
    private $hight;

    public function __construct($width, $hight){
        parent::__construct("Rectangle");
        $this->width = $width;
        $this->hight = $hight;
    }
    public function calculateArea()
    {
        return $this->width * $this->hight;
    }

}

class Circle extends Shape{
    private $radius;

    public function __construct($radius)
    {
        parent::__construct("Circle");
        $this->radius = $radius;
    }
    public function calculateArea()
    {
        return pi() * $this->radius * $this->radius;
    }
}

$shapes = [
    new Rectangle(5, 10),
    new Rectangle(20, 3),
    new Circle(10),
];

foreach($shapes as $shape){
    echo "Shape: {$shape->shapeName()} - Area: {$shape->calculateArea()} <br>";
}


echo "<br><br>";

// STATIC METHOD OR Property

class MathHelper{
    public static $number;

    public function __construct()
    {
        
    }
    public static function setNumber($num)
    {
        self::$number = $num;
    }

    public static function square($num)
    {
        return $num * $num;
    }
}

// set number 

$first = MathHelper::square(10);
$second = MathHelper::square(20);

echo $first;
echo "<br>";
echo $second;