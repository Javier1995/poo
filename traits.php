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

interface iDB
{
    public function connect();
}
class MySQL implements iDB
{   
    use myUtilities;
    public $name = "MySQL ....";
    public function connect()
    {
        echo  "Conectando con MySQL\n";
    }
}

class Oracle implements iDB
{   
    public $name = "Oracle .....";
    use myUtilities;
    public function connect()
    {
        echo "Conectando con Oracle\n";
    }
}
 
$instDog = new Dog();
$instCat = new Cat();
$instMySQL  = new MySQL();
$instOracle = new Oracle();

$instDog->sayMyName();
$instOracle->sayMyName();
$instMySQL->sayMyName();
$instCat->sayMyName();