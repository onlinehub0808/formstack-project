<?php
require 'models/user.php';

class userController
{
    public function createUser($id, $email, $firstName, $lastName, $password)
    {
        //create a user object with the data from the unit test
        $user = new user();
        $user->setid($id);
        $user->setEmail($email);
        $user->setFirstName($firstName);
        $user->setlastName($lastName);
        $user->setpassword($password);

        return $user;
    }
}
