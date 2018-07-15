<?php 

Class Person
{

    public $age;
    public $name;
    public function run() 
    {
            return ' está corriendo';
    }

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age  = $age;
        
    }


}

$person = new Person('Javier', 20);

echo $person->name;

echo $person->run();

$person2 = new Person('Cheo', 23);

echo "<br />";
echo $person2->name;
echo $person2->run();