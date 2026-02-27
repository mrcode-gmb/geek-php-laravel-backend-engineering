<?php

class Animal{
    protected $name;
    protected $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function eating()
    {
        return "{$this->name} is eating.";
    }
    public function getInfo()
    {
        return "Name: {$this->name}, Age: {$this->age}";
    }

}

class Dog extends Animal{
    private $breed;
    public function __construct($name, $age, $breed)
    {
        parent::__construct($name, $age);
        $this->breed = $breed;
    }
    public function breed()
    {
        return "Breed: {$this->breed}";
    }
}

class Cat extends Animal{
    private $color;
    public function __construct($name, $age, $color)
    {
        parent::__construct($name, $age);
        $this->color = $color;
    }
    public function color()
    {
        return "Color: {$this->color}";
    
    }
    public function eating()
    {
        return "{$this->name} is eating fish.";
    }
}


$dog = new Dog("Buddy", 3, "Golden Retriever");
echo $dog->eating();
echo "<br>";
echo $dog->getInfo();
echo "<br>";
echo $dog->breed();


echo "<br><br>";

$cat = new Cat("Whiskers", 2, "Gray");
echo $cat->eating();
echo "<br>";
echo $cat->getInfo();
echo "<br>";
echo $cat->color();