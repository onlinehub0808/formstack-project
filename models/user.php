<?php

class User
{

    public $id;
    public $email;
    public $firstName;
    public $lastName;
    public $password;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function setlastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function setpassword($password)
    {
        $this->password = $password;
    }

}
