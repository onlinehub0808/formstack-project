<?php
use PHPUnit\Framework\TestCase;

require 'db/config/dbconnector.php';
require 'models/user.php';

class UserTest extends TestCase
{
    //test creating user
    public function test_create_user()
    {
        $user = new User(Connection::make());

        // create user, get returnedthe id of the created user
        $dbuser = $user->createUser('janedoe@gmail.com', 'Jane', 'Doe', 'password');

        //make sure the created user ID is not null
        $this->assertNotNull($dbuser);
    }

    //test showing user by id

    public function test_show_user()
    {
        $user = new User(Connection::make());

        $dbuser = $user->createUser('janedoe@gmail.com', 'Jane', 'Doe', 'password');

        $checkUser = $user->findUser($dbuser);

        //make sure the returned user matches the initial input
        $this->assertEquals($checkUser["emailAddress"], 'janedoe@gmail.com');
        $this->assertEquals($checkUser["firstName"], 'Jane');
        $this->assertEquals($checkUser["lastName"], 'Doe');
        $this->assertEquals($checkUser["password"], 'password');

    }

    //test editing user by id
    public function test_edit_user()
    {
        $user = new User(Connection::make());

        //create a new user
        $dbuser = $user->createUser('janedoe@gmail.com', 'Jane', 'Doe', 'password');

        //update the new user
        $updatedUser = $user->updateUser($dbuser, 'johndoe@gmail.com', 'John', 'Doe', 'newpassword');

        //make sure the amount of affected rows is 1
        $this->assertEquals(1, $updatedUser);

    }

    //test deleting user by id
    public function test_delete_user()
    {
        $user = new User(Connection::make());

        //create a new user
        $dbuser = $user->createUser('janedoe@gmail.com', 'Jane', 'Doe', 'password');

        //use the id to delete the same user
        $deleteUser = $user->deleteUser($dbuser);

        //make sure the deletion was successful
        $this->assertEquals(1, $deleteUser);
    }
}
