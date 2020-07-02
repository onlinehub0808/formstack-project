<?php
use PHPUnit\Framework\TestCase;

require 'controllers/userController.php';

class UserTest extends TestCase
{

    public function test_can_create_user()
    {
        $user = new userController();

        $user->createUser(1, 'janedoe@gmail.com', 'Jane', 'Doe', 'password');

        $this->assertIsObject($user);
    }
}
