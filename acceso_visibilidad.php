<?php

class MyProfile
{
    private $email = 'quiroga';
    public  $name;
    public  $lastName;
    public function __construct()
    {

    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        return $this->email = $email;
    }
}

$instMyProfile = new MyProfile;




print $instMyProfile->setEmail( "quiroga@gmail.com<br>" );