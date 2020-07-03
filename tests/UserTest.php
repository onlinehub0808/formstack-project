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

    //test deleting user by id
}
