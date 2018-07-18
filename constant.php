<?php

class Config
{
  /* const DB_USER_NAME     = 'jquirogaa';
  const DB_USER_PASSWORD = '123456780';
  const DB_DATABASE_NAME = 'hospital'; */
  const ENVIROMENT = 'staging';


}

class BaseProfile extends Config
{
    protected $conection_data = "Conexion BD";

    protected function connect2DB()
    {
      if('production' == self::ENVIROMENT)
       {
          echo 'Conectando a produccion';
       }

      if( 'development' == self::ENVIROMENT )
       {
           
          echo 'Conectando a desarrollo';
       }

      if( 'staging' == self::ENVIROMENT )
       {
          echo 'Conectando a staging';
       }
    }

    public function __construct()
    {
        $this->connect2DB();
    } 
}


class MyProfile extends BaseProfile
{
    const DOMAIN_NAME = 'quirogasocial.com';
    private $email = 'quiroga@gmail.com';
    public $name;
    public $last_name;

    public function __construct()
    {
       $this->connect2DB();
       //echo parent::connect2DB();
      // self::DOMAIN_NAME;

       
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
//$inst = new MyProfile();

//echo MyProfile::DOMAIN_NAME;

$instProfile = new MyProfile;