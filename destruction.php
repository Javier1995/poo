<?php

class Indestructible
{
    public $name;
    public function __construct()
    {
        print "Clase creada\n";
        $this->name = "Indesctructible";
    }

    public function __destruct()
    {
        print "Destruyendo a " . $this->name . "\n";
    }
}

$instIndestructible = new Indestructible();
unset($instIndestructible );

for($i = 0; $i < 40; $i++)
{
    echo "{$i}\n";

    if($i > 26)
    {
        exit;
    }
}