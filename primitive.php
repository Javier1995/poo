<?php 

class Pet
{
    public $name =  'Firulais';
}

class Person
{
    public  $age;
    public  $name;
    private $money_in_wallet;
    private $todos;
    private $married;

    public function run()
    {
        echo ' Estoy corriendo';
    }
    
    public function walk()
    {
        echo ' Estoy caminando';
    }

    public function greet(Person $otherPerson)
    {
        echo "Hola, ".$otherPerson->name.'<br>';
    }

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function adopt(Pet $instancePet)
    {
        echo 'Hey adopté a '.$instancePet->name;
    }
}

$person1 = new Person('Gerardo');

$person2 = new Person('Enrique');

$pet = new Pet();

$person1->greet($person2);

$person2->adopt($pet);

