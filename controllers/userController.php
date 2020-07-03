<?php
require 'db/config/dbconnector.php';
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

        $data = array(
            "userId" => $dbuser,
        );

        require 'views/showData.php';
    }

    //function to call the show user method
    public function showUserModel($id)
    {
        $data = $this->user->findUser($id);

        if ($data == null) {
            $data = array(
                $id => "User not found",
            );
        }

        require 'views/showData.php';
    }

    //function to call the edit user method
    public function updateUserModel($id, $email, $firstName, $lastName, $password)
    {
        $updated = $this->user->updateUser($id, $email, $firstName, $lastName, $password);

        if ($updated == 1) {
            $data = array(
                $id => "User updated",
            );
        } else {
            $data = array(
                $id => "Update failed",
            );
        }

        require 'views/showData.php';
    }

    //function to call the dele user method
    public function deleteUserModel($id)
    {
        $deleted = $this->user->deleteUser($id);

        if ($deleted == 1) {
            $data = array(
                $id => "User deleted",
            );
        } else {
            $data = array(
                $id => "Delete failed",
            );
        }

        require 'views/showData.php';
    }
}
