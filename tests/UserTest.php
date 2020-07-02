<?php
use PHPUnit\Framework\TestCase;

require 'controllers/userController.php';
require 'db/config/dbconnector.php';
require 'models/user.php';

class UserTest extends TestCase
{

    public function test_can_create_user()
    {
        //returns object user from the user table
        $user = new user(1, 'janedoe@gmail.com', 'Jane', 'Doe', 'password');

        //checks if object successfully saved the first name
        $this->assertEquals('Jane', $user->getFirstName());
        $this->assertEquals('Doe', $user->getLastName());
        $this->assertEquals('janedoe@gmail.com', $user->getEmail());
        $this->assertEquals('password', $user->getpassword());

    }
}
