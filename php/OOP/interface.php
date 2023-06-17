<?php
interface Animal
{
    public function run();
}

class Dog implements Animal
{
    public function run()
    {
        echo "The Dog is running";
    }
}

class Cat implements Animal
{
    public function run()
    {
        echo "The Cat is running";
    }

}

function app(Animal $obj){
    $obj->run();
}

app(new Dog);
app(new Cat);