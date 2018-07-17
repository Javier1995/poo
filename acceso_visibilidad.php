<?php

class MyProfile
{
    private $email = 'quiroga218@outlook.es';
    private $name  = 'javier';
    protected  $lastName = 'quiroga';
    public function __construct()
    {

    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        return $this->email = $email .'<br/>';
    }

    public function getName($name)
    {
        return $this->name = $name;
    }

    public function setLastName()
    {
        return $this->lastName;
    }

    public function setName()
    {
        return $this->name;
    }
}

$instMyProfile = new MyProfile;

print $instMyProfile->getEmail();

print $instMyProfile->setLastName();

print $instMyProfile->setName();
