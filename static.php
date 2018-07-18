<?php

class DBStatic
{
    protected static $db_user     = 'jquirogaa';
    protected static $db_password = 'te-130026';
    protected static $db_name     = 'hospital';
    protected static $db_port     = '5432';
    protected static function connect()
    {
        echo "Conectando con :". self::$db_user. " : " . self::$db_password . " : " .self::$db_name . " : " . self::$db_port;
    }
}

class BaseProfile extends DBStatic
{
    protected $conection_data = "Conexion BD";

    protected function connect2DB()
    {
        echo $this->conection_data;
    }

   /*  public function __construct()
    {
        $this->connect2DB();
    } */
}


class MyProfile extends BaseProfile
{
    public $name;
    public $last_name;

    public function __construct()
    {
        self::connect();
       //echo parent::connect2DB();
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

/* echo DBStatic::$db_name;
echo '<br>';
echo DBStatic::$db_user;
echo '<br>';
echo DBStatic::$db_password;
echo '<br>';
echo DBStatic::$db_port;
echo '<br/>';
echo DBStatic::connect();
echo '<br />';*/
$inst = new MyProfile();



