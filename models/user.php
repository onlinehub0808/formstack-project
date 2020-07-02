<?php

class User
{

    protected $id;
    protected $email;
    protected $firstName;
    protected $lastName;
    protected $password;

    public function __construct($id, $email, $firstName, $lastName, $password)
    {
        $this->id = $id;
        $this->email = $email;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->password = $password;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getlastName()
    {
        return $this->lastName;
    }

    public function getpassword()
    {
        return $this->password;
    }

}
