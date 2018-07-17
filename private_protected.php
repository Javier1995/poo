<?php

class BaseProfile
{
    protected $conection_data = "Conexion BD";

    protected function connect2DB()
    {
        echo $this->conection_data;
    }

    public function __construct()
    {
        $this->connect2DB();
    }
}


class MyProfile extends BaseProfile
{
    public $name;
    public $last_name;

    public function __construct()
    {
        $this->connect2DB();
    } 
 
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
}


$intBase = new MyProfile;
$intBase->connect2DB();