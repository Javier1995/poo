<?php
trait myUtilities
{
    function sayMyName()
    {
        echo "My nombre es ". $this->name . "\n" ;
    }
}
abstract class Animal
{
    abstract public function makeSound();

    public function run()
    {
        echo "Corriendo\n";
    }
}

class Dog extends Animal
{   
    public $name = "Puqui"; 

    use myUtilities;
    public function makeSound()
    {
        echo "Guau\n";
    }


}

class Cat extends Animal
{   use myUtilities;
    public $name = "Cocorito";
    public function makeSound()
    {
        echo "Miau\n";
    }
}

final class Schnauzer extends Dog
{
    public function __construct()
    {
        $this->breed = 'Schnauzer';
    }
}

$instDog = new Schnauzer;
