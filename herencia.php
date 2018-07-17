<?php
class Animal
{
    public $soundType =  ' hago un sonido';
    public function __construct()
    {
        echo ' Ha nacido un animal';
    }
    public function run()
    {
        echo ' Yo corro';
    }
    
    public function walk()
    {
        echo ' Yo camino';
    }

    public function getSound()
    {
        echo ' yo' . $this->soundType;
    }
    
}
class Dog extends Animal 
{  
    public  $soundType = ' ladro';
    public function __construct()
    {   parent::__construct();   
        echo ' Ha nacido un perro';
    }
}

class Cat extends Animal
{   public $soundType = ' maullo';
    public function __construct()
    {   parent::__construct();
        echo ' Ha nacido un gato';
    }
}

$dog = new Dog();
$dog->run();
$dog->getSound();
$cat = new Cat();
$cat->run();
$cat->getSound();

if( $dog instanceof Dog )
{
    echo ' Es un perro';
}

if( $dog instanceof Animal )
{
    echo ' Es un animal';
}