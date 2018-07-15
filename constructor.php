<?php
/** 
 * 
 * @version realese section
 * 
 * 
 * 
 * 
*/

class Person
{

    public $age;
    public $name;

    public function run() 
    {
        return' Estoy corriendo';
    }

    public function walk()
    {
        return' Estoy caminando';
    }

    public function greet( $otherPersonName )
    {
        return $this->name . ' saluda a ' . $otherPersonName;
    }
    /**
     * 
     * Lo primero que se manda a llamar para ejecutar la clase
     * 
     */
    public function __construct()
    {
        echo "Estoy siendo creado" .rand(1, 99). '<br>';
    }


}


for($i = 0; $i < 5; $i++)
{
    //$person = new Person(); 
}
$person = new Person();
echo $person->run();
echo $person->walk();
echo $person->greet('Javier');