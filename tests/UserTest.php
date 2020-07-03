<?php
use PHPUnit\Framework\TestCase;

require 'controllers/userController.php';
require 'db/config/dbconnector.php';
require 'db/config/querybuilder.php';
require 'models/user.php';

class UserTest extends TestCase
{
    //test creating user
    public function test_create_user()
    {
        $user = new User(Connection::make());

        // create user, get returnedthe id of the created user
        $dbuser = $user->createUser('janedoe@gmail.com', 'Jane', 'Doe', 'password');

        //make sure the created use ID is not null
        $this->assertNotNull($dbuser);
    }

    //test showing user by id
    //make sure the returned user matches the initial input
    public function test_show_user()
    {
        $user = new User(Connection::make());

        $dbuser = $user->createUser('janedoe@gmail.com', 'Jane', 'Doe', 'password');

        $checkUser = $user->findUser($dbuser);

        $this->assertEquals($checkUser["emailAddress"], 'janedoe@gmail.com');
        $this->assertEquals($checkUser["firstName"], 'Jane');
        $this->assertEquals($checkUser["lastName"], 'Doe');
        $this->assertEquals($checkUser["password"], 'password');

    }

    //test editing user by id
    public function test_edit_user()
    {
        $user = new User(Connection::make());

        $dbuser = $user->createUser('janedoe@gmail.com', 'Jane', 'Doe', 'password');

        $updatedUser = $user->updateUser($dbuser, 'johndoe@gmail.com', 'John', 'Doe', 'newpassword');

        //make sure the amount of affected rows is 1
        $this->assertEquals(1, $updatedUser);

    }

    //test deleting user by id
}
