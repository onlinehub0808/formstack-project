<?php
require 'db/config/dbconnector.php';
require 'db/config/querybuilder.php';
require 'models/user.php';

class UserController
{
    public function __construct()
    {
        $this->user = new User(Connection::make());
    }
    //function to call the create user method
    public function createUserModel($email, $firstName, $lastName, $password)
    {
        // create user, get returnedthe id of the created user
        $dbuser = $this->user->createUser($email, $firstName, $lastName, $password);

        return $dbuser;
    }

    //function to call the show user method
    public function showUserModel($id)
    {
        $showUser = $this->user->findUser($id);

        return $showUser;
    }

    //function to call the edit user method
    public function updateUserModel($id, $email, $firstName, $lastName, $password)
    {
        $updated = $this->user->updateUser($id, $email, $firstName, $lastName, $password);

        if ($updated == 1) {
            $status = "User updated";
        } else {
            $status = "Update failed";
        }

        return $status;
    }

    //function to call the dele user method
    public function deleteUserModel($id)
    {
        $deleted = $this->user->deleteUser($id);

        return $deleted;
    }
}
