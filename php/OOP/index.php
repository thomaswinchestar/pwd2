<?php

class Animal
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function run()
    {
        echo "$this->name is running";
    }

    static function info()
    {
        echo "Animal Class";
    }
}

class Dog extends Animal
{
    public function hello()
    {
        echo "$this->name says hello";
    }
}

Animal::info();
$bobby = new Dog("Bobby");
$bobby->hello();

